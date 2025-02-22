<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable=['date_depart','client_id','agence_id','axe_id'];
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory;

    public function agence()
    {
        return $this->belongsTo(Agence::class,'agence_id');
    }

        public function axe()
    {
        return $this->belongsTo(Axe::class,'axe_id');
    }

        public function client()
    {
        return $this->belongsTo(Client::class,'client_id');
    }
}
