@push('js')
    <script>
        var datatable_url = '/admin/base';
        var datatable_columns = [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'created_at', name: 'created_at'},
            {data: 'actions', name: 'actions', orderable: false, searchable: false, width: '1%'}
        ];
    </script>
@endpush
<x-admin.layout.master
    :stack="[trans('general.page.index.title',['model'=>trans('base.model')])=>route('admin.base.index')]"
    :title="trans('general.page.index.title',['model'=>trans('base.model')])">

    <x-admin.widget.datatable
        :rows="[
                    trans('datatable.id'),
                    trans('datatable.title'),
                    trans('datatable.created_at'),
                    trans('datatable.actions'),
            ]"
        :actions="[
    trans('general.page.index.create',['model'=>trans('base.model')])=>route('admin.base.create'),
    ]">

    </x-admin.widget.datatable>


</x-admin.layout.master>
