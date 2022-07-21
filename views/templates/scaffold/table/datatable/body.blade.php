@@push('third_party_stylesheets')
    @@include('layouts.datatables_css')
@@endpush

<div class="card-body px-4">
    @{!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered']) !!}
</div>

@@push('third_party_scripts')
    @@include('layouts.datatables_js')
    @{!! $dataTable->scripts() !!}
@@endpush
