<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        factory(Service::class, 5)->create();

        foreach(Service::all() as $service) {
            $users = \App\User::inRandomOrder()->take(rand(1,3))->pluck('id');
            $service->users()->attach($users);
        }
    }
}
