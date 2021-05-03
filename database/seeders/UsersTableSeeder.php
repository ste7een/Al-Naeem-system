<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Administrator   // id:1 //
        $user = new User();

        $user->name = 'Administrator';
        $user->email = 'admin@alnaeem.com';
        $user->password = Hash::make('123456');
        $user->save();
        
        $user->attachRole('administrator');


    }// end of run


}// end of seeder
