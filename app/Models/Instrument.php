<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
  protected $fillable = [
    'brand',
    'model',
    'price',
    'description',
    'image',
  ];
}
