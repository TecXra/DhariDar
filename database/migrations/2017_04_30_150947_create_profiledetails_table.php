<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfiledetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiledetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('serviceprovider_id')->unsigned();
            $table->string('avatar');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');

            $table->foreign('serviceprovider_id')
                ->references('id')->on('serviceproviders')
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
        Schema::drop('profiledetails');
    }
}
