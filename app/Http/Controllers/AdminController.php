<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index () {
        return view('dashboard.admin.dashboard');
    }
    public function form () {
        return view('dashboard.admin.form');
    }

}
