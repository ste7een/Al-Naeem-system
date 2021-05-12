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
        
        $user->attachRoles(['administrator', 'accountant' , 'archive']);

        // Accountant   // id:2 //
        $user = new User();

        $user->name = 'Accountant';
        $user->email = 'accountant@alnaeem.com';
        $user->password = Hash::make('123456');
        $user->save();
        
        $user->attachRole('accountant');

        // Archive   // id:3 //
        $user = new User();

        $user->name = 'Archive';
        $user->email = 'archive@alnaeem.com';
        $user->password = Hash::make('123456');
        $user->save();
        
        $user->attachRole('archive');


    }// end of run


}// end of seeder
