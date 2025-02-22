<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use App\Models\Client;
use App\Models\Axe;
use App\Models\Agence;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations=Reservation::all();
        $clients=Client::all();
        $axes=Axe::all();
        $agences=Agence::all();

        $reservations->load([
            'client',
            'axe',
            'agence'
        ]);
        // dd($reservations);
        return view('reservation',['reservations'=>$reservations,'axes'=>$axes,'clients'=>$clients,'agences'=>$agences]);
    }

    public function store(Request $request)
    {
        $validated=$request->validate([
            'date_depart'=>'date|required',
            'client_id'=>'required|exists:clients,id',
            'agence_id'=>'required|exists:agences,id',
            'axe_id'=>'required|exists:axes,id',
        ]);
        Reservation::Create($validated);
        return redirect(url()->previous())->with('alert','Ajouté avec succès');
    }

     public function update(Request $request,Reservation $reservation)
    {
        $validated=$request->validate([
            'date_depart'=>'date|required',
            'client_id'=>'required|exists:clients,id',
            'agence_id'=>'required|exists:agences,id',
            'axe_id'=>'required|exists:axes,id',
        ]);
        $reservation->update($validated);
        return redirect(url()->previous())->with('alert','Modifié avec succès');
    }

     public function destroy(Reservation $reservation)
    {

        $reservation->delete();
        return redirect(url()->previous())->with('alert','Supprimé avec succès');
    }
}
