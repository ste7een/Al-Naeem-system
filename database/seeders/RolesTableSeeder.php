<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Administrator role  // id:1 //
        $role = new Role();

        $role->name = 'administrator';
        $role->display_name = 'Administrator';
        $role->description  = 'Can do anything in the system';
        $role->save();

        // Accountant role  // id:2 //
        $role = new Role();

        $role->name = 'accountant';
        $role->display_name = 'Accountant';
        $role->description  = 'Can do anything inside financial';
        $role->save();

         // Archive role  // id:3 //
         $role = new Role();

         $role->name = 'archive';
         $role->display_name = 'Archive';
         $role->description  = 'Can do anything inside archive';
         $role->save();

        // HR role  // id:3 //
          $role = new Role();

          $role->name = 'hr';
          $role->display_name = 'HR';
          $role->description  = 'Can do anything inside Human resources';
          $role->save();
    }
}
