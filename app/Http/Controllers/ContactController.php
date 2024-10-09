<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact'); // return the contact view
    }

    public function submit(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        // Handle the submission logic (e.g., send email, store in database)

        // Redirect or respond with a success message
        return redirect()->route('contact.show')->with('success', 'Your message has been sent successfully!');
    }
}
