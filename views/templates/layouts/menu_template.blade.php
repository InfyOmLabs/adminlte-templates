<li class="nav-item">
    <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.index') }}" class="nav-link @{{ Request::is('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
@if($config->options->localized)
        <p>@{{ __('models/'.{{ $config->modelNames->camelPlural }}.'singular') }}</p>
@else
        <p>{{ $config->modelNames->humanPlural }}</p>
@endif
    </a>
</li>
