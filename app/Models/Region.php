<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable=['libelle'];
    /** @use HasFactory<\Database\Factories\RegionFactory> */
    use HasFactory;

       public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }

       public function axe()
    {
        return $this->hasMany(Axe::class);
    }


}
