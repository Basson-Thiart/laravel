<?php

namespace App\Http\Controllers;

use App\Models\Prices2;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function create(Request $request)
    {

        $data = $request->all();
        // dd($data);

        Prices2::create([
            'price' => $data['price'],
            'artikelkode' => $data['artikelkode'],
        ]);
    }

    public function createView()
    {
        return view('pages.create-price');
    }
}
