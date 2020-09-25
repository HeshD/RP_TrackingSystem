<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class letter extends Model
{
    protected $fillable=['sname','saddress','rname','raddress','weight','Payment','barcode'];
}
