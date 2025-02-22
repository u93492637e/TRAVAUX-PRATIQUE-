@php
 $name ??= '';
 $label ??= '';
 $type ??= 'text';
 $value ??= '';
 $required ??= '';
@endphp

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    @if($type == 'textarea')
    <textarea name="{{ $name }}" class="form-control" placeholder="{{ $name }}" {{ $required }} @error is_invalid @enderror>{{ $value }}</textarea>
    @else
    <input type="{{ $type }}" class="form-control" name="{{ $name }}" placeholder="{{ $name }}" {{ $required }}  value="{{ $value }}">
    @endif
</div>
