<?php

namespace App\Models\Analyses;

use Illuminate\Database\Eloquent\Model;

class Analyse extends Model
{
    public $timestamps = false;

    public function espece()
    {
      return $this->belongsTo(\App\Models\Espece::class);
    }

    public function icone()
    {
      return $this->belongsTo(\App\Models\Icone::class);
    }

    public function prelevements()
    {
      return $this->hasMany(\App\Models\Productions\Prelevement::class);
    }

    public function anaacte()
    {
      return $this->belongsTo(Anaacte::class);
    }

    public function anaitems()
    {
      return $this->belongsToMany(Anaitem::class);
    }

}
