<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Models\Client;

class ClientController extends Controller
{
     public function index()
    {
        $clients=Client::all();
        return view('client',['clients'=>$clients]);
    }

    public function store(Request $request)
    {
        $validated=$request->validate([
            'nom'=>'required|string|max:75',
            'prenom'=>'required|string|max:75',
            'tel'=>'required|max:12',
        ]);
        Client::Create($validated);
        return redirect(url()->previous())->with('alert','Ajouté avec succès');
    }

     public function update(Request $request,Client $client)
    {
        $validated=$request->validate([
            'nom'=>'required|string|max:75',
            'prenom'=>'required|string|max:75',
            'tel'=>'required|integer|max:12',
        ]);
        $client->update($validated);
        return redirect(url()->previous())->with('alert','Modifié avec succès');
    }

     public function destroy(Client $client)
    {

        $client->delete();
        return redirect(url()->previous())->with('alert','Supprimé avec succès');
    }
}
