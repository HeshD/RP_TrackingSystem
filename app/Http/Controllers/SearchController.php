<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function searchuser(Request $request){

        $search=$request->get('search');
        $user=user::where('email','like','%'.$search.'%')->paginate(5);

        return view('users.postmaster.userdetails')->with('users',$user);

       // return view('users.postmaster.deletepm',['users'=>$user]);
    }

    public function userdetails(){

        $user=user::all();

        return view('users.postmaster.alluserdetails')->with('users',$user);

    }
}
