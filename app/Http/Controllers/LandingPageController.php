<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Product;
use App\Models\Team;
use App\Models\Testimonial;

class LandingPageController extends Controller
{
    public function index()
    {
        $clients = Client::latest()->take(8)->get(); 
        $categories = ['IoT Solution', 'Manufacturing Software', 'Asset Management', 'Enterprise'];
        $products = collect();
        foreach ($categories as $category) {
            $items = Product::where('type', 'products')
            ->whereHas('category', function ($query) use ($category) {
                $query->where('category', $category);
            })
            ->take(3)
            ->get();

        $products = $products->merge($items);
    }
        $projects = Product::where('type', 'projects')->take(6)->get();
        $testimonials = Testimonial::latest()->take(6)->get(); 
        $teams = Team::latest()->get();

        return view('layouts.app', compact('clients', 'products', 'teams', 'projects', 'testimonials')); 
    }
}