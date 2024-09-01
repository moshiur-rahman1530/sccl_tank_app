@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-4">
        <div class="pull-left">
            <h2>Ports
                <div class="float-end">
                    @can('port-create')
                    <a class="btn btn-success" href="{{ route('ports.create') }}"> Create New port</a>
                    @endcan
                </div>
            </h2>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-striped table-hover">
    <tr>
        <th>Port No</th>
        <th>Port Code</th>
        <th>Port Name</th>
        <th>Country</th>
        <th>City</th>
        <th>Geolocation</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($ports as $port)
    <tr>
        <td>{{ $port->port_no}}</td>
        <td>{{ $port->port_code}}</td>
        <td>{{ $port->port_name}}</td>
        <td>{{ $port->country}}</td>
        <td>{{ $port->city}}</td>
        <td>{{ $port->geolocation}}</td>
        <td>
            <form action="{{ route('ports.destroy',$port->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('ports.show',$port->id) }}">Show</a>
                @can('port-edit')
                <a class="btn btn-primary" href="{{ route('ports.edit',$port->id) }}">Edit</a>
                @endcan


                @csrf
                @method('DELETE')
                @can('port-delete')
                <button type="submit" class="btn btn-danger">Delete</button>
                @endcan
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection