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
                                <h3 class="mb-0">{{ __('Create Form') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ url('/eval/aspect') }}" class="btn btn-sm btn-primary">{{ __('Back') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/eval/aspect/dd') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Select Domain</label> <br>
                                <table>
                                    <tr>
                                        <td>
                                            <select name="Domain_Id" >
                                                <option value="1"> Domain 1</option>
                                                <option value="2"> Domain 2</option>
                                                <option value="3"> Domain 3</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-danger btn-sm">Add Domains</button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Masukkan username">
                            </div>
                            <div class="form-group">
                                <label for="">Timestamp</label>
                                <input type="text" name="timestamp" class="form-control" placeholder="Masukkan password">
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
