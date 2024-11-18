<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $data = Invoice::all();
        return view('invoices', ['data' => $data]);
    }

    public function create()
    {
        $newInvoice = new Invoice();
        $newInvoice->title = 'Invoice - ' . rand(1, 100);
        $newInvoice->save();
        return view('invoices-create', ['title' => $newInvoice]);
    }

    public function delete()
    {
        Invoice::truncate();
    }
}
