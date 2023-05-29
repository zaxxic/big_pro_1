<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoice()
    {
        return view('sale.sale_invoice');
    }
    public function recurring_invoice()
    {
        return view('sale.sale_recurring_invoice');
    }
    public function add_invoice()
    {
        return view('sale.sale_add_invoice');
    }
    
    
}
