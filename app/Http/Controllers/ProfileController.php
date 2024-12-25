<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Show the user's profile.
     */
    public function index($userId)
    {
        $user = User::findOrFail($userId); // Fetch user by ID without requiring authentication
        return view('profile', compact('user'));
    }

    /**
     * Update the user's academic credentials and email address.
     */
    public function update(Request $request, $userId)
    {
        $request->validate([
            'academic_credentials' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $user = User::findOrFail($userId); // Fetch user by ID
        $user->academic_credentials = $request->input('academic_credentials');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
