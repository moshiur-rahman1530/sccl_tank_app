@extends('layouts.master')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-4">
        <div class="pull-left">
            <h2> Show Port
                <div class="float-end">
                    <a class="btn btn-primary" href="{{ route('ports.index') }}"> Back</a>
                </div>
            </h2>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Port No:</strong>
            {{ $port->port_no }}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Port Code:</strong>
            {{ $port->port_code }}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Port Name:</strong>
            {{ $port->port_name }}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Country:</strong>
            {{ $port->country }}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>City:</strong>
            {{ $port->city }}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Geolocation:</strong>
            {{ $port->geolocation }}
        </div>
    </div>
</div>
@endsection