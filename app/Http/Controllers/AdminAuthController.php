<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    //
    public function showLoginForm() { return view('admin.auth.login'); } public function login(Request $request) { $credentials = $request->only('email', 'password'); if (Auth::guard('admin')->attempt($credentials)) { return redirect()->route('admin.dashboard'); } return redirect()->route('admin.login')->with('error', 'Invalid credentials'); } public function showRegisterForm() { return view('admin.auth.register'); } public function register(Request $request) { $request->validate([ 'name' => 'required|string|max:255', 'email' => 'required|string|email|max:255|unique:admins', 'password' => 'required|string|min:8|confirmed', ]); $admin = new Admin(); $admin->name = $request->name; $admin->email = $request->email; $admin->password = bcrypt($request->password); $admin->save(); Auth::guard('admin')->login($admin); return redirect()->route('admin.dashboard'); } public function logout() { Auth::guard('admin')->logout(); return redirect()->route('admin.login'); }
}
