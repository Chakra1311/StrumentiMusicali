<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
  protected $fillable = [
    'brand',
    'model',
    'price',
    'description',
    'image',
    'user_id'
  ];
  public function user(){
    return $this->belongsTo(User::class);
  }


}
