<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        $cart = session()->get('cart', []);
        $cart[$productId] = $quantity;
        session()->put('cart', $cart);

        return response()->json(['message' => 'Produsul a fost adăugat în coșul de cumpărături.']);
    }

    public function viewCart()
    {
        // Obține produsele din coșul de cumpărături din sesiune
        $cart = session()->get('cart', []);

        // Obține informațiile despre produsele din coș din baza de date
        $products = Product::whereIn('id', array_keys($cart))->get();

        // Returnează vizualizarea coșului și trimite variabilele necesare
        return view('cart', compact('products', 'cart'));
    }
}
