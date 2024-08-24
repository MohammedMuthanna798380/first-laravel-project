<?php

namespace App\Http\Controllers;

class StaticController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function portfolio()
    {
        return "<h1>PORTFOLIO PAGE</h1>";
    }
    //////////////////////////////////////////////////////
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function content()
    {
        return view('content');
    }
}
