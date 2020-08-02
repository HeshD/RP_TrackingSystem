<?php

namespace App\Http\Controllers;

use App\letter;
use Illuminate\Http\Request;

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
        $letter = new letter;
        $letter->sname=$request->sname;
        $letter->saddress=$request->saddress;        
        $letter->rname=$request->rname;
        $letter->raddress=$request->raddress;
        $letter->weight=$request->weight;
        


        $letter->save();

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
