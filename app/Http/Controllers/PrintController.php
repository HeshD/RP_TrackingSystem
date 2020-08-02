<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\letter;

class PrintController extends Controller
{
    public function print(){
        $print=letter::all();
        return view('printrecipt');
    }
}
