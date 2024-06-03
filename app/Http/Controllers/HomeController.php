<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product as ModelsProduct;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
       $data['productList']=Product::paginate(10);
       $productList = Product::orderBy('price', 'desc')->orderBy('name', 'desc')->get();
        $productNew = Product::latest()->get(); // lấy sản phẩm  mới nhất
         $productNew = Product::orderBy('price', 'asc')->orderBy('name', 'asc')->get(); 
         $bestSellingProducts = Product::orderBy('views', 'desc') ->limit(8)->get();
         $bestSellingProducts = Product::
         orderBy('price', 'desc')
         ->orderBy('name', 'desc')
         ->limit(8)
         ->get();
         return view('home.index', ['productNew'=>$productNew,'bestSellingProducts'=>$bestSellingProducts,'productList'=>$productList],$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        $products = ModelsProduct::all();
        $productShow = ModelsProduct::findOrFail($id);
        return view('home.show', compact('productShow', 'products'));
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
    public function search(Request $request)
    {
        try {
            // return $request;
            $query = $request->input('search');// dong nay lay gia tri co ten la search tu doituong $req
            $productSearch = Product::where('name', 'LIKE', "%$query%")->get();
            // $productSearch = ModelsProduct::where('name', 'LIKE', '%$query%')->get(); ko loi nhung ko show dc
            return view('home.search', compact('productSearch'));
        } catch (\Throwable $th) {
            return $th;
        }
    }
}