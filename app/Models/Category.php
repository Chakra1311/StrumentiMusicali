<?php

namespace App\Models;

use App\Models\Instrument;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $fillable =['name'];

   public function instruments(){
    return $this->belongsToMany(Instrument::class);
   }
   
}
