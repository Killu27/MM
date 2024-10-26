<?php

namespace App\Http\Controllers;

   use App\Models\Product;
   use Illuminate\Http\Request;
   use App\Models\Order;
   use IlluminateHttpRequest;
   use Illuminate\Support\Facades\Validator;
   



   class ProductController extends Controller
   {
<<<<<<< HEAD
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function order(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $product = Product::findOrFail($id);
        $quantity = $request->input('quantity');
        $totalPrice = $product->price * $quantity;

        Order::create([
            'product_id' => $product->id,
            'quantity' => $quantity,
            'total_price' => $totalPrice,
        ]);

        return redirect()->route('products.show', $id)->with('success', 'Заказ успешно оформлен!');
    }
    public function index()
    {
        $products = Product::all(); // Получение всех продуктов
        return view('products.index', compact('products')); // Возврат представления с продуктами
    }
=======
       public function index()
       {
           $products = Product::all();  //получает данные из бд
           return view('products.index', compact('products')); //передает полученные данные в представление products
       }
>>>>>>> 1173d9dcbf958755acda6c919a9cd5b3a5ce95ea
   }
