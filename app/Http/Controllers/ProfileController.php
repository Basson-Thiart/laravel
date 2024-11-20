<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();

        Profile::create([
            'price' => $data('price'),
        ]);
    }
}
