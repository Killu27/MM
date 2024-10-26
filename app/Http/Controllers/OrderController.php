<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;

class OrderController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'product_id' => 'required|exists:products,id',
        'quantity' => 'required|integer|min:1',
    ]);

    $product = Product::findOrFail($request->product_id);
    $totalPrice = $product->price * $request->quantity;

    Order::create([
        'product_id' => $product->id,
        'quantity' => $request->quantity,
        'total_price' => $totalPrice,
    ]);

    return redirect()->route('product.show', $product->id)->with('success', 'Заказ успешно оформлен!');
}
}
