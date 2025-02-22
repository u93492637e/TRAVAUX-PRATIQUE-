<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AgenceRequest;
use App\Models\Agence;
class AgenceController extends Controller
{
    public function index()
    {
        $agences=Agence::all();
        return view('agence',['agences'=>$agences]);
    }

    public function store(Request $request)
    {
        $validated=$request->validate([
            'libelle'=>'required|string|max:75|unique:agences',
            'description'=>'nullable|string|max:200'
        ]);
        Agence::Create($validated);
        return redirect(url()->previous())->with('alert','Ajouté avec succès');
    }

     public function update(Request $request,Agence $agence)
    {
        $validated=$request->validate([
            'libelle'=>'required|string|max:75|unique:agences',
            'description'=>'nullable|string|max:200'
        ]);
        $agence->update($validated);
        return redirect(url()->previous())->with('alert','Modifié avec succès');
    }

     public function destroy(Agence $agence)
    {

        $agence->delete();
        return redirect(url()->previous())->with('alert','Supprimé avec succès');
    }
}
