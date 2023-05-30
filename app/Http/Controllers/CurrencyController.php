<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function currency_index()
    {
        return view('currency.index');
    }
    public function currency_add()
    {
        return view('currency.add');
    }
}
