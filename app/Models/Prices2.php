<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prices2 extends Model
{
    public $table = 'prices2';
    protected $fillable = ['price', 'artikelkode'];
}
