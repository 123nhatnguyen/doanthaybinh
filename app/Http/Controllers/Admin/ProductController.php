<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producstList= Product::all();
        return view('admin.products.index',['productsList'=>$producstList]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only([ 'views', 'name', 'desc', 'price', 'img','quantity', 'category_id']);
    
        // Handle file upload if 'img' is a file field
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            // Do something with the file, like storing it in a specific location and getting its path
            $filePath = $file->store('images');
            $data['img'] = $filePath;
        }
        // dd($data);
    
        $product = Product::create($data);
        $message = "Successfully created";
        if ($product == null) {
            $message = "Creation failed";
        }
        return redirect()->route('admin.products.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
          $product=Product::findOrFail($id);
          return view('admin/products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product=Product::findOrFail($id);
        $bool=$product->update($request->only([
             'name', 'desc', 'price', 'img'
        ]));
        $message="Succes Updated";
        if(!$bool){
            $message="Update full failed";
        }
    
    // return $request; 
    return redirect()->route('admin.products.index')->with('message',$message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message="Succes full deletw";
        if(!Product::destroy($id)){
            $message="Delete failed";
        }
        return redirect()->route('admin.products.index')->with('message',$message);
    }
}
