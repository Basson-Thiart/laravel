<?php

namespace App\Http\Controllers;

use App\Models\Artikels;
use App\Models\Invoice;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $data = Artikels::all();
        return view('Stock', ['data' => $data]);
    }
}
