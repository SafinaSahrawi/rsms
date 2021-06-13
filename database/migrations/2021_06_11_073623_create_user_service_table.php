<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Service;

class CreateUserServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_service', function (Blueprint $table) {
            
            //Pivot table that connect to both user and service

            $table->foreignId('users_id')->unsigned();
            $table->foreignId('services_id')->unsigned();
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
        Schema::table('user_service', function (Blueprint $table) {
            //
        });
    }
}
