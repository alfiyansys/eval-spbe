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
                                <h3 class="mb-0">{{ __('Form List') }}</h3>
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
                                    FORM ID
                                </td>
                                <td width=350 align='center'>
                                    FORM NAME
                                </td>
                                <td width=200 align='center'>
                                    YEARS
                                </td>
                                <td width=250 align='center'>
                                    ASIGN TO
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
