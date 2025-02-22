@extends('layout')

@section('content')
<h2 class="text-center text-warning fw-bold">
    Les axes
</h2>
<div class="modal fade" id='axe-modal'>
    <div class="modal-dialog">
        <div class="modal-content modal-">
            <div class="modal-header">
                <div class="modal-title">
                    <h3 class="modal-title">Formulaire des axes</h3>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('axe.store') }}" class="vstack g-2" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row form-group">
                        <label for="">Départ</label>
                        <select name="depart" id="" class="form-control">
                            <option value="">Selectionnez la region</option>
                            @foreach($regions as $region)
                            <option value="{{ $region->id }}">{{ $region->libelle }}</option>
                            @endforeach
                        </select>
                        <label for="">Arrivée</label>
                        <select name="arrive" id="" class="form-control">
                            <option value="">Selectionnez la region</option>
                            @foreach($regions as $region)
                            <option value="{{ $region->id }}">{{ $region->libelle }}</option>
                            @endforeach
                        </select>

                    </div>
                @include('shared.input',['name'=>'montant','label'=>'Montant','type'=>'number'])


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
            <th>Départ</th>
            <th>Arrivée</th>
            <th>Montant</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($axes as $axe)
        <tr class='text-center'>
            <td>{{ $axe->departRegion->libelle }}</td>
            <td>{{ $axe->arriveRegion->libelle }}</td>
            <td>{{ $axe->montant }}</td>
            <td>
                <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#uaxe-modal{{ $axe->id }}">Modifier</a>
                <form action="{{ route('axe.destroy',$axe->id) }}" method="post">
                    @csrf @method('delete')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
            <div class="modal fade" id='uaxe-modal{{ $axe->id }}'>
                <div class="modal-dialog">
                    <div class="modal-content modal-">
                        <div class="modal-header">
                            <div class="modal-title">
                                <h3 class="modal-title">Formulaire des axes</h3>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                            <form action="{{ route('axe.update', $axe->id) }}" class="vstack g-2" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    @include('shared.input',['label'=>'Départ','name'=>'depart','value'=>$axe->departRegion->libelle])
                                    @include('shared.input',['label'=>'Arrivé','name'=>'arrive','value'=>$axe->departRegion->libelle])
                                </div>


                        </div>
                        <div class="modal-footer">
                            @include('shared.button',['value'=>'Ajouter','icone'=>'bi bi-plus','color'=>'primary','type'=>'submit'])
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

