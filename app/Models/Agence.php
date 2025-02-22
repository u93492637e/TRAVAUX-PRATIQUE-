<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    protected $fillable=['libelle','description'];
    /** @use HasFactory<\Database\Factories\AgenceFactory> */
    use HasFactory;

        public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
