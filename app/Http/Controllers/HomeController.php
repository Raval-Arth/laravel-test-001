<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::get();

        return view('home', ['users' => $users]);
    }
    public function dashboard()
    {
        $users = User::get();

        return view('dashboard', ['users' => $users]);
    }
    public function admin_index()
    {
        $users = User::get();

        return view('Admin', ['users' => $users]);
    }
}
