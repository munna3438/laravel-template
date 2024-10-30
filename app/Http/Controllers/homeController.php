<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function category()
    {
        return view('admin.Catagory');
    }
}
