<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Tag;

class ShopController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $products = Product::where('name', 'like', '%' . $searchTerm . '%')->get();

        return view('search-results', compact('products', 'searchTerm'));
    }

    public function index()
    {
        $products = Product::paginate(5);
        return view('shop')->with('products', $products);
    }

    public function show($id)
    {
        // Găsește produsul în baza de date folosind ID-ul
        $product = Product::findOrFail($id);

        // Returnează vizualizarea produsului și trimite variabila cu produsul
        return view('product-detail', compact('product'));
    }

    // public function productsByTag($tagId)
    // {
    //     $tag = Tag::findOrFail($tagId);

    //     $products = $tag->products;

    //     return view('products_by_tag', compact('tag', 'products'));
    // }

    // public function showTags()
    // {
    //     $tags = Tag::all();
    //     return view('select_tags')->with('tags', $tags);
    // }

    // public function filterProducts(Request $request)
    // {
    //     $selectedTags = $request->input('selected_tags');

    //     if (empty($selectedTags)) {
    //         return redirect()->back()->with('error', 'Selectați cel puțin o etichetă.');
    //     }

    //     $products = Product::whereHas('tags', function ($query) use ($selectedTags) {
    //         $query->whereIn('id', $selectedTags);
    //     })->get();

    //     return view('filtered_products', compact('products'));
    // }
}
