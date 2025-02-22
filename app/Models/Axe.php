<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Axe extends Model
{
    protected $fillable=['depart','arrive','montant'];
    /** @use HasFactory<\Database\Factories\AxeFactory> */
    use HasFactory;


       public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }

       public function departRegion()
    {
        return $this->belongsTo(Region::class,'depart');
    }
    public function arriveRegion()
    {
        return $this->belongsTo(Region::class,'arrive');
    }

    public function axeVoyage(): Attribute
    {
        return Attribute::make(
            get: fn()=> $this->departRegion->libelle .'-'. $this->arriveRegion->libelle
        );


}
}
