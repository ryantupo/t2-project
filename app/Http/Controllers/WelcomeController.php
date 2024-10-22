<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; // Import the File facade
use App\Models\Client; // Make sure to import the Client model

class WelcomeController extends Controller
{
    public function index() {
        // Generate the array of image filenames from the images/home directory
        $images = File::files(public_path('images/home')); // Fetch all files in the directory
        $images = array_map(function($file) {
            return $file->getFilename(); // Get only the filenames
        }, $images);

        // Fetch all clients from the database
        $clients = Client::all(); // Adjust this if you want to limit or filter the clients

        // Pass the array of images and clients to the view
        return view('welcome', compact('images', 'clients'));
    }
}
