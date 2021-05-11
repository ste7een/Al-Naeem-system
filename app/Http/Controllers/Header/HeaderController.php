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
    public function administrator(){
        $item = [
            ['لوحة التحكم', 'home', 'fa-home'],
            ['الإدارة المالية', 'financial-home' , 'fa-user-tie'], 
        ];
        return $item;
    }
    //Accountant header items
    public function accountant(){
        $item = [
            ['لوحة التحكم', 'home', 'fa-home'],
            ['الإدارة المالية', 'financial-home' , 'fa-user-tie'],
        ];
        return $item;
    }
}
