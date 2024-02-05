<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  // Show the login form
  public function showLoginForm()
  {
    return view('user_login');
  }

  // Handle the login request
  public function login(Request $request)
  {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
      // Authentication passed...
      return redirect()->intended('user_page');
    }

    return back()->withErrors(['email' => 'Invalid credentials']);
  }
}
