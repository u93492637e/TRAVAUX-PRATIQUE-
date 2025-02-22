@extends('layout')

@section('content')
<h2 class="text-center text-warning fw-bold">
    Les clients
</h2>

<table class="table-fluid col-8 offset-2 mt-5">
    <thead>
        <tr class="text-center bg-dark text-white">
            <th>Nom</th>
            <th>Prenom</th>
            <th>Téléphone</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
        <tr>
            <td>{{ $client->nom }}</td>
            <td>{{ $client->prenom }}</td>
            <td>{{ $client->tel }}</td>
            <td>
                <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#uclient-modal{{ $client->id }}">Modifier</a>
                <form action="{{ route('client.destroy',$client->id) }}" method="post">
                    @csrf @method('delete')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <div class="modal fade" id='uclient-modal{{$client->id}} '>
            <div class="modal-dialog">
                <div class="modal-content ">
                    <div class="modal-header">
                        <div class="modal-title">
                            <h3 class="modal-title">Formulaire des clients</h3>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <form action="{{ route('client.update',$client->id ) }}" class="vstack g-2" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                @include('shared.input',['label'=>'Nom','name'=>'nom','class'=>'col','value'=>'{{ $client->nom }}'])
                                @include('shared.input',['label'=>'Prenom','name'=>'prenom','value'=>'{{ $client->prenom }}'])
                            </div>
                            <div class="row">
                                @include('shared.input',['label'=>'Téléphone','name'=>'tel','value'=>'{{ $client->tel }}'])

                            </div>


                    </div>
                    <div class="modal-footer">
                        @include('shared.button',['value'=>'Ajouter','icone'=>'bi bi-plus','color'=>'primary','type'=>'submit'])
                    </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </tbody>
</table>
@endsection
