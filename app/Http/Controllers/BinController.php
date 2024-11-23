<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bin;
use Illuminate\Support\Facades\Auth;

class BinController extends Controller
{
    public function index()
    {
        $bins = Bin::where('user_id', Auth::id())->get();
        return view('bins.index', compact('bins'));
    }
    public function create()
    {
        return view('bins.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'location_name' => 'required|string|max:255', 
            'latitude' => 'required|numeric',
             'longitude' => 'required|numeric',
            ]);
        Bin::create([
            'user_id' => Auth::id(), 
            'location_name' => $request->location_name, 
            'latitude' => $request->latitude, 
            'longitude' => $request->longitude,]);
        // return redirect()->route('bins.index')->with('success', 'Bin registered successfully!');
        return redirect()->route('dashboard')->with('success', 'Bin registered successfully!');
    }
    public function edit(Bin $bin)
    {
        return view('bins.edit', compact('bin'));
    }
    public function update(Request $request, Bin $bin)
    {
        $request->validate([
            'location_name' => 'required|string|max:255', 
            'latitude' => 'required|numeric', 
            'longitude' => 'required|numeric',
        ]);
        $bin->update($request->all());
        return redirect()->route('bins.index')->with('success', 'Bin updated successfully!');
    }
    public function destroy(Bin $bin)
    {
        $bin->delete();
        return redirect()->route('bins.index')->with('success', 'Bin deleted successfully!');
    }
}
