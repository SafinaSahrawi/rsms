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

        DB::table('users')->insert([
            'name' => 'Safina', 
            'email' => 'safina@gmail.com', 
            'password' => 'abcd1234'
        ]);

            DB::table('services')->insert([
            // 'name' => 'Safina',
            'deviceType' => 'laptop',
            'brand' => 'acer',
            'serialNo'  => 'abc12345',
            'faulty'  => 'screen problem',
            ]);

        $type_quotation = Type::where('name', 'quotation')->first();
        $type_repair = Type::where('name', 'repair')->first();
        
        $this->call(TypeTableSeeder:: class);
    }
}
