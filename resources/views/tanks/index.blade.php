@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-4">
        <div class="pull-left">
            <h2>Tanks
                <div class="float-end">
                    @can('tank-create')
                    <a class="btn btn-success" href="{{ route('tanks.create') }}"> Create New tank</a>
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

<table class="table table-striped table-hover table-bordered">
    <tr>
        <th>tank_number</th>
        <th>tank_owner</th>
        <th>manufacturing_date</th>
        <th>current_po_certificate</th>
        <th>last_test_date</th>
        <th>expired_date</th>
        <th>no_of_test</th>
        <th>status</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($tanks as $tank)
    <tr>
        <td>{{ $tank->tank_number }}</td>
        <td>{{ $tank->tank_owner }}</td>
        <td>{{ $tank->manufacturing_date }}</td>
        <td>{{ $tank->current_po_certificate }}</td>
        <td>{{ $tank->last_test_date }}</td>
        <td>{{ $tank->expired_date }}</td>
        <!-- <td>{{ $tank->no_of_test }}</td> -->
        <!-- <td>{{ \App\Models\TankPosition::with('tank_status')->find($tank->tank_number) }}</td> -->


        @if(count($tank->Tankposition)>0)
        @foreach($tank->Tankposition as $rat)
        <td>{{ $rat->tank_status }}</td>
        @endforeach

        @else
        <td></td>
        @endif


        <td>
            <form action="{{ route('tanks.destroy',$tank->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('tanks.show',$tank->id) }}">Show</a>
                @can('tank-edit')
                <a class="btn btn-primary" href="{{ route('tanks.edit',$tank->id) }}">Edit</a>
                @endcan


                @csrf
                @method('DELETE')
                @can('tank-delete')
                <button type="submit" class="btn btn-danger">Delete</button>
                @endcan
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection