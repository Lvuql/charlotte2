<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // POS Kasir interface
        $categories = Category::with('products')->get();
        return view('pos.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::with('products')->get();
        return view('pos.index', compact('categories'));
    }

    public function store(Request $request)
    {
        // Simple placeholder for checkout logic
        // We will move this to a Service class later
        
        $request->validate([
            'customer_name' => 'nullable|string',
            'cart' => 'required|array',
            'cart.*.id' => 'required|exists:products,id',
            'cart.*.quantity' => 'required|integer|min:1',
            'payment_method' => 'required|string',
        ]);

        return response()->json(['message' => 'Order created successfully!']);
    }
}
