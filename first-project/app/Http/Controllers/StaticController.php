<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /*public function index()
    {
        return "<h1>HOME PAGE</h1>";
    }

    public function about()
    {
        return "<h1>ABOUT PAGE</h1>";
    }

    public function content()
    {
        return "<h1>CONTENT PAGE</h1>";
    }
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

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
