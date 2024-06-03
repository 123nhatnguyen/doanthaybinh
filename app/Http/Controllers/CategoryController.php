<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * Display the specified resource.
     */

    public function show(String $id, Request $request)
    {
        $category = Category::find($id);

        $query = Product::where('category_id', $id);

        // Initialize filter variables with default values
      

        // Filter by price
       
        // Filter by name
      

        $products = $query->paginate(10);

        return view('categories.show', compact('products'));
    }
}