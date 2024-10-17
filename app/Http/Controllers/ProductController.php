<?php

namespace App\Http\Controllers;

   use App\Models\Product;
   use Illuminate\Http\Request;

   class ProductController extends Controller
   {
       public function index()
       {
           $products = Product::all();  //получает данные из бд
           return view('products.index', compact('products')); //передает полученные данные в представление products
       }
   }
