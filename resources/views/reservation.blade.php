@extends('layout') @section('content')
<h2 class="text-center text-warning fw-bold">
    Les réservations
</h2>
{{-- reservation --}}
<div class="modal fade" id='reservation-modal'>
    <div class="modal-dialog">
        <div class="modal-content modal-">
            <div class="modal-header">
                <div class="modal-title">
                    <h3 class="modal-title">Formulaire des reservations</h3>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('reservation.store') }}" class="vstack g-2" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <label for="">Client</label>
                        <select name="client_id" id="" class="form-control">
                            <option value="">Selectionnez le client</option>
                            @foreach($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <label for="">Axe</label>
                        <select name="axe_id" id="" class="form-control">
                            <option value="">Selectionnez l'axe</option>
                            @foreach($axes as $axe)
                            <option value="{{ $axe->id }}">{{ $axe->axeVoyage }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">

                        <label for="">Agence</label>
                        <select name="agence_id" id="" class="form-control">
                            <option value="">Selectionnez l'agence</option>
                            @foreach($agences as $agence)
                            <option value="{{ $agence->id }}">{{ $agence->libelle }}</option>
                            @endforeach
                        </select>
                    </div>
                    @include('shared.input',['type'=>'date','label'=>'Date départ','name'=>'date_depart'])

            </div>
            <div class="modal-footer">
                @include('shared.button',['value'=>'Ajouter','icone'=>'bi bi-plus','color'=>'primary','type'=>'submit'])
            </div>
            </form>
        </div>
    </div>
</div>
<table class="table-fluid col-8 offset-2 mt-5">
    <thead>
        <tr class="text-center bg-dark text-white">
            <th>Client</th>
            <th>Agence</th>
            <th>Axe</th>
            <th>Date départ</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reservations as $reservation)
        <tr>
            <td>{{ $reservation->client->nom }}</td>
            <td>{{ $reservation->agence->libelle }}</td>
            <td>{{ $reservation->axe->axeVoyage }}</td>
            <td>{{ $reservation->date_depart }}</td>
            <td>
                <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ureservation-modal{{ $reservation->id }}">Modifier</a>
                <form action="{{ route('reservation.destroy',$reservation->id) }}" method="post">
                    @csrf @method('delete')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>

        <div class="modal fade" id='ureservation-modal{{ $reservation->id  }}'>
            <div class="modal-dialog">
                <div class="modal-content modal-">
                    <div class="modal-header">
                        <div class="modal-title">
                            <h3 class="modal-title">Formulaire des reservations</h3>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <form action="{{ route('reservation.update',$reservation->id) }}" class="vstack g-2" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <label for="">Cient</label>
                                <select name="client_id" id="" class="form-control">
                                    <option value="{{ $reservation->client->id }}">{{ $reservation->client->nom }}</option>
                                    @foreach($clients as $client)
                                    <option value="{{ $client->id }}">{{ $client->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <label for="">Axe</label>

                                <select name="axe_id" id="" class="form-control">
                                    <option value="{{ $reservation->axe->id }}">{{ $reservation->axe->axeVoyage }}</option>
                                    @foreach($axes as $axe)
                                    <option value="{{ $axe->id }}">{{ $axe->axeVoyage }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <label for="">Agence</label>

                                <select name="axe_id" id="" class="form-control">
                                    <option value="{{ $reservation->agence->id }}">{{ $reservation->agence->libelle }}</option>
                                    @foreach($agences as $agence)
                                    <option value="{{ $agence->id }}">{{ $agence->libelle }}</option>
                                    @endforeach
                                </select>
                            </div>


                    </div>
                    <div class="modal-footer">
                        @include('shared.button',['value'=>'Modifier','icone'=>'bi bi-plus','color'=>'primary','type'=>'submit'])
                    </div>
                    </form>
                </div>
            </div>
        </div>

        @endforeach
    </tbody>
</table>

@endsection