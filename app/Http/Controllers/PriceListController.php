<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Prices;
use Illuminate\Http\Request;

class PriceListController extends Controller
{
    public function index()
    {
        $data = Prices::all();
        return view('PriceList', ['data' => $data]);
    }
}
