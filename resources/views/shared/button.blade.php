@php
$color ??= 'primary';
$value ??= 'Button';
$type ??= '';
$href ??= '';
$icone ??= '';
$taille ??= '';
$data ??= '';
@endphp
<div class="btn-group">
@if($type=='submit')
<button type="submit" class="btn btn-{{ $color }} {{ $icone }}">{{ $value }}</button>
@else
<button href="{{ $href }}" class="btn btn-{{ $color }} {{ $icone }}" {{ $data }}>{{ $value }}</button>
@endif
</div>
