<?php

use Illuminate\Database\Seeder;
use App\Service;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);


        factory(User::class, 5)->create();

        $this->call([
            ServiceSeeder::class]);


        // DB::table('users')->insert([
        //     'name' => 'Safina', 
        //     'email' => 'safina@gmail.com', 
        //     'password' => 'abcd1234'
        // ]);

        //     DB::table('services')->insert([
        //     // 'name' => 'Safina',
        //     'deviceType' => 'laptop',
        //     'brand' => 'acer',
        //     'serialNo'  => 'abc12345',
        //     'faulty'  => 'screen problem',
        //     ]);


            // DB::table('services')->insert([
            // 'name' => 'Safina',
            // 'deviceType' => 'laptop',
            // 'brand' => 'acer',
            // 'serialNo'  => 'abc12345',
            // 'faulty'  => 'screen problem',
            // 'cost' => '135'
            // ]);

        // $type_quotation = Type::where('name', 'quotation')->first();
        // $type_repair = Type::where('name', 'repair')->first();
        
        // $this->call(TypeTableSeeder:: class);


        // $this->call(UserSeeder::class);
        //Roles comes before User Seeder here
        $this->call(RoleTableSeeder::class);

        //User seeder will use the roles above created
        $this->call(UserTableSeeder::class);

    }
}
