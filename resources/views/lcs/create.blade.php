@extends('layouts.master')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-4">
        <div class="pull-left">
            <h2>Create New LC
                <div class="float-end">
                    <a class="btn btn-primary" href="{{ route('lcs.index') }}"> Back</a>
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
    <form action="{{ route('lcs.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>LC No:</strong>
                    <input type="text" name="lc_no" class="form-control" placeholder="LC No">
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>LC Date:</strong>
                    <input type="date" name="lc_date" class="form-control" placeholder="LC Date">
                </div>
            </div>

            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <!-- <label for="lc_type">LC Type:</label> -->
                    <strong>LC Type:</strong>

                    <select id="lc_type" name="lc_type" class="form-control">
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
                        <input type="text" name="consignee_name" class="form-control" placeholder="Consignee Name">
                    </div>
                </div>

                <div class="col-xs-12 mb-3">
                    <div class="form-group">
                        <strong>Beneficiary:</strong>
                        <input type="text" name="beneficiary" class="form-control" placeholder="Beneficiary">
                    </div>
                </div>

                <div class="col-xs-12 mb-3">
                    <div class="form-group">
                        <strong>LC Expired Date:</strong>
                        <input type="date" name="lc_expired_date" class="form-control" placeholder="lc_expired_date">
                    </div>
                </div>
                <div class="col-xs-12 mb-3">
                    <div class="form-group">
                        <strong>Last Shipment Date:</strong>
                        <input type="date" name="last_ship_date" class="form-control" placeholder="last_ship_date">
                    </div>
                </div>
                <div class="col-xs-12 mb-3">
                    <div class="form-group">
                        <strong>Product:</strong>
                        <input type="text" name="product" class="form-control" placeholder="Product">
                    </div>
                </div>

                <div class="col-xs-12 mb-3">
                    <div class="form-group">
                        <strong>Quantity:</strong>
                        <input type="text" name="qtn" class="form-control" placeholder="Quantity">
                    </div>
                </div>
                <div class="col-xs-12 mb-3">
                    <div class="form-group">
                        <strong>Price:</strong>
                        <input type="text" name="price" class="form-control" placeholder="Price">
                    </div>
                </div>
                <div class="col-xs-12 mb-3">
                    <div class="form-group">
                        <strong>Origin:</strong>
                        <!-- <input type="text" name="origin" class="form-control" placeholder="Origin"> -->
                        <select class="origin form-control" style="width:500px;" name="origin" id="origin"></select>
                    </div>
                </div>
                <div class="col-xs-12 mb-3">
                    <div class="form-group">
                        <strong>Destination:</strong>
                        <!-- <input type="text" name="destination" class="destination form-control" placeholder="Destination"> -->


                        <!-- <select class="form-control" name="destination" id="lcdestination" style="width:500px;"
                        name="des_port"></select> -->
                        <select class="destination form-control" style="width:500px;" name="destination"
                            id="destination">
                            <!-- <option></option> -->
                        </select>


                    </div>
                </div>


                <div class="col-xs-12 mb-3 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
    </form>
</div>


@endsection


@section('script')




<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
})
var path = "{{ route('lc.autocomplete') }}";



$(document).ready(function() {

    $('.destination').select2({
        placeholder: 'Select an item',
        width: 'resolve',
        ajax: {
            url: '/autocomplete',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.port_name,
                            id: item.port_name
                        }
                    })
                };
            },
            cache: true
        }
    });

    $('.origin').select2({
        placeholder: 'Select an item',
        width: 'resolve',
        ajax: {
            url: '/autocomplete',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.port_name,
                            id: item.port_name
                        }
                    })
                };
            },
            cache: true
        }
    });

});
</script>
@endsection