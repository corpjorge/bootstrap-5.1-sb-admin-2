@if ($errors->has($field))
    <span id="{{ $field }}-error" class="error text-danger" for="input-{{ $field }}" style="display: block;{{-- This fixes a bootstrap known-issue --}}">{{ $errors->first($field) }}</span>
@endif