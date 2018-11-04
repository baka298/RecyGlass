<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class FrontController extends Controller
{
    public function index()
    {
        $partners = Role::partners();
        return view('welcome', compact('partners'));
    }
}
