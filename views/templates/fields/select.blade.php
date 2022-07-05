<!-- $FIELD_NAME_TITLE$ Field -->
<div class="form-group col-sm-6">
@if($config->options->localized)
    @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}').':') !!}
@else
    @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}:') !!}
@endif
    @{!! Form::select('{{ $fieldName }}', {{ $selectValues }}, null, ['class' => 'form-control custom-select']) !!}
</div>
