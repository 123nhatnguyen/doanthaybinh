<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
       return view('home.login');
    }
    public function register()
    {
       return view('home.register');
    }
    // register
     public function postRegister(request $req){
     //  dd(Hash::make($req->password)); truoc khi lam thi test thu day la ma hoa pass
   //   $req->password="DMC";
      $req->merge(['password'=>Hash::make($req->password)]); //  hash để ma hoa pas
      try{
         User::create($req->all());
      }catch(\Throwable $th){
         dd($th);
      }
        return redirect()->route('login');
    }
// login
    public function postLogin(request $req){
      //  dd(Hash::make($req->password)); truoc khi lam thi test thu day la ma hoa pass
    //   $req->password="DMC";
     // $req->merge(['password'=>Hash::make($req->password)]); // ma hoa pas
       if(Auth::attempt(['email'=>$req->email,'password'=>$req->password])){ //Hàm Auth::attempt() được sử dụng để xác thực thông tin đăng nhập của người dùng.
        // nếu email pas đn hợp lệ thì trả về true
         return redirect()->route('index');
             } 
       return redirect()->back()->with('error','sai');
   }
// logout
   public function logout(){

    Auth::logout();//Auth::logout(): Hàm này được sử dụng để đăng xuất người dùng hiện tại.
    return redirect()->back();
   }
}