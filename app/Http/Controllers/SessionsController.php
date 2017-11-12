<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
      return view('auth.login');
    }

    public function store()
    {

      if (! auth()->attempt(request(['email', 'password']))){

        return back()->withErrors([
          'message' => 'Please check your credentials and try again.'
        ]);
      }

      // If it succeeds, it goes to homepage
      return redirect('/');
    }

    public function destroy()
    {
      auth()->logout();

      return redirect('/');
    }
}
