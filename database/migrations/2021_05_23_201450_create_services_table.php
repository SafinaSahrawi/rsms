<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index()->nullable();;
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name')->references('name')->on('users');
            $table->integer('type_id')->unsigned()->index()->nullable();;
            // $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->string('deviceType');
            $table->string('brand');
            $table->string('serialNo');
            $table->string('faulty');
            $table->double('cost');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('services');

        Schema::table('services', function(Blueprint $table){

        $table->dropForeign('services_user_id_foreign');

        $table->dropForeign('services_type_id_foreign');
        });
        
    }
}