@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-4">
        <div class="pull-left">
            <h2>positions
                <div class="float-end">
                    @can('position-create')
                    <a class="btn btn-success" href="{{ route('positions.create') }}"> Create New Consignment</a>
                    @endcan
                </div>
            </h2>
        </div>
    </div>
</div>




@include('components.success')

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <!-- <th>Shipment Id</th> -->
            <th>Tank Number</th>
            <th>LC NO</th>
            <th>Consignee Name</th>
            <th>Origin</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
    </thead>

    @foreach ($positions as $position)
    <tbody>
        <tr>
            <td>{{ $position->id }}</td>
            <!-- <td>{{ $position->shipment_id }}</td> -->
            <td>{{ $position->tank_number }}</td>
            <td>{{  \App\Models\Lc::findOrFail($position->lc_no)->lc_no }}</td>
            <td>{{ $position->consignee_name }}</td>
            <td>{{ $position->origin }}</td>
            <td>{{ $position->tank_status }}</td>
            <td>
                <form action="{{ route('positions.destroy',$position->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('positions.show',$position->id) }}">Show</a>
                    @can('position-edit')
                    <a class="btn btn-primary" href="{{ route('positions.edit',$position->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('position-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
            </td>
        </tr>
    </tbody>

    @endforeach
</table>

@endsection