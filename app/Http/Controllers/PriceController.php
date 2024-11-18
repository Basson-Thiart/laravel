<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Prices;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function create()
    {
        $newPrice = new Prices();
        $newPrice->price = 'R' . rand(100, 1000);
        $newPrice->save();
        return view('Price', ['price' => $newPrice]);
    }
}
