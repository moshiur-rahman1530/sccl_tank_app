@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-4">
        <div class="pull-left">
            <h2>Edit LC

                <div class="float-end">
                    <a class="btn btn-primary" href="{{ route('lcs.index') }}"> Back</a>
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

    <form action="{{ route('lcs.update', $lc->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>LC No:</strong>
                    <input type="text" value="{{ $lc->lc_no }}" name="lc_no" class="form-control" placeholder="LC No">
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>LC Date:</strong>
                    <input type="date" value="{{ $lc->lc_date }}" name="lc_date" class="form-control"
                        placeholder="LC Date">
                </div>
            </div>

            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <label for="lc_type">LC Type:</label>

                    <select id="lc_type" value="{{ $lc->lc_type }}" name="lc_type">
                        @if($lc->lc_type)
                        <option value="{{$lc->lc_type}}" selected>{{$lc->lc_type}}</option>
                        @endif
                        <option value="N/A">Select LC Type</option>
                        <option value="po">PO</option>
                        <option value="tt">TT</option>
                        <option value="lc">LC</option>
                        <option value="sales contact">Sales Contact</option>

                    </select>
                </div>
                <div class="col-xs-12 mb-3">
                    <div class="form-group">
                        <strong>Consignee Name:</strong>
                        <input type="text" value="{{ $lc->consignee_name }}" name="consignee_name" class="form-control"
                            placeholder="Consignee Name">
                    </div>
                </div>

                <div class="col-xs-12 mb-3">
                    <div class="form-group">
                        <strong>Beneficiary:</strong>
                        <input type="text" value="{{ $lc->beneficiary }}" name="beneficiary" class="form-control"
                            placeholder="Beneficiary">
                    </div>
                </div>

                <div class="col-xs-12 mb-3">
                    <div class="form-group">
                        <strong>LC Expired Date:</strong>
                        <input type="date" value="{{ $lc->lc_expired_date }}" name="lc_expired_date"
                            class="form-control" placeholder="lc_expired_date">
                    </div>
                </div>
                <div class="col-xs-12 mb-3">
                    <div class="form-group">
                        <strong>Last Shipment Date:</strong>
                        <input type="date" value="{{ $lc->last_ship_date }}" name="last_ship_date" class="form-control"
                            placeholder="last_ship_date">
                    </div>
                </div>
                <div class="col-xs-12 mb-3">
                    <div class="form-group">
                        <strong>Product:</strong>
                        <input type="text" value="{{ $lc->product }}" name="product" class="form-control"
                            placeholder="Product">
                    </div>
                </div>

                <div class="col-xs-12 mb-3">
                    <div class="form-group">
                        <strong>Quantity:</strong>
                        <input type="text" value="{{ $lc->qtn }}" name="qtn" class="form-control"
                            placeholder="Quantity">
                    </div>
                </div>
                <div class="col-xs-12 mb-3">
                    <div class="form-group">
                        <strong>Price:</strong>
                        <input type="text" value="{{ $lc->price }}" name="price" class="form-control"
                            placeholder="Price">
                    </div>
                </div>
                <div class="col-xs-12 mb-3">
                    <div class="form-group">
                        <strong>Origin:</strong>
                        <input type="text" value="{{ $lc->origin }}" name="origin" class="form-control"
                            placeholder="Origin">
                    </div>
                </div>
                <div class="col-xs-12 mb-3">
                    <div class="form-group">
                        <strong>Destination:</strong>
                        <input type="text" value="{{ $lc->destination }}" name="destination" class="form-control"
                            placeholder="Destination">
                    </div>
                </div>
                <div class="col-xs-12 mb-3 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
    </form>

</div>


@endsection