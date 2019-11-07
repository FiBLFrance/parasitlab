<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Labo extends Model
{
  public function user()
  {
    return $this->hasOne(User::class);
  }
}
