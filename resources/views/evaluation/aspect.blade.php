@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Evaluation  Management')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Aspect List') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ url('/eval/aspect/add') }}" class="btn btn-sm btn-primary">{{ __('Add Form') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table align='center'>
                            <th>
                                <td width=50 align='center'>
                                    NO
                                </td>
                                <td width=200 align='center'>
                                    ASPECT ID
                                </td>
                                <td width=200 align='center'>
                                    DOMAIN ID
                                </td>
                                <td width=350 align='center'>
                                    ASPECT NAME
                                </td>
                                <td width=200 align='center'>
                                    TIMESTAMP
                                </td>
                                <td width=250 align='center'>
                                    ACTIONS
                                </td>
                            </th>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection
