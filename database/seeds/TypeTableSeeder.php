<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        // $type_quotation = Type::where('name', 'quotation')->first();
        // $type_repair = Type::where('name', 'repair')->first();
        
        //add quotation description
        $type_quotation = new Type();
        $type_quotation ->name = 'Quotation';
        $type_quotation ->description = 'Quotation Services';
        $type_quotation ->save();

        //add repair description
        $type_repair = new Type();
        $type_repair ->name = 'Repair';
        $type_repair ->description = 'Repair Services';
        $type_repair ->save();
    }
}
