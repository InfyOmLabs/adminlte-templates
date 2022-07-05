@@extends('layouts.app')

@@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
@if($config->options->localized)
                    @@lang('models/{!! $config->modelNames->camelPlural !!}.singular')
@else
                    <h1>Edit {{ $config->modelNames->human }}</h1>
@endif
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @@include('adminlte-templates::common.errors')

        <div class="card">

            @{!! Form::model(${{ $config->modelNames->camel }}, ['route' => ['{{ $config->modelNames->camelPlural }}.update', ${{ $config->modelNames->camel }}->{{ $config->primaryName }}], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @@include('{{ $config->modelNames->snakePlural }}.fields')
                </div>
            </div>

            <div class="card-footer">
                @{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="@{{ route('{!! $config->modelNames->camelPlural !!}.index') }}" class="btn btn-default">Cancel</a>
            </div>

            @{!! Form::close() !!}

        </div>
    </div>
@@endsection
