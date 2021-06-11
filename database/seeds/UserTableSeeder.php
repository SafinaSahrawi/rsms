<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //role type
        $role_staff = Role::where('name' , 'staff')->first();
        $role_customer = Role::where('name' , 'customer')->first();
        $role_rider = Role::where('name' , 'rider')->first();

        //Add Staff User
        $staff = new User();
        $staff -> name = 'Staff Malissa';
        $staff -> email = 'staff@gmail.com';
        $staff -> password = bcrypt('staff123');
        $staff -> save();
        $staff -> roles()->attach($role_staff);

        //Add Customer User
        $customer = new User();
        $customer -> name = 'Customer Malissa';
        $customer -> email = 'customer@gmail.com';
        $customer -> password = bcrypt('customer123');
        $customer -> save();
        $customer -> roles()->attach($role_customer);

        //Add Rider User
        $rider = new User();
        $rider -> name = 'Rider Malissa';
        $rider -> email = 'rider@gmail.com';
        $rider -> password = bcrypt('rider123');
        $rider -> save();
        $rider -> roles()->attach($role_rider);

        //Add Rider User
        $rider = new User();
        $rider -> name = 'Ali';
        $rider -> email = 'ali@gmail.com';
        $rider -> password = bcrypt('aliali123');
        $rider -> save();
        $rider -> roles()->attach($role_rider);

        //Add Rider User
        $rider = new User();
        $rider -> name = 'Abu';
        $rider -> email = 'abu@gmail.com';
        $rider -> password = bcrypt('abuabu123');
        $rider -> save();
        $rider -> roles()->attach($role_rider);

        //Add Customer User
        $customer = new User();
        $customer -> name = 'Masshera';
        $customer -> email = 'masshera@gmail.com';
        $customer -> password = bcrypt('masshera123');
        $customer -> save();
        $customer -> roles()->attach($role_customer);

        //Add Customer User
        $customer = new User();
        $customer -> name = 'Jasmine';
        $customer -> email = 'jasmine@gmail.com';
        $customer -> password = bcrypt('jasmine123');
        $customer -> save();
        $customer -> roles()->attach($role_customer);

        //Add Staff User
        $staff = new User();
        $staff -> name = 'Miss Siti';
        $staff -> email = 'siti@gmail.com';
        $staff -> password = bcrypt('siti123');
        $staff -> save();
        $staff -> roles()->attach($role_staff);
    }
}
