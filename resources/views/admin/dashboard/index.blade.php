@extends('admin._layouts.app')
@section('title','Statics')

@section('content')
{{--    @dd($counts)--}}
{{--@foreach($counts as $a => $count)--}}

{{--    {{$a . '<br>'.$count}}--}}
{{--@endforeach--}}
    <div class="page-wrapper">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Statics</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-body user-select-none">
            <div class="row">
{{--                @can(App\Enums\User\Permission::CLIENTS)--}}
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-c-yellow text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col">
                                    <p class="m-b-5">Clients</p>
                                    <h4 class="m-b-0">{{$count_clients}}
                                    </h4>
                                </div>
                                <div class="col col-auto text-right">
                                    <i class="feather icon-user f-50 text-c-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                @endcan--}}
{{--                @can(App\Enums\User\Permission::MANAGERS)--}}
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-c-gray text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col">
                                    <p class="m-b-5">Managers</p>
                                    <h4 class="m-b-0">{{$count_managers}}
                                    </h4>
                                </div>
                                <div class="col col-auto text-right">
                                    <i class="feather icon-user f-50 text-c-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                @endcan--}}
{{--                @can(App\Enums\User\Permission::COURIERS)--}}
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-c-green text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col">
                                    <p class="m-b-5">Couriers</p>
                                    <h4 class="m-b-0">
                                    {{$count_couriers}}
                                    </h4>
                                </div>
                                <div class="col col-auto text-right">
                                    <i class="feather icon-user f-50 text-c-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                @endcan--}}
            </div>

        </div>
    </div>

@endsection
