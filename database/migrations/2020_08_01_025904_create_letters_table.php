<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sname');
            $table->string('saddress');
            $table->string('rname');
            $table->string('raddress');
            $table->string('weight');
            $table->string('Payment')->nullable();
            $table->string('barcode')->nullable();
            $table->string('orgin_ofc')->nullable();
            $table->string('destination_ofc')->nullable();



           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('letters');
    }
}
