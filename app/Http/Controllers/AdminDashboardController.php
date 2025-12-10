<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cake;
use App\Models\Category;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $cakeCount = Cake::count();
        $categoryCount = Category::count();

        return view('admin.dashboard', compact('cakeCount', 'categoryCount'));
    }
}