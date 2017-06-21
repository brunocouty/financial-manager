<?php

namespace BrunoCouty\FinancialManager\Controllers;

use App\Http\Controllers\Controller;

class FinancialManagerController extends Controller
{
    public function index()
    {
        $registers = [];
        return view('FM::content.home', compact('registers'));
    }
}