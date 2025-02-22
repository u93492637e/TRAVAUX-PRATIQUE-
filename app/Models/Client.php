<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable=['nom','prenom','tel'];
    /** @use HasFactory<\Database\Factories\ClientFactory> */
    use HasFactory;

       public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }

    public function fullName()
    {
        $fullname=$this->nom ." ". $this->prenom;
        return $fullname;
        }
}
