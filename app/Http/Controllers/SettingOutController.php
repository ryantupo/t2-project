<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File; // Import the File facade

class SettingOutController extends Controller
{
    public function index() {
        // Get all image files from the specified directory
        $images = File::files(public_path('images/setting_out'));

        // Extract the file names
        $imageNames = array_map(function($file) {
            return $file->getFilename();
        }, $images);

        // Return the view with the image names
        return view('setting-out-engineer', compact('imageNames'));
    }
}
