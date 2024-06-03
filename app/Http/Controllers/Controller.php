<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Auth;

abstract class Controller

{
    public function __construct(){
    $categories = Category::all();
    $user =Auth::user();
        view()->share('categories',$categories);
    view()->share('user', $user);

    }
}
