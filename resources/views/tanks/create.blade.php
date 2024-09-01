@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-4">
        <div class="pull-left">
            <h2>Create New tank
                <div class="float-end">
                    <a class="btn btn-primary" href="{{ route('tanks.index') }}"> Back</a>
                </div>
            </h2>
        </div>
    </div>
</div>

@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<div class="card p-4 bg-light shadow rounded">

    <form action="{{ route('tanks.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>tank_number:</strong>
                    <input type="text" name="tank_number" class="form-control" placeholder="tank_number">
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>tank_owner:</strong>
                    <input type="text" name="tank_owner" class="form-control" placeholder="tank_owner">
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>manufacturing_date:</strong>
                    <input type="date" name="manufacturing_date" class="form-control" placeholder="manufacturing_date">
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Current PO Certificate No:</strong>
                    <input type="text" name="current_po_certificate" class="form-control"
                        placeholder="current_po_certificate">
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Certificate Name:</strong>
                    <input type="text" name="certificate_name" class="form-control" placeholder="Certificate Name">
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Certificate Cost:</strong>
                    <input type="text" name="certificate_cost" class="form-control" placeholder="Certificate Cost">
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>last_test_date:</strong>
                    <input type="date" name="last_test_date" class="form-control" placeholder="last_test_date">
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>expired_date:</strong>
                    <input type="date" name="expired_date" class="form-control" placeholder="expired_date">
                </div>
            </div>
            <!-- <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>no_of_test:</strong>
                    <input type="text" name="no_of_test" class="form-control" placeholder="no_of_test">
                </div>
            </div> -->
            <!-- <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>status:</strong>
                    <input type="text" name="status" class="form-control" placeholder="status">
                </div>
            </div> -->
            <div class="col-xs-12 mb-3 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</div>


@endsection