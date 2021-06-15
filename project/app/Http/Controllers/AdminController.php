<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index(){
        return view('admin.index');
    }
    public function admin_reports(){
        return view('admin.guests.random');
    }
}
