@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-4">
        <div class="pull-left">
            <h2>LC List
                <div class="float-end">
                    @can('lc-create')
                    <a class="btn btn-success" href="{{ route('lcs.create') }}"> Create New lc</a>
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
        <th> LC No</th>
        <th>LC Date</th>
        <th>LC Type</th>
        <th>Consignee Name</th>
        <th>Beneficiary</th>
        <th>LC Expired Date</th>
        <th>Last Shipment Date</th>
        <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Origin</th>
        <th>Destination</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($lcs as $lc)
    <tr>
        <td>{{ $lc->lc_no}}</td>
        <td>{{ $lc->lc_date}}</td>
        <td>{{ $lc->lc_type}}</td>
        <td>{{ $lc->consignee_name}}</td>
        <td>{{ $lc->beneficiary}}</td>
        <td>{{ $lc->lc_expired_date}}</td>
        <td>{{ $lc->last_ship_date}}</td>
        <td>{{ $lc->product}}</td>
        <td>{{ $lc->qtn}}</td>
        <td>{{ $lc->price}}</td>
        <td>{{ $lc->origin}}</td>
        <td>{{ $lc->destination}}</td>

        <td>
            <form action="{{ route('lcs.destroy',$lc->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('lcs.show',$lc->id) }}">Show</a>
                @can('lc-edit')
                <a class="btn btn-primary" href="{{ route('lcs.edit',$lc->id) }}">Edit</a>
                @endcan


                @csrf
                @method('DELETE')
                @can('lc-delete')
                <button type="submit" class="btn btn-danger">Delete</button>
                @endcan
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection