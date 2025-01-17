<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerControrller extends Controller
{
    public function index()
    {
        return view('computer.index', [
            'computers' => Computer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => ['required', 'integer'],
            'description' => 'required'
        ]);
        $computer = new Computer();
        $computer->name = strip_tags($request->input('name'));
        $computer->price = strip_tags($request->input('price'));
        $computer->description = strip_tags($request->input('description'));

        $computer->save();

        return redirect()->route('computer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('computer.show', [
            'computer' => Computer::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('computer.edit', [
            'computer' => Computer::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => ['required', 'integer'],
            'description' => 'required'
        ]);

        $computer = Computer::findOrFail($id);
        $computer->name = strip_tags($request->input('name'));
        $computer->price = strip_tags($request->input('price'));
        $computer->description = strip_tags($request->input('description'));

        $computer->save();

        return redirect()->route('computer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $computer = Computer::findOrFail($id);
        $computer->delete();

        return redirect()->route('computer.index');
    }
}
