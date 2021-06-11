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
            $table->string('deviceType');
            $table->string('brand');
            $table->string('serialNo');
            $table->string('faulty');
            $table->double('cost')->nullable();
            $table->string('comment')->nullable();
            $table->string('status')->nullable();
            $table->boolean('agreement')->nullable();
            $table->timestamps();
        });

        //created pivot table user_service
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
        
    }
}