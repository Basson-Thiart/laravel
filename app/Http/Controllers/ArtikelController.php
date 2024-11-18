<?php

namespace App\Http\Controllers;

use App\Models\Artikels;
use App\Models\Invoice;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function create()
    {
        $newArtikel = new Artikels();
        $newArtikel->artikelkode = '' . rand(1, 1000000000);
        $newArtikel->save();
        return view('Artikel', ['artikel' => $newArtikel]);
    }
}
