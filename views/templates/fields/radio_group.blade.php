<!-- {{ $fieldTitle }} Field -->
<div class="form-group col-sm-12">
@if($config->options->localized)
    @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}'), ['class' => 'form-check-label']) !!}
@else
    @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}', ['class' => 'form-check-label']) !!}
@endif
    {!! $radioButtons !!}
</div>