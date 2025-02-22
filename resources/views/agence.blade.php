@extends('layout') @section('content')
<h2 class="text-center text-warning fw-bold">
    Les agences
</h2>
<div class="col-10 offset-1  bg-light p-1" style='border-radius:20px'>
    <table class="table-fluid col-10 offset-1 mt-3 rounded">
        <thead>
            <tr class="text-center bg-dark text-white">
                <th>Libellé</th>
                <th>Description</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($agences as $agence)
            <tr class="text-center bg-light">
                <td>{{ $agence->libelle }}</td>
                <td>@if($agence->description) {{ $agence->description }} @else N/A @endif</td>
                <td>
                    <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#uagence-modal{{ $agence->id }}">Modifier</a>
                    <form action="{{ route('agence.destroy',$agence->id) }}" method="post">@csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>

                </td>
            </tr>
            <div class="modal fade" id='uagence-modal{{ $agence->id }}'>
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-title">
                                <h3 class="modal-title">Formulaire des agences</h3>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                            <form action="{{ route('agence.update',$agence->id ) }}" class="vstack g-2" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    @include('shared.input',['label'=>'Libellé','name'=>'libelle','class'=>'col','value'=>$agence->libelle])
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
</div>

@endsection
