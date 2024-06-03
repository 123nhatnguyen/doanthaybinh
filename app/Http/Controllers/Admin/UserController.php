<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usersList= User::all();
        return view('admin.users.index',['userList'=>$usersList]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user=User::create($request->only([
            'name','email','password'
        ]));
        $message="Succes full created";
        if($user ==null){
            $message="Success full failed";
        }
        return redirect()->route('admin.users.index')->with('message',$message);
    
        
        
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user =User::findOrFail($id);
         return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=User::findOrFail($id);
        $bool=$user->update($request->only([
            'name','email','password'
        ]));
        $message="Succes Updated";
        if(!$bool){
            $message="Update full failed";
        }
    
    // return $request; 
    return redirect()->route('admin.users.index')->with('message',$message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message="Succes full deletw";
        if(!User::destroy($id)){
            $message="Delete failed";
        }
        return redirect()->route('admin.users.index')->with('message',$message);
    }
}
