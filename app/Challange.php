<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challange extends Model
{
  public function scopeCorrect($query)
  {
    return $query->where('id', '=',  2);
  }
}
