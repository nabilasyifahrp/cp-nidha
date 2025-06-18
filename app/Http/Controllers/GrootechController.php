<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrootechController extends Controller
{
    // Display the main index page
    public function index()
    {
        return view('cp-grootech.index');
    }

    // Display the about page
    public function about()
    {
        return view('cp-grootech.about'); // Ensure you have a view at this path
    }

    // Display the contact page
    public function contact()
    {
        return view('cp-grootech.contact'); // Assuming you will create a contact.blade.php file
    }

    // Display the careers page
    public function careers()
    {
        return view('cp-grootech.careers'); // Ensure this view exists at the specified path
    }

    // Handle contact form submission
    public function submitContact(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Process the data, e.g., save to database or send an email
        // You can add your logic here

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
