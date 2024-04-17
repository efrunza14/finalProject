<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
}
