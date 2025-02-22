{{-- ajout modal --}} {{-- agence --}}

<div class="modal fade" id='agence-modal'>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <h3 class="modal-title">Formulaire des agences</h3>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('agence.store') }}" class="vstack g-2" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        @include('shared.input',['label'=>'Libellé','name'=>'libelle','class'=>'col'])
                    </div>
            </div>
            <div class="modal-footer">
                @include('shared.button',['value'=>'Ajouter','icone'=>'bi bi-plus','color'=>'primary','type'=>'submit'])
            </div>
            </form>

        </div>
    </div>
</div>

{{-- region --}}
<div class="modal fade" id='region-modal'>
    <div class="modal-dialog">
        <div class="modal-content modal-">
            <div class="modal-header">
                <div class="modal-title">
                    <h3 class="modal-title">Formulaire des régions</h3>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('region.store') }}" class="vstack g-2" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        @include('shared.input',['label'=>'Region','name'=>'libelle','class'=>'col'])
                    </div>

            </div>
            <div class="modal-footer">
                @include('shared.button',['value'=>'Ajouter','icone'=>'bi bi-plus','color'=>'primary','type'=>'submit'])
            </div>
            </form>
        </div>
    </div>
</div>

{{-- axe --}}

{{-- client --}}
<div class="modal fade" id='client-modal'>
    <div class="modal-dialog">
        <div class="modal-content modal-">
            <div class="modal-header">
                <div class="modal-title">
                    <h3 class="modal-title">Formulaire des clients</h3>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('client.store') }}" class="vstack g-2" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        @include('shared.input',['label'=>'Nom','name'=>'nom','class'=>'col']) @include('shared.input',['label'=>'Prenom','name'=>'prenom'])
                    </div>
                    <div class="row">
                        @include('shared.input',['label'=>'Téléphone','name'=>'tel'])

                    </div>


            </div>
            <div class="modal-footer">
                @include('shared.button',['value'=>'Ajouter','icone'=>'bi bi-plus','color'=>'primary','type'=>'submit'])
            </div>
            </form>
        </div>
    </div>
</div>





