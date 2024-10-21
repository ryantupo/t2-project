<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the projects.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $projects = Project::with('client')->get();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new project.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $clients = Client::all();
        return view('projects.create', compact('clients'));
    }

    /**
     * Store a newly created project in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000', // Adjust the maximum length as needed
            'photo' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'client_id' => 'required|exists:clients,id',
        ]);

        $project = new Project();
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->client_id = $request->input('client_id');

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('project_photos', 'public');
            $project->photo = $photoPath;
        }

        $project->save();

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    /**
     * Show the form for editing the specified project.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\View\View
     */
    public function edit(Project $project)
    {
        $clients = Client::all();
        return view('projects.edit', compact('project', 'clients'));
    }

    /**
     * Update the specified project in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000', // Adjust the maximum length as needed
            'photo' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'client_id' => 'required|exists:clients,id',
        ]);

        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->client_id = $request->input('client_id');

        if ($request->hasFile('photo')) {
            // Delete the old photo if it exists
            if ($project->photo) {
                \Storage::disk('public')->delete($project->photo);
            }

            $photoPath = $request->file('photo')->store('project_photos', 'public');
            $project->photo = $photoPath;
        }

        $project->save();

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified project from storage.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Project $project)
    {
        // Delete the photo if it exists
        if ($project->photo) {
            \Storage::disk('public')->delete($project->photo);
        }

        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
