@extends('admin._layouts.app')
@section('title', __('Города'))

@section('content')
    <div class="page-wrapper">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h5>@lang('Города')</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include('admin.partials.breadcrumbs', [
                       'first' => __('Города'),
                       'active' => 1
                   ])
                </div>
            </div>
        </div>

        <div class="page-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-2">
                        <div class="card-block">
                            <h5 class="text-uppercase d-flex align-items-center mb-0">
                                <span class="font-weight-bold">
                                    @lang('Города')
                                </span>
                                <span class="text-muted ml-2" id="records_count"></span>
                            </h5>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <a href="{{ route('admin.cities.create') }}" class="btn btn-outline-success">
                                <i class="fa fa-plus fa-fw"></i>
                                @lang('Создать')
                            </a>
                        </div>
                        <div class="card-block">
                            <div class="datatable-wrapper table-responsive">
                                <table id="datatable" class="table table-hover" style="width:100%">

                                    <thead>
                                    <tr>
                                        <th>@lang('Название')</th>
                                        <th>@lang('Дата создания')</th>
                                        <th>@lang('Действия')</th>
                                    </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@push('page-scripts')
    <script>
        $(document).ready(function () {
            const datatable = $('#datatable').DataTable({
                ordering: false,
                ajax: {
                    url: "{{ Request::route('slug') }}",
                    type: 'GET',
                    data: function (data) {
                        data.general = data.search['value'];
                    }
                },
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'created_at_datetime', name: 'created_at'},
                    {
                        data: 'action', orderable: false,
                        render: function (data, type, row) {
                            return '<div class="button-list">' +
                                '<a class="btn btn-outline-primary" href="/cities/' + row.id + '/edit"' +
                                'data-toggle="tooltip" title="@lang('Редактировать')">' +
                                '<i class="fa fa-pencil"></i>' +
                                '</a>' +
                                (
                                    row.permissions.can_delete ?
                                        '<form method="POST" action="/cities/' + row.id + '" class="d-inline">' +
                                        '@csrf' +
                                        '<a class="btn btn-outline-danger" href="#?" data-toggle="tooltip" title="@lang('Удалить')"' +
                                        'onclick="onDelete($(this), \'@lang('Удаленная страна не может быть отменена!')\')"> ' +
                                        '<i class="fa fa-trash"></i>' +
                                        '</a>' +
                                        '@method('DELETE')' +
                                        '</form>' : ''
                                ) +
                                '</div>'
                        }
                    },
                ],
                drawCallback: function () {
                    tooltip();
                    $('#records_count').text(datatable.page.info().recordsDisplay);
                }
            });
        });
    </script>
@endpush
