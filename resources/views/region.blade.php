@extends('layout')
@section('content')
<h2 class="text-center text-warning fw-bold">
    Les regions
</h2>

<table class="table-fluid col-8 offset-2 mt-5">
    <thead>
        <tr class="text-center bg-dark text-white">
            <th>Libellé</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($regions as $region)
        <tr class="text-center">
            <td>{{ $region->libelle }}</td>
            <td>
                <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#uregion-modal{{ $region->id }}">Modifier</a>
                <form action="{{ route('region.destroy',$region->id) }}" method="post">@csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <div class="modal fade" id='uregion-modal{{ $region->id }}'>
            <div class="modal-dialog">
                <div class="modal-content modal-">
                    <div class="modal-header">
                        <div class="modal-title">
                            <h3 class="modal-title">Formulaire des régions</h3>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <form action="{{ route('region.update',$region->id) }}" class="vstack g-2" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                @include('shared.input',['label'=>'Region','name'=>'libelle','class'=>'col','value'=>$region->libelle])
                            </div>

                    </div>
                    <div class="modal-footer">
                        @include('shared.button',['value'=>'Enregistrer','icone'=>'bi bi-plus','color'=>'primary','type'=>'submit'])
                    </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </tbody>
</table>
@endsection
