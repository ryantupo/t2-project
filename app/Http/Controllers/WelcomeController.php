<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client; // Make sure to import the Client model

class WelcomeController extends Controller
{
    public function index() {
        // Generate the array of image filenames
        $images = [];
        for ($i = 1; $i <= 8; $i++) {
            $images[] = "Home - $i.jpg";
        }

        // Fetch all clients from the database
        $clients = Client::all(); // Adjust this if you want to limit or filter the clients

        // Pass the array of images and clients to the view
        return view('welcome', compact('images', 'clients'));
    }
}
