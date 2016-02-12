<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user() ? $request->user()->toArray() : ['id' => null];
        return view('home/home', ['user' => $user]);
    }
}