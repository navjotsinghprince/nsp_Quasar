<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index()
    // {
    //     return view('home');
    // }
    // public function admin()
    // {
    //     return view('admin');
    // }
    public function home()
    {
        return view('frontend');
    }
}