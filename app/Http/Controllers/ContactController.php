<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        // Send the email
        Mail::send('emails.contact', [
            'name' => $request->name,
            'email' => $request->email,
            'messageContent' => $request->message,
        ], function ($message) use ($request) {
            $message->to('your-email@example.com')  // Replace with your email address
                    ->subject('New Contact Us Message')
                    ->from($request->email, $request->name);
        });

        // Redirect back with success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
