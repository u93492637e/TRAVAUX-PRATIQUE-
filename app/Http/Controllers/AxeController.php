<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AxeRequest;
use App\Models\Axe;
use App\Models\Region;

class AxeController extends Controller
{
     public function index()
    {
        $axes=Axe::all();
        $regions=Region::all();
        $axes->load([
            'departRegion',
            'arriveRegion'
        ]);
        // dd($axes);
        return view('axe',['axes'=>$axes,'regions'=>$regions]);
    }

    public function store(Request $request)
    {
        $validated=$request->validate([
            'depart'=>'required|exists:regions,id',
            'arrive'=>'required|exists:regions,id',
            'montant'=>'required',
        ]);
        Axe::Create($validated);
        return redirect(url()->previous())->with('alert','Ajouté avec succès');
    }

     public function update(Request $request,Axe $axe)
    {
        $validated=$request->validate([
            'depart'=>'required|exists:regions,id',
            'arrive'=>'required|exists:regions,id',
            'montant'=>'required|integer',
        ]);
        $axe->update($validated);
        return redirect(url()->previous())->with('alert','Modifié avec succès');
    }

     public function destroy(Axe $axe)
    {

        $axe->delete();
        return redirect(url()->previous())->with('alert','Supprimé avec succès');
    }
}
