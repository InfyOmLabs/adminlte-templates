@@extends('layouts.app')

@@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
@if($config->options->localized)
@@lang('models/{!! $config->modelNames->camelPlural !!}.singular') @@lang('crud.detail')
@else
{{ $config->modelNames->human }} Details
@endif
                    </h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural  !!}.index') }}">
                        @if($config->options->localized)
                            @@lang('crud.back')
                        @else
                            Back
                        @endif
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @@include('{{ $config->prefixes->getViewPrefixForInclude() }}{{ $config->modelNames->snakePlural }}.show_fields')
                </div>
            </div>
        </div>
    </div>
@@endsection
