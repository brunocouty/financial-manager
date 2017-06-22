<?php

namespace BrunoCouty\FinancialManager\Controllers;

use App\Http\Controllers\Controller;
use BrunoCouty\FinancialManager\Models\FinancialCategory;

class FinancialManagerController extends Controller
{
    public function index()
    {
        $registers = $categories = [];
        try {
            $categories = FinancialCategory::orderBy('name')->get();
        } catch (\Exception $e) {

        }
        return view('FM::content.home', compact('registers', 'categories'));
    }
}