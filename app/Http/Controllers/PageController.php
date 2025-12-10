<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cake;
use App\Models\Category; 

class PageController extends Controller
{
    public function home()
    {
        $cakes = Cake::inRandomOrder()->limit(6)->get();
        return view('pages.home', compact('cakes'));
    }

public function search(Request $request)
{
    $query = $request->input('query');

    if (!$query) {
        return response()->json([]);
    }

    $cakes = Cake::where('name', 'LIKE', "%{$query}%")
                 ->orWhere('category', 'LIKE', "%{$query}%")
                 ->limit(5) 
                 ->get(['id', 'name', 'image', 'category', 'price']);

    return response()->json($cakes);
}

    public function variety(Request $request)
    {
        $categories = Category::all(); 

        $category = $request->query('category');
        
        if ($category && $category !== 'all') {
            $cakes = Cake::where('category', $category)->get();
        } else {
            $cakes = Cake::all();
        }
        
        return view('pages.variety', compact('cakes', 'categories'));
    }

    public function product(Request $request)
    {
        $id = $request->query('id');
        $cake = Cake::findOrFail($id);
        $relatedCakes = Cake::where('category', $cake->category)->where('id', '!=', $id)->take(3)->get();
        return view('pages.product', compact('cake', 'relatedCakes'));
    }

    public function contact() { return view('pages.contact'); }
    public function checkout() { return view('pages.checkout'); }
    public function cart() { return view('pages.cart'); }
}