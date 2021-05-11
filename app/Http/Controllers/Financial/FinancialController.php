<?php

namespace App\Http\Controllers\Financial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinancialController extends Controller
{
    public function financial_home(){
        return view('pages.accountant.financial.financial-home');
    }
}
