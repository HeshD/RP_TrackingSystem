<?php

namespace App\Http\Controllers;

use App\letter;
use App\branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;


class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $branch=branch::where('id',$request->branch_name)->first();
        $ltr=letter::where('orgin_ofc',$request->branch_name)->get();
        $nubRow=count($ltr);

        if(date('l',strtotime(date('Y-01-01')))){
            $barcode=$branch->branch_code. str_pad($nubRow, 5,'0', STR_PAD_LEFT) .date('Y');
        }
        else{
            $barcode=$nubRow[0].$nubRow[1]+1;
        }
        $barcode=$branch->branch_code. str_pad($nubRow, 5,'0', STR_PAD_LEFT) .date('Y');
        
     
        $letter = new letter;
        $letter->sname=$request->sname;
        $letter->saddress=$request->saddress;        
        $letter->rname=$request->rname;
        $letter->raddress=$request->raddress;
        $letter->Payment=$request->postage;

        $letter->barcode=$barcode;

        $letter->orgin_ofc=$request->branch_name;

        $letter->weight=$request->weight;
        
        $letter->email=$request->email;


        $letter->save();

        Mail::to($letter->email)->send(new Email($barcode));

        return view('printrecipt')->with('letter',$letter);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function show(letter $letter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function edit(letter $letter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, letter $letter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function destroy(letter $letter)
    {
        //
    }
}
