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
    }
}
