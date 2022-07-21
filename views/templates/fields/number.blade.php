<!-- {{ $fieldTitle }} Field -->
<div class="form-group col-sm-6">
@if($config->options->localized)
    @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}').':') !!}
@else
    @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}:') !!}
@endif
    @{!! Form::number('{{ $fieldName }}', null, ['class' => 'form-control'@php if(isset($options)) { echo htmlspecialchars_decode($options); } @endphp]) !!}
</div>