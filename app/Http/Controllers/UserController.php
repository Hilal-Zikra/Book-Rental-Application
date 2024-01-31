<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'image' => 'required|image|max:2048' 
        ]);

        // Handle the user image
        $imagePath = '';
        if ($request->hasFile('image')) 
        {
            $imagePath = $request->file('image')->store('profile_images', 'public');
        }

        // Create a new user instance and save it to the database
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->image_directory = $imagePath;
        $user->save();

        // Redirect to a specific route, e.g., the login page
        return redirect()->route('login')->with('success', 'Account created successfully.');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        // Attempt to authenticate the user
        if (auth()->attempt($credentials)) 
        {
            $request->session()->regenerate();
            return redirect()->route('book');
        } else 
        {
            return redirect()->back()->with('message', 'Invalid credentials.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Logout the user

        $request->session()->invalidate();
        $request->session()->regenerateToken(); 

        return redirect('/login'); 
    }

    public function profile()
    {
        $user = auth()->user();
        $books = \App\Models\Book::where('rented_by', $user->id)->get();
        
        return view('user.profile', compact('user', 'books'));
    }
}
