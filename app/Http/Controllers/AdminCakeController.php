<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cake;
use App\Models\Category; 
use Illuminate\Support\Facades\Storage;

class AdminCakeController extends Controller
{
    public function index()
    {
        $cakes = Cake::all();
        return view('admin.cakes.index', compact('cakes'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.cakes.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('cakes', 'public');
            $input['image'] = '/storage/' . $imagePath;
        }

        Cake::create($input);

        return redirect()->route('admin.cakes.index')->with('success', 'Cake created successfully.');
    }

    public function edit(Cake $cake)
    {
        $categories = Category::all();
        return view('admin.cakes.edit', compact('cake', 'categories'));
    }

    public function update(Request $request, Cake $cake)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('cakes', 'public');
            $input['image'] = '/storage/' . $imagePath;
        } else {
            unset($input['image']);
        }

        $cake->update($input);

        return redirect()->route('admin.cakes.index')->with('success', 'Cake updated successfully');
    }

    public function destroy(Cake $cake)
    {
        $cake->delete();
        return redirect()->route('admin.cakes.index')->with('success', 'Cake deleted successfully');
    }
}