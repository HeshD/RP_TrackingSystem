<?php

namespace App\Http\Controllers;
use App\branch;


use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function store(Request $request){
        $branch = new branch;
        $branch->name=$request->name;
        $branch->address=$request->address;        
        $branch->province=$request->province;
        $branch->district=$request->district;
        $branch->branch_type=$request->branch_type;
        $branch->branch_code=$request->branch_code;


        $branch->save();

        return redirect('add_branch')->with('status','Branch added successfully');
    }

    public function view(){

        $branch=branch::all();

        return view('Branch.branchdetails')->with('branch',$branch);

    }

    public function delete($id){
        $branch=branch::find($id);

        $branch->delete();

        return redirect()->back();
    }

}
