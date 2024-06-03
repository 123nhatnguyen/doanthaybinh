<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('products.index');
        $prodoctList=Product::all();
        return view('products.index',compact('prodoctList'));
    } // răng kick ra trang home k đc là rằng ghi sai chinh ta ve rang cho ra

    /**ứ làm theo 
     * Show the form for creating a new resource.
     */     public function create($id)
    {
        $user=User::findOrFail($id);
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product=Product::findOrFail($id);
     return view('products.show',['product'=>$product]);
        // return view('products.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
