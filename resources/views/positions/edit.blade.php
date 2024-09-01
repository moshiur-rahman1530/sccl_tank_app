@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-4">
        <div class="pull-left">
            <h2>Edit Consignment

                <div class="float-end">
                    <a class="btn btn-primary" href="{{ route('positions.index') }}"> Back</a>
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
    <form action="{{ route('positions.update', $position->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- <div class="row">
        <div class="col-xs-12 mb-3">
            <div class="form-group">
                <strong>position Id:</strong>
                <input type="text" name="position_id" value="{{ $position->id }}" class="form-control"
                    placeholder="position id">
            </div>
        </div>
        <div class="col-xs-12 mb-3 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div> -->
        @csrf
        @php
        $user = auth()->user()->role;

        @endphp
        <div class="row">
            <div class="col-xs-12 my-3 text-lest">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <div class="col-md-6">
                <h4></h4>
                <!-- <div class="form-group">
                <strong>Shipment Id:</strong>
                <input id="position_input_" type="text" name="shipment_id" class="form-control">
            </div> -->
                <div class="form-group my-2">
                    <strong>Tank number:</strong>
                    <!-- <input id="position_input_" type="text" name="update_tank_number" class="form-control"> -->
                    <div class="mt-1">
                        <select name="tank_number" id="update_tank_number" class="update_tank_number form-control"
                            style="width:75%">
                            <option value="{{$position->tank_number}}">
                                {{$position->tank_number}}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group my-3">
                    <strong>LC No:</strong>
                    <div class="mt-1">
                        <!-- App\Models\Lc::lc_by_id($position->Update_lc_no -->
                        <select name="lc_no" id="lc_no" class="lc_no form-control" style="width:75%">
                            <option value="{{$position->lc_no}}">
                                {{$lc->lc_no}}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <strong>Consignee Name:</strong>
                    <input id="update_position_input_consignee" value="{{$position->consignee_name}}" type="text"
                        name="consignee_name" class="form-control" @if($user=!'Admin' ) readonly @endif>
                </div>
                <div class="form-group">
                    <strong>Origin:</strong>
                    <input id="update_position_input_origin" value="{{$position->origin}}" type="text" name="origin"
                        class="form-control" readonly="true">
                </div>
                <div class="form-group">
                    <strong>Destination:</strong>
                    <input id="update_position_input_destination" type="text" name="destination"
                        value="{{$position->destination}}" class="form-control">
                </div>
                <div class="form-group">
                    <strong>ETD to Final Destination:</strong>
                    <input id="position_input_" type="date" value="{{$position->etd_to_final_dest}}"
                        name="etd_to_final_dest" class="form-control">
                </div>
                <div class="form-group">
                    <strong>ETA to final dest:</strong>
                    <input id="position_input_" type="date" value="{{$position->eta_to_final_dest}}"
                        name="eta_to_final_dest" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Loading date:</strong>
                    <input id="position_input_" type="date" value="{{$position->loading_date}}" name="loading_date"
                        class="form-control">
                </div>
                <div class="form-group">
                    <strong>Connecting port name:</strong>
                    <input id="position_input_" type="text" value="{{$position->connecting_port_name}}"
                        name="connecting_port_name" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Arrived at connecting port:</strong>
                    <input id="arrived_at_connecting_port" type="date" value="{{$position->arrived_at_connecting_port}}"
                        name="arrived_at_connecting_port" class="form-control">
                </div>
            </div>
            <div class="col-md-6" id="return_data">
                <div class="form-group">
                    <strong>Sail to dest port:</strong>
                    <input id="position_input_" type="date" value="{{$position->sail_to_dest_port}}"
                        name="sail_to_dest_port" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Arrived at dest port:</strong>
                    <input id="position_input_" type="date" value="{{$position->arrived_at_dest_port}}"
                        name="arrived_at_dest_port" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Arrival at customer:</strong>
                    <input id="position_input_" type="date" value="{{$position->arrival_at_customer}}"
                        name="arrival_at_customer" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Arrive to agent warehouse:</strong>
                    <input id="position_input_" type="date" value="{{$position->arrive_to_agent_warehouse}}"
                        name="arrive_to_agent_warehouse" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Loading port:</strong>
                    <input id="position_input_" type="text" value="{{$position->loading_port}}" name="loading_port"
                        class="form-control">
                </div>
                <div class="form-group">
                    <strong>Sail to conneting:</strong>
                    <input id="position_input_" type="date" value="{{$position->sail_to_conneting}}"
                        name="sail_to_conneting" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Arrive at conneting:</strong>
                    <input id="position_input_" type="date" value="{{$position->arrive_at_conneting}}"
                        name="arrive_at_conneting" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Sail to dest:</strong>
                    <input id="position_input_" type="date" value="{{$position->sail_to_dest}}" name="sail_to_dest"
                        class="form-control">
                </div>
                <div class="form-group">
                    <strong>Arrived at dest:</strong>
                    <input id="position_input_" type="date" value="{{$position->arrived_at_dest}}"
                        name="arrived_at_dest" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Arrived at warehouse:</strong>
                    <input id="position_input_" type="date" value="{{$position->arrived_at_warehouse}}"
                        name="arrived_at_warehouse" class="form-control">
                </div>
                <!-- <div class="form-group">
                <strong>Tank status:</strong>
                <input id="position_input_" type="text" name="tank_status" class="form-control">
            </div> -->
            </div>
            <!-- <div class="col-xs-12 my-3 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div> -->
        </div>
    </form>
</div>


@endsection




@section('script')



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>




<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
})





$(document).ready(function() {

    $consignee = $('#consignee_name');
    $origin = $('#consignee_name').val();
    $destination = $('#consignee_name').val();
    // $(function() {
    //     $('#Update_lc_no').onchange(function() {
    //         $lcNumber = $('#Update_lc_no').val();
    //         console.log($lcNumber);
    //     });
    // });


    // $('#return_data').hide();

    $('#arrived_at_connecting_port').keyup(function() {

        // If value is not empty
        if ($(this).val().length == 0) {
            // Hide the element
            // $('#return_data').hide();
        } else {
            // Otherwise show it
            $('#return_data').show();
        }
    })




    $('#Update_lc_no').select2({
        placeholder: 'Select an item',
        ajax: {
            url: '/auto_lc',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                // $('#consignee_name').val(data);

                return {

                    results: $.map(data, function(item) {
                        // console.log(id);
                        return {
                            text: item.lc_no,
                            id: item.id,
                        }


                    })
                };
            },
            cache: true
        }
    });


    $('#update_tank_number').select2({
        placeholder: 'Select an item',
        ajax: {
            url: '/auto_tank',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                // $('#consignee_name').val(data);

                return {

                    results: $.map(data, function(item) {
                        // console.log(id);
                        return {
                            text: item.tank_number,
                            id: item.tank_number,
                        }


                    })
                };
            },
            cache: true
        }
    });


    $('#Update_lc_no').on('change', function() {
        var data = $("#Update_lc_no option:selected").val();
        //   $("#test").val(data);

        axios.post('/getlc', {
            id: data

        }).then(function(response) {
            console.log(response.data);
            if (response.status == 200 && response.data) {
                var jsonData = response.data;
                $consignee = $('#update_position_input_consignee').val(jsonData[0]
                    .consignee_name);
                $origin = $('#update_position_input_origin').val(jsonData[0].origin);
                $destination = $('#update_position_input_destination').val(jsonData[0]
                    .destination);
            } else {}
        }).catch(function(error) {});


    })

});
// $(function() {
//     $('#input1').focus(function() {
//         $('#input2').prop('disabled', 'disabled');
//     }).blur(function() {
//         $('#input2').prop('disabled', '');
//     });

//     $('#input2').focus(function() {
//         $('#input1').prop('disabled', 'disabled');
//     }).blur(function() {
//         $('#input1').prop('disabled', '');
//     });
// });


var inp1 = document.getElementById("input1");
var inp2 = document.getElementById("input2");
var inp3 = document.getElementById("input3");
var inp4 = document.getElementById("input4");
var inp5 = document.getElementById("input5");
var inp6 = document.getElementById("input6");
$(function() {
    document.getElementById("input2").disabled = true;
    document.getElementById("input3").disabled = true;
    document.getElementById("input4").disabled = true;
    document.getElementById("input5").disabled = true;
    document.getElementById("input6").disabled = true;
});
inp1.onkeyup = function() {
    if (this.value != "" || this.value.length > 0) {
        document.getElementById("input2").disabled = false;
    }
    inp2.onkeyup = function() {
        if (this.value != "" || this.value.length > 0) {
            document.getElementById("input1").disabled = true;
            document.getElementById("input3").disabled = false;
        }
    }
    inp3.onkeyup = function() {
        if (this.value != "" || this.value.length > 0) {
            document.getElementById("input2").disabled = true;
            document.getElementById("input4").disabled = false;
        }
    }
    inp4.oninput = function() {
        if (this.value != "" || this.value.length > 0) {
            document.getElementById("input3").disabled = true;
            document.getElementById("input5").disabled = false;
        }
    }
    inp5.oninput = function() {
        if (this.value != "" || this.value.length > 0) {
            document.getElementById("input4").disabled = true;
            document.getElementById("input6").disabled = false;
        }
    }
    inp6.onkeyup = function() {
        if (this.value != "" || this.value.length > 0) {
            document.getElementById("input5").disabled = true;
        }
    }
    inp6.onchange = function() {
        document.getElementById("input6").disabled = true;

    }
}
</script>
@endsection