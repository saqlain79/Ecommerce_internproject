<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show_homepage()
    {
        return view ('welcome');
    }
    public function contact_us()
    {
        return view ('pages.contact');
    }
    public function admin_dashboard()
    {
        return view ('admin.dashboard');
    }
}
