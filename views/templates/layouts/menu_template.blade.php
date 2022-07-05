<li class="nav-item">
    <a href="@{{ route('{{ $config->modelNames->camelPlural }}.index') }}" class="nav-link @{{ Request::is('{{ $config->modelNames->camelPlural }}*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>{{ $config->modelNames->humnaPlural }}</p>
    </a>
</li>
