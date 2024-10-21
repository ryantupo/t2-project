<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function projectsClients()
    {
        // Retrieve all clients from the database
        $clients = Client::all();

        // Pass the clients data to the 'projects-clients' view
        return view('projects-clients', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_photo' => 'nullable|image',
            'client_name' => 'required',
            'description' => 'required',
            'testimonial' => 'required'
        ]);

        $client = new Client();
        $client->name = $request->client_name;
        $client->description = $request->description;
        $client->testimonial = $request->testimonial;

        // Save client photo
        if ($request->hasFile('client_photo')) {
            $fileName = time() . '_' . $request->file('client_photo')->getClientOriginalName();
            $path = $request->file('client_photo')->storeAs('clients', $fileName, 'public');
            $client->logo_path = $path; // Save the path relative to 'storage/app/public'
        }

        $client->save();

        return redirect()->route('clients.index');
    }



    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'description' => 'required|string',
            'testimonial' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $client->name = $request->client_name;
        $client->description = $request->description;
        $client->testimonial = $request->testimonial;

        if ($request->hasFile('logo')) {
            // Store new logo and delete old one if it exists
            if ($client->logo_path) {
                Storage::disk('public')->delete($client->logo_path);
            }

            // Create a file name for the new image
            $fileName = time() . '_' . $request->file('logo')->getClientOriginalName();

            // Store in the 'images/clients' directory
            $path = $request->file('logo')->storeAs('images/clients', $fileName, 'public');

            // Save the path in the database
            $client->logo_path = $path; // Save the path relative to 'storage/app/public'
        }

        $client->save();

        return redirect()->route('clients.index')->with('success', 'Client updated successfully!');
    }


    public function destroy(Client $client)
    {
        if ($client->logo_path) {
            Storage::disk('public')->delete($client->logo_path);
        }

        $client->delete();

        return redirect()->route('clients.index');
    }
}
