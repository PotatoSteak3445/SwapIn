<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function store(Request $request)
    {
        Product::create([
            "user_id" => auth()->id(),
            "shop_id" => auth()->user()->shop->id,
            "name" => $request->name,
            "description" => $request->description,
            "price" => $request->price,
            "old_price" => $request->price * 1.2, // Fake a 20% discount for the UI
            "stock" => $request->stock,
            "category" => $request->category,
            "image" => "placeholder.jpg", // We'll do actual image uploads later
        ]);

        return redirect()->route("toko.dashboard");
    }
}
