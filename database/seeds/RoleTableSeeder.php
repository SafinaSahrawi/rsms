<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create roles
        $role_employee = new Role();
        $role_employee -> name = 'staff';
        $role_employee -> description = 'Staff User';
        $role_employee -> save();

        $role_employee = new Role();
        $role_employee -> name = 'customer';
        $role_employee -> description = 'customer User';
        $role_employee -> save();

        $role_employee = new Role();
        $role_employee -> name = 'rider';
        $role_employee -> description = 'rider User';
        $role_employee -> save();
    }
}
