<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

class PostmasterController extends Controller
{
    public function store(Request $request){
        $postmaster=new user;

        $postmaster->name=$request->name;
        $postmaster->phone=$request->phone;
        $postmaster->branch=$request->branch;
        $postmaster->address=$request->address;
        $postmaster->usertype='Post Master';
        $postmaster->email=$request->email;
        $postmaster->password=Hash::make($request->password);

        $postmaster->save();

        return redirect('addpm')->with('status','Post Master Successfully added.');




    }
}
