<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{


    public function show(Invoice $invoice){
        return "success";
    }

    public function store(Request $request){
        
    }
}