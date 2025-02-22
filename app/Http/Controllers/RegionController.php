<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegionRequest;
use App\Models\Region;

class RegionController extends Controller
{
     public function index()
    {
        $regions=Region::all();
        return view('region',['regions'=>$regions]);
    }

    public function store(Request $request)
    {
        $validated=$request->validate( [
            'libelle'=>'required|string|unique:regions'
        ]);
        Region::Create($validated);
        return redirect(url()->previous())->with('alert','Ajouté avec succès');
    }

     public function update(Request $request,Region $region)
    {
        $validated=$request->validate( [
            'libelle'=>'required|string|unique:regions'
        ]);
        $region->update($validated);
        return redirect(url()->previous())->with('alert','Modifié avec succès');
    }

     public function destroy(Region $region)
    {

        $region->delete();
        return redirect(url()->previous())->with('alert','Supprimé avec succès');
    }
}
