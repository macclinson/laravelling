<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
      return view('auth.register');
    }

    public function store()
    {
      // Validate the form
      $this->validate(request(), [
        'name' => 'required',
        'email' =>'required|email',
        'password' => 'required|confirmed'
      ]);

      // Create and save the user
      $user = User::create(request(['name', 'email', 'password']));

      // Sign the user in
      auth()->login($user);

      // Redirect to the homepage
      return redirect()->home();
    }

}
