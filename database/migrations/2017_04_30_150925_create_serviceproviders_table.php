<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceprovidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviceproviders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone_number');
	    $table->integer('category_id')->unsigned();
            $table->string('password');
            $table->string('lang');
            $table->string('lat');  
	    $table->foreign('category_id')
                ->references('id')->on('categories')
                ->ondelete('cascade');          
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
        Schema::drop('serviceproviders');
    }
}
