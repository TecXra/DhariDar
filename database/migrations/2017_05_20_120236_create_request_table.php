<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('site_user_id')->unsigned();
            $table->integer('service_provider_id')->unsigned();
            $table->foreign('service_provider_id')
                ->references('id')->on('serviceproviders')
                ->ondelete('cascade');  
            $table->foreign('site_user_id')
                ->references('id')->on('siteusers')
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
        Schema::dropIfExists('requests');
    }
}
