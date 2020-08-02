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

    public function delete($id){
        $postmaster=User::find($id);

        $postmaster->delete();

        return redirect()->back();
    }

    public function updateview($id){
        $postmaster=User::find($id);

        return view('users.postmaster.updatepm')->with('pmdata',$postmaster);
    }

    public function update(Request $request, $id){
        
        $name=$request->name;
        $phone=$request->phone;
        $branch=$request->branch;
        $address=$request->address;
        $email=$request->email;

        $postmaster=User::find($id);
        $postmaster->name=$name;
        $postmaster->phone=$phone;
        $postmaster->branch=$branch;
        $postmaster->address=$address;
        $postmaster->email=$email;
        $postmaster->save();

        return redirect('deletepm')->with('status','Post Master Successfully updated.');


    }
}
