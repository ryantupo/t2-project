@extends('layouts.app')

@section('title', 'Create Project')

@section('content')
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-extrabold" style="color: black !important;">Create Project</h1>
        <p class="mt-4 text-lg" style="color: black !important;">Fill out the form to create a new project.</p>

        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="mt-8 space-y-6">
            @csrf

            <!-- Title Input -->
            <div>
                <label for="title" class="block text-sm font-medium" style="color: black !important;">Project Title</label>
                <input type="text" name="title" id="title" placeholder="Enter project title"
                       style="border-color: gray; border-width: 2px; border-style: solid; border-radius: 0.375rem; box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset; color: black; padding: 0.5rem; width: 100%;"
                       required>
            </div>

            <!-- Description Textarea -->
            <div>
                <label for="description" class="block text-sm font-medium" style="color: black !important;">Description</label>
                <textarea name="description" id="description" placeholder="Enter project description" rows="4"
                          style="border-color: gray; border-width: 2px; border-style: solid; border-radius: 0.375rem; box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset; color: black; padding: 0.5rem; width: 100%;"
                          required></textarea>
            </div>

            <!-- Client Selection -->
            <div>
                <label for="client_id" class="block text-sm font-medium" style="color: black !important;">Client</label>
                <select name="client_id" id="client_id"
                        style="border-color: gray; border-width: 2px; border-style: solid; border-radius: 0.375rem; box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset; color: black; padding: 0.5rem; width: 100%;"
                        required>
                    <option value="" disabled selected>Select a client</option>
                    @foreach($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Photo Upload -->
            <div>
                <label for="photo" class="block text-sm font-medium" style="color: black !important;">Project Photo</label>
                <input type="file" name="photo" id="photo"
                       style="border-color: gray; border-width: 2px; border-style: solid; border-radius: 0.375rem; box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset; padding: 0.5rem; width: 100%;">
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Create Project
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
