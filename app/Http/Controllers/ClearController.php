<?php

namespace App\Http\Controllers;

use App\Models\Artikels;
use App\Models\Prices;
use Illuminate\Http\Request;

class ClearController extends Controller
{
    public function delete()
    {
        Prices::truncate();
        Artikels::truncate();
        return view('clear');
    }
}
