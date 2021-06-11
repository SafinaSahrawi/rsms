<?php

use Illuminate\Database\Seeder;
use App\Type;

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

            DB::table('services')->insert([
            'name' => 'Safina',
            'deviceType' => 'laptop',
            'brand' => 'acer',
            'serialNo'  => 'abc12345',
            'faulty'  => 'screen problem',
            'cost' => '135'
            ]);

        $type_quotation = Type::where('name', 'quotation')->first();
        $type_repair = Type::where('name', 'repair')->first();
        
        $this->call(TypeTableSeeder:: class);


        // $this->call(UserSeeder::class);
        //Roles comes before User Seeder here
        $this->call(RoleTableSeeder::class);

        //User seeder will use the roles above created
        $this->call(UserTableSeeder::class);
    }
}
