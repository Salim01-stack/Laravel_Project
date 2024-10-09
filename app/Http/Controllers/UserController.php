<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import the User model
use Illuminate\Support\Facades\Hash; // Import Hash for password encryption

class UserController extends Controller
{
    // Define the index method
    public function index(Request $request)
{
    // Get the username and password from the request
    $uName = $request->input('uname', '');
    $pass = $request->input('pass', '');

    // Retrieve the user by username
    $userInfo = User::where('name', '=', $uName)->first();

    // Check if the user exists and verify the password
    if ($userInfo && Hash::check($pass, $userInfo->password)) {
        // Successful login
        return redirect('/products');
    } else {
        // Invalid credentials: Clear input fields and return to the login page with errors
        return redirect()->back()
            ->withInput(['uname' => '', 'pass' => '']) // Clear both fields
            ->withErrors(['login_error' => 'Invalid username or password.']);
    }
}

    


    public function store(Request $request)
    {
       // return $request->all();
        $user = User::create([
            'name' => $request->input('uname'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'password' => Hash::make($request->input('pass')), // Hashing the password
        ]);
  
        return redirect('/products');
    }
    
}
