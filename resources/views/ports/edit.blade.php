@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-4">
        <div class="pull-left">
            <h2>Edit Port

                <div class="float-end">
                    <a class="btn btn-primary" href="{{ route('ports.index') }}"> Back</a>
                </div>
            </h2>
        </div>
    </div>
</div>

@if ($errors->any())
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

    <form action="{{ route('ports.update', $port->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <!-- <div class="col-xs-12 mb-3">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $port->name }}" class="form-control" placeholder="Name">
            </div>
        </div> -->
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Port No:</strong>
                    <input type="text" name="port_no" value="{{ $port->port_no }}" class="form-control"
                        placeholder="Port No">
                </div>
            </div>

            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Port Code:</strong>
                    <input type="text" name="port_code" value="{{ $port->port_code }}" class="form-control"
                        placeholder="Port Code">
                </div>
            </div>

            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Port Name:</strong>
                    <input type="text" name="port_name" value="{{ $port->port_name }}" class="form-control"
                        placeholder="Port Name">
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Country:</strong>
                    <input type="text" name="country" value="{{ $port->country }}" class="form-control"
                        placeholder="Country">
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>City:</strong>
                    <input type="text" name="city" value="{{ $port->city }}" class="form-control" placeholder="City">
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Geolocation:</strong>
                    <input type="text" name="geolocation" value="{{ $port->geolocation }}" class="form-control"
                        placeholder="Geolocation">
                </div>
            </div>

            <div class="col-xs-12 mb-3 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</div>


@endsection