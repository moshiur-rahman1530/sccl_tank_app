@extends('layouts.master')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-4">
        <div class="pull-left">
            <h2> Show LC
                <div class="float-end">
                    <a class="btn btn-primary" href="{{ route('lcs.index') }}"> Back</a>
                </div>
            </h2>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>LC No:</strong>
            {{ $lc->lc_no }}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>LC Date:</strong>
            {{ $lc->lc_date }}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>LC Type:</strong>
            {{ $lc->lc_type }}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Consignee:</strong>
            {{ $lc->consignee_name }}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Beneficiary:</strong>
            {{ $lc->beneficiary}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>LC expired date:</strong>
            {{ $lc->lc_expired_date}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Last shipment date:</strong>
            {{ $lc->last_ship_date}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Product:</strong>
            {{ $lc->product}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Quantity:</strong>
            {{ $lc->qtn}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Price:</strong>
            {{ $lc->price}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Origin:</strong>
            {{ $lc->origin}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Destination:</strong>
            {{ $lc->destination}}
        </div>
    </div>
</div>
@endsection