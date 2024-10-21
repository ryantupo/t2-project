@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-extrabold text-gray-900">Projects</h1>
        <p class="mt-4 text-lg text-gray-600">Details about our projects.</p>

        <a href="{{ route('projects.create') }}" class="mt-6 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700">
            Add New Project
        </a>

        <div class="mt-8">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($projects as $project)
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    @if($project->photo)
                        <img src="{{ asset('storage/' . $project->photo) }}" alt="{{ $project->title }}" class="w-full h-48 object-cover rounded-md">
                    @endif
                    <h2 class="text-xl font-bold mt-2">{{ $project->title }}</h2>
                    <p class="mt-1 text-gray-700">{{ $project->description }}</p>
                    <p class="mt-1 text-gray-500">Client: {{ $project->client->name }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
