<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
      return view('auth.login');
    }

    public function store()
    {
      if (!auth()->attempt(request(['email', 'password']))){

        dd(auth()->attempt(request(['email', 'password'])));

        return back();
      }

      return redirect('/');
    }

    public function destroy()
    {
      auth()->logout();

      return redirect('/');
    }
}
