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
                                <h3 class="mb-0">{{ __('Create Indicator') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ url('/eval/indicator') }}" class="btn btn-sm btn-primary">{{ __('Back') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/eval/indicator/add') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Select Aspect</label> <br>
                                <table>
                                    <tr>
                                        <td>
                                            <select name="Domain_Id" >
                                                <option value="1"> Aspect 1</option>
                                                <option value="2"> Aspect 2</option>
                                                <option value="3"> Aspect 3</option>
                                            </select>
                                        </td>
                                        <td>
                                        <a href="{{ url('/eval/aspect/add') }}" class="btn btn-sm btn-primary">{{ __('Add Aspect') }}</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="form-group">
                                <label for="">Indicator Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Masukkan username">
                            </div>
                            <div class="form-group">
                                <label for="">Indicator Question</label>
                                <input type="text" name="question" class="form-control" placeholder="Masukkan password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger btn-sm">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
