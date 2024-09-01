@extends('layouts.master')
@section('style')
<style>
.form-group>input {
    width: 80%;
}
</style>
@endsection

@section('content')



<div class="row">
    <div class="col-lg-12 margin-tb mb-4">
        <div class="pull-left">
            <h2>Create A New Consignment
                <div class="float-end">
                    <a class="btn btn-primary" href="{{ route('positions.index') }}"> Back</a>
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




<!-- tank position form -->

<div class="card p-4 bg-light shadow rounded center_div_position">

    <form action="{{ route('positions.store') }}" method="POST">
        @csrf
        <div class="row">

            <div class="col-md-6">
                <h4></h4>
                <!-- <div class="form-group">
                <strong>Shipment Id:</strong>
                <input id="position_input_" type="text" name="shipment_id" class="form-control">
            </div> -->
                <div class="form-group my-3">
                    <strong>Tank number:</strong>
                    <!-- <input id="tank_number" type="text" name="tank_number" class="tank_number form-control"> -->
                    <div class="mt-1">
                        <select name="tank_number" id="tank_number" class="tank_number form-control"
                            style="width:80%"></select>
                    </div>
                </div>
                <div class="form-group my-3">
                    <strong>LC No:</strong>
                    <div class="mt-1">
                        <select name="lc_no" id="lc_no" class="lc_no form-control" style="width:80%"
                            id="lc_no"></select>
                    </div>
                </div>
                <div class="form-group  my-3">
                    <strong>Consignee Name:</strong>
                    <input id="position_input_consignee" type="text" name="consignee_name" class="form-control mt-1"
                        readonly="true">
                </div>
                <div class="form-group  my-3">
                    <strong>Origin:</strong>
                    <input id="position_input_origin" type="text" name="origin" class="form-control" readonly="true">
                </div>
                <div class="form-group  my-3">
                    <strong>Destination:</strong>
                    <input id="position_input_destination" type="text" name="destination" class="form-control"
                        readonly="true">
                </div>
                <div class="form-group  my-3">
                    <strong>ETD to Final Destination:</strong>
                    <input id="position_input_etd_des" type="date" name="etd_to_final_dest" class="form-control">
                </div>
                <div class="form-group  my-3">
                    <strong>ETA to final dest:</strong>
                    <input id="position_input_eta_des" type="date" name="eta_to_final_dest" class="form-control">
                </div>
                <div class="form-group  my-3">
                    <strong>Loading date:</strong>
                    <input id="position_input_loading_date" type="date" name="loading_date" class="form-control">
                </div>
                <div class="form-group  my-3">
                    <strong>Connecting port name:</strong>
                    <input id="position_input_connect_port" type="text" name="connecting_port_name"
                        class="form-control">
                </div>
                <div class="form-group  my-3">
                    <strong>Arrived at connecting port:</strong>
                    <input id="arrived_at_connecting_port" type="date" name="arrived_at_connecting_port"
                        class="form-control">
                </div>
            </div>
            <div class="col-md-6" id="return_data">
                <div class="form-group  my-3">
                    <strong>Sail to dest port:</strong>
                    <input id="position_input_sail" type="date" name="sail_to_dest_port" class="form-control">
                </div>
                <div class="form-group  my-3">
                    <strong>Arrived at dest port:</strong>
                    <input id="position_input_arrive_des_port" type="date" name="arrived_at_dest_port"
                        class="form-control">
                </div>
                <div class="form-group  my-3">
                    <strong>Arrival at customer:</strong>
                    <input id="position_input_arrive_cus" type="date" name="arrival_at_customer" class="form-control">
                </div>
                <div class="form-group  my-3">
                    <strong>Arrive to agent warehouse:</strong>
                    <input id="position_input_arrive_warh" type="date" name="arrive_to_agent_warehouse"
                        class="form-control">
                </div>
                <div class="form-group  my-3">
                    <strong>Loading port:</strong>
                    <input id="position_input_loading_port" type="text" name="loading_port" class="form-control">
                </div>
                <div class="form-group  my-3">
                    <strong>Sail to conneting:</strong>
                    <input id="position_input_sail_connect" type="date" name="sail_to_conneting" class="form-control">
                </div>
                <div class="form-group  my-3">
                    <strong>Arrive at conneting:</strong>
                    <input id="position_input_arrive_connect" type="date" name="arrive_at_conneting"
                        class="form-control">
                </div>
                <div class="form-group  my-3">
                    <strong>Sail to dest:</strong>
                    <input id="position_input_sail_des" type="date" name="sail_to_dest" class="form-control">
                </div>
                <div class="form-group  my-3">
                    <strong>Arrived at dest:</strong>
                    <input id="position_input_arrive_des" type="date" name="arrived_at_dest" class="form-control">
                </div>
                <div class="form-group  my-3">
                    <strong>Arrived at warehouse:</strong>
                    <input id="position_input_warehouse" type="date" name="arrived_at_warehouse" class="form-control">
                </div>
                <!-- <div class="form-group">
                <strong>Tank status:</strong>
                <input id="position_input_" type="text" name="tank_status" class="form-control">
            </div> -->
            </div>
            <!-- <div class="col-xs-12 my-3 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div> -->

            <div class="col-xs-12 my-3 text-center">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>





<!-- end tank position form -->



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
    //     $('#lc_no').onchange(function() {
    //         $lcNumber = $('#lc_no').val();
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




    $('#lc_no').select2({
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


    $('#tank_number').select2({
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


    $('#lc_no').on('change', function() {
        var data = $("#lc_no option:selected").val();
        //   $("#test").val(data);

        axios.post('/getlc', {
            id: data

        }).then(function(response) {
            console.log(response.data);
            if (response.status == 200 && response.data) {
                var jsonData = response.data;
                $consignee = $('#position_input_consignee').val(jsonData[0].consignee_name);
                $origin = $('#position_input_origin').val(jsonData[0].origin);
                $destination = $('#position_input_destination').val(jsonData[0].destination);
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


function makeonchange(first, second) {
    // first.disabled = true;
    // second.disabled = false;

    first.readOnly = true;
    second.readOnly = false;

}
var $sel1 = $("select[name=lc_no]");

var inp1 = document.getElementById("tank_number");
var inp2 = document.getElementById("lc_no");
var inp3 = document.getElementById("position_input_etd_des");
var inp4 = document.getElementById("position_input_eta_des");
var inp5 = document.getElementById("position_input_loading_date");
var inp6 = document.getElementById("position_input_connect_port");
var inp7 = document.getElementById("arrived_at_connecting_port");
var inp8 = document.getElementById("position_input_sail");
var inp9 = document.getElementById("position_input_arrive_des_port");
var inp10 = document.getElementById("position_input_arrive_cus");
var inp11 = document.getElementById("position_input_arrive_warh");
var inp12 = document.getElementById("position_input_loading_port");
var inp13 = document.getElementById("position_input_sail_connect");
var inp14 = document.getElementById("position_input_arrive_connect");
var inp15 = document.getElementById("position_input_sail_des");
var inp16 = document.getElementById("position_input_arrive_des");
var inp17 = document.getElementById("position_input_warehouse");
$(function() {
    // document.getElementById("lc_no").attr("readonly", "readonly");
    // document.getElementById("lc_no").style.display = 'none';
    // document.getElementsByClassName("select2").attr("readonly", "readonly");
    // $('#lc_no').prop('readonly', true);
    $("#lc_no").attr("readonly", "readonly");

    document.getElementById("position_input_etd_des").readOnly = true;
    document.getElementById("position_input_eta_des").readOnly = true;
    document.getElementById("position_input_loading_date").readOnly = true;
    document.getElementById("position_input_connect_port").readOnly = true;
    document.getElementById("arrived_at_connecting_port").readOnly = true;
    document.getElementById("position_input_sail").readOnly = true;
    document.getElementById("position_input_arrive_des_port").readOnly = true;
    document.getElementById("position_input_arrive_cus").readOnly = true;
    document.getElementById("position_input_arrive_warh").readOnly = true;
    document.getElementById("position_input_loading_port").readOnly = true;
    document.getElementById("position_input_sail_connect").readOnly = true;
    document.getElementById("position_input_arrive_connect").readOnly = true;
    document.getElementById("position_input_sail_des").readOnly = true;
    document.getElementById("position_input_arrive_des").readOnly = true;
    document.getElementById("position_input_warehouse").readOnly = true;
});
inp1.onchange = function() {
    if (this.value != "" || this.value.length > 0) {
        // inp2.select2.readOnly = false;
        // $('#lc_no').select2("readonly", false);
        $("#lc_no").removeAttr("readonly");
    }
}
inp2.onchange = function() {
    if (this.value != "" || this.value.length > 0) {

        $("#tank_number").attr("readonly", "readonly");
        inp3.readOnly = false;
        // makeonchange(inp1, inp3);
    }
}
inp3.onchange = function() {
    if (this.value != "" || this.value.length > 0) {
        $("#lc_no").attr("readonly", "readonly");
        inp4.readOnly = false;
        // makeonchange(inp2, inp4);
    }
}
inp4.oninput = function() {
    if (this.value != "" || this.value.length > 0) {
        makeonchange(inp3, inp5);
    }
}
inp5.oninput = function() {
    if (this.value != "" || this.value.length > 0) {
        makeonchange(inp4, inp6);
    }
}
inp6.onkeyup = function() {
    if (this.value != "" || this.value.length > 0) {
        makeonchange(inp5, inp7);
    }
}
inp7.oninput = function() {
    if (this.value != "" || this.value.length > 0) {
        makeonchange(inp6, inp8);
    }

}
inp8.oninput = function() {
    if (this.value != "" || this.value.length > 0) {
        makeonchange(inp7, inp9);
    }

}
inp9.oninput = function() {
    if (this.value != "" || this.value.length > 0) {
        makeonchange(inp8, inp10);
    }
}
inp10.oninput = function() {
    if (this.value != "" || this.value.length > 0) {
        makeonchange(inp9, inp11);
    }
}
inp11.oninput = function() {
    if (this.value != "" || this.value.length > 0) {
        makeonchange(inp10, inp12);
    }
}

inp12.onkeyup = function() {
    if (this.value != "" || this.value.length > 0) {
        makeonchange(inp11, inp13);
    }

}

inp13.oninput = function() {
    if (this.value != "" || this.value.length > 0) {
        makeonchange(inp12, inp14);
    }

}
inp14.oninput = function() {
    if (this.value != "" || this.value.length > 0) {
        makeonchange(inp13, inp15);
    }
}

inp15.oninput = function() {
    if (this.value != "" || this.value.length > 0) {
        makeonchange(inp14, inp16);
    }
}

inp16.oninput = function() {
    if (this.value != "" || this.value.length > 0) {
        makeonchange(inp15, inp17);
    }
}


$(function() {
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if (month < 10)
        month = '0' + month.toString();
    if (day < 10)
        day = '0' + day.toString();

    var minDate = year + '-' + month + '-' + day;

    $('input[type="date"]').attr('min', minDate);
});
</script>

@endsection