<!-- {{ $fieldTitle }} Field -->
<div class="form-group col-sm-12 col-lg-12">
@if($config->options->localized)
    @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}').':') !!}
@else
    @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}:') !!}
@endif
    @{!! Form::textarea('{{ $fieldName }}', null, ['class' => 'form-control']) !!}
</div>