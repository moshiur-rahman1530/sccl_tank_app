@extends('layouts.master')


@section('style')

<style>
body {
    overflow-x: hidden;
}

table#DisplayData {
    border-spacing: 0;
    width: 100%;
    table-layout: fixed;
    border: 1px solid #ddd;
    word-wrap: break-word
}

table#DisplayData th,
td {
    text-align: left;
    border: 1px solid #ddd;
    word-wrap: break-word margin: auto;
}
</style>

@endsection


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-4">
        <div class="pull-left">
            <h2> Show Tank Position
                <div class="float-end">
                    <a class="btn btn-primary" href="{{ route('positions.index') }}"> Back</a>
                </div>
            </h2>
        </div>
    </div>
</div>


<!-- <div class="row">
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>ID:</strong>
            {{ $position->id }}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Tank No:</strong>
            {{ $position->tank_number }}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>LC Number:</strong>
            {{ $position->lc_no }}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Consignee:</strong>
            {{ $position->consignee_name }}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Origin:</strong>
            {{ $position->origin}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Destination:</strong>
            {{ $position->destination}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>ETA to final dest:</strong>
            {{ $position->etd_to_final_dest}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>ETA to final dest:</strong>
            {{ $position->eta_to_final_dest}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Loading date:</strong>
            {{ $position->loading_date}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Connecting port name:</strong>
            {{ $position->connecting_port_name}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Arrived at connecting port:</strong>
            {{ $position->arrived_at_connecting_port}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Sail to dest port:</strong>
            {{ $position->sail_to_dest_port}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Arrived at dest port:</strong>
            {{ $position->arrived_at_dest_port}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Arrival at customer:</strong>
            {{ $position->arrival_at_customer}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Arrive to agent warehouse:</strong>
            {{ $position->arrive_to_agent_warehouse}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Loading port:</strong>
            {{ $position->loading_port}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Sail to conneting:</strong>
            {{ $position->sail_to_conneting}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Arrive at conneting:</strong>
            {{ $position->arrive_at_conneting}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Sail to dest:</strong>
            {{ $position->sail_to_dest}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Arrived at dest:</strong>
            {{ $position->arrived_at_dest}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Arrived at warehouse:</strong>
            {{ $position->arrived_at_warehouse}}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group">
            <strong>Tank status:</strong>
            {{ $position->tank_status}}
        </div>
    </div> -->

<div class="row">
    <div class="table-responsive">

        <div class="col-md-6 col-12">
            <table class="table table-sm table-striped" id="DisplayData">
                <thead class="bg-info">
                    <tr>
                        <th>Field</th>
                        <th>Value</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td> <strong>ID:</strong></td>
                        <td>{{ $position->id }}</td>
                    </tr>
                    <!-- <tr>
                <td> <strong>ID:</strong></td>
                <td>{{ $position->id }}</td>
            </tr> -->
                    <tr>
                        <td> <strong>LC Number:</strong>
                        <td>
                            {{ \App\Models\Lc::findOrFail($position->lc_no)->lc_no }} </td>
                    </tr>
                    <tr>
                        <td> <strong>Consignee:</strong></td>

                        <td> {{ $position->consignee_name }} </td>
                    </tr>
                    <tr>
                        <td> <strong>Origin:</strong></td>
                        <td>
                            {{ $position->origin}} </td>
                    </tr>
                    <tr>
                        <td> <strong>Destination:</strong></td>
                        <td>
                            {{ $position->destination}} </td>
                    </tr>
                    <tr>
                        <td> <strong>ETA to final dest:</strong></td>
                        <td>
                            {{ $position->etd_to_final_dest}} </td>
                    </tr>
                    <tr>
                        <td> <strong>ETA to final dest:</strong></td>
                        <td>
                            {{ $position->eta_to_final_dest}} </td>
                    </tr>
                    <tr>
                        <td> <strong>Loading date:</strong></td>
                        <td>
                            {{ $position->loading_date}} </td>
                    </tr>
                    <tr>
                        <td> <strong>Connecting port name:</strong></td>
                        <td>
                            {{ $position->connecting_port_name}} </td>
                    </tr>
                    <tr>
                        <td> <strong>Arrived at connecting port:</strong></td>
                        <td>
                            {{ $position->arrived_at_connecting_port}} </td>
                    </tr>
                    <tr>
                        <td> <strong>Sail to dest port:</strong></td>
                        <td>
                            {{ $position->sail_to_dest_port}} </td>
                    </tr>
                    <tr>
                        <td> <strong>Arrived at dest port:</strong></td>
                        <td>
                            {{ $position->arrived_at_dest_port}} </td>
                    </tr>
                    <tr>
                        <td> <strong>Arrival at customer:</strong></td>
                        <td>
                            {{ $position->arrival_at_customer}} </td>
                    </tr>
                    <tr>
                        <td> <strong>Arrive to agent warehouse:</strong></td>
                        <td>
                            {{ $position->arrive_to_agent_warehouse}} </td>
                    </tr>
                    <tr>
                        <td> <strong>Loading port:</strong></td>
                        <td>
                            {{ $position->loading_port}} </td>
                    </tr>
                    <tr>
                        <td> <strong>Sail to conneting:</strong></td>
                        <td>
                            {{ $position->sail_to_conneting}} </td>
                    </tr>
                    <tr>
                        <td> <strong>Arrive at conneting:</strong></td>
                        <td>
                            {{ $position->arrive_at_conneting}} </td>
                    </tr>
                    <tr>
                        <td> <strong>Sail to dest:</strong></td>
                        <td>
                            {{ $position->sail_to_dest}} </td>
                    </tr>
                    <tr>
                        <td> <strong>Arrived at dest:</strong></td>
                        <td>
                            {{ $position->arrived_at_dest}} </td>
                    </tr>
                    <tr>
                        <td> <strong>Arrived at warehouse:</strong></td>
                        <td>
                            {{ $position->arrived_at_warehouse}} </td>
                    </tr>
                    <tr>
                        <td> <strong>Tank status:</strong></td>
                        <td>
                            {{ $position->tank_status}} </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>







</div>
@endsection