<?php

namespace App\Http\Controllers\Header;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    // This functions to get the header items by role
    public function getHeaderItems($role){
        if ($role == 'administrator')
          return HeaderController::administrator();
        elseif ($role == 'accountant')
          return HeaderController::accountant();
        elseif ($role == 'archive')
          return HeaderController::archive();
        elseif ($role == 'hr')
          return HeaderController::hr();
    }
    //Adminiatrator header items
    public function  (){
        $item = [
            ['لوحة التحكم', 'home', 'fa-home'],
            ['إدارة الموظفين', 'home' , 'fa-user-tie'],
            ['الإدارة المالية', 'financial-home' , 'fa-money-bill-alt'], 
            ['Run Order' , 'home' , 'fa-cog' ]
        ];
        return $item;
    }
    //Accountant header items
    public function accountant(){
        $item = [
            ['لوحة التحكم', 'home', 'fa-home'],
            ['الإدارة المالية', 'financial-home' , 'fa-money-bill-alt'],
        ];
        return $item;
    }
}
