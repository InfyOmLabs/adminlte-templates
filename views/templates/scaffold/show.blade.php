@@extends('layouts.app')

@@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
@if($config->options->localized)
                    <h1>{{ $config->modelNames->human }} Details</h1>
@else
                    <h1>@@lang('models/{!! $config->modelNames->camelPlural !!}.singular')</h1>
@endif
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="@{{ route('{!! $config->modelNames->camelPlural  !!}.index') }}">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @@include('{{ $config->modelNames->snakePlural }}.show_fields')
                </div>
            </div>
        </div>
    </div>
@@endsection
