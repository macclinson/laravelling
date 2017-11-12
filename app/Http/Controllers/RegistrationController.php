<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Mail\Welcome;

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
      $data = request(['name', 'email', 'password']);
      $data['password'] = \Hash::make($data['password']);
      $user = User::create($data);

      // Sign the user in
      auth()->login($user);

      // Send them a welcome email
      \Mail::to($user)->send(new Welcome($user));

      session()->flash('message', 'Thank you for signing up');

      // Redirect to the homepage
      return redirect()->home();
    }

}
