@extends('layouts.app')
@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-plugin icon-gradient bg-tempting-azure"></i>
                    </div>
                    <div>Employees Attendance
                    </div>
                </div>
            </div>
        </div>
        <div class="main-card mb-2 card">
            <div class="card-body">
                <label for="" class="alert alert-danger" style="display: none"></label>
                <div class="row">
                    <div class="col-sm-2">
                        <label for=""><b>From</b></label>
                        <input type="date" class="form-control" id="from" style="font-size: 12px">
                    </div>
                    <div class="col-sm-2">
                        <label for=""><b>To</b></label>
                        <input type="date" class="form-control" id="to" style="font-size: 12px">
                    </div>
                    <div class="col-sm-3">
                        <label for=""><b>Department</b></label>
                        <select class="form-control" id="department" style="font-size: 12px">
                            <option value="0">-- Select Department --</option>
                            @foreach($departments as $dept)
                                <option value="{!! $dept->ID !!}">{!! $dept->DEPT_NAME !!}</option>
                            @endforeach
                        </select>
                    </div>

                        <div class="col-sm-3">
                            <label for=""><b>OR</b></label>
                            <label for=""><b>Employee</b></label>
                        <select class="form-control" id="employee" style="font-size: 12px">
                            <option value="0">-- Select Employee --</option>
                            @foreach($employees as $emp)
                                <option value="{!! $emp->ID !!}">{!! $emp->BADGENUMBER !!} - {!! $emp->NAME !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <label for="" style="color: transparent">.</label>
                        <button class="form-control btn btn-primary click" style="float:right;">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table style="width: 100%;" class="table table-hover table-striped table-bordered attTable">
                    <thead>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function (){

            $(".click").on("click" , function (){
                $(".alert").html('')
                $(".alert").css('display' , 'none')
                /*diff = ((new Date($("#to").val()).getFullYear()+"-"+(new Date($("#to").val()).getMonth()+1) + "-"+ new Date($("#to").val()).getDate()) - (new Date($("#from").val()).getFullYear()+"-"+(new Date($("#from").val()).getMonth()+1) + "-"+ new Date($("#from").val()).getDate()))
                diff = diff < 0 ? (-1)*diff : diff;
                console.log(diff);
                if (diff > 10)
                {
                    $(".alert").css('display' , 'block')
                    $(".alert").html('Too long date, From and to date difference must be less than 10')
                    return
                }*/
                $.ajax({
                    url : "{!! url('show-attendance') !!}",
                    type : 'GET',
                    data : {
                        'department' : $("#department").val(),
                        'employee' : $("#employee").val(),
                        'from' : $("#from").val(),
                        'to' : $("#to").val(),
                    }
                })
                    .done(function (e) {
                        $(".attTable thead").empty()
                        $(".attTable tbody").empty()
                        col = $(".attTable thead").append("<tr>")
                        col.append("<th style='font-size: 10px'>Name</th>")
                        var days = ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'];
                        for (var  i = 0 ; i < JSON.parse(e).dates.length-1 ; i++)
                        {
                            d = new Date(JSON.parse(e).dates[i]);
                                col.append(`<th style='font-size: 11px'>${d.getDate()} - ${d.getMonth()+1} ,${d.getFullYear()}<br>${days[d.getDay()]}</th>`);
                        }

                        for (var  i = 0 ; i < JSON.parse(e).employees.length ; i++)
                        {
                            newTr = $(".attTable tbody").append("<tr>")
                            newTr.append(`<td style='font-size: 11px'>${JSON.parse(e).employees[i].BADGENUMBER} - ${JSON.parse(e).employees[i].NAME}</td>`)
                            for (var  j = 0 ; j < JSON.parse(e).dates.length-1 ; j++)
                            {

                                $val = checkCheckInDate(JSON.parse(e).employees[i].checkinout , JSON.parse(e).employees[i].ID , JSON.parse(e).dates[j])
                                if ($val == "")
                                  newTr.append(`<td style="background-color: darkred"></td>`);
                                else if ($val.includes("OUT") && $val.includes("IN"))
                                    newTr.append(`<td style="font-size: 11px;background-color: lightgreen">${$val}</td>`);
                                else if (!($val.includes("OUT")) ||  (!($val.includes("IN"))))
                                    newTr.append(`<td style="font-size: 11px;background-color: orangered;color: white">${$val}</td>`);
                            }
                        }


                    })
            })
            function checkCheckInDate(arr , userid , date)
            {
                $in = '';
                $out = '';
                $val = '';
                if (arr.length == 0)
                    return ""

                for (var i = 0 ; i < arr.length; i++)
                {
                    if (arr[i].USERID == userid && ((new Date(arr[i].CHECKTIME).getFullYear()+"-"+(new Date(arr[i].CHECKTIME).getMonth()+1) + "-"+ new Date(arr[i].CHECKTIME).getDate()) == (new Date(date).getFullYear()+"-"+(new Date(date).getMonth()+1) + "-"+ new Date(date).getDate())) && arr[i].CHECKTYPE == 'I' && $in == '')
                    {
                        $in = arr[i].CHECKTIME;
                    }
                    if (arr[i].USERID == userid && ((new Date(arr[i].CHECKTIME).getFullYear()+"-"+(new Date(arr[i].CHECKTIME).getMonth()+1) + "-"+ new Date(arr[i].CHECKTIME).getDate()) == (new Date(date).getFullYear()+"-"+(new Date(date).getMonth()+1) + "-"+ new Date(date).getDate())) && arr[i].CHECKTYPE == 'O')
                    {
                        $out = arr[i].CHECKTIME;
                    }
                }
                if ($in != '')
                {
                    $val = "IN : "+formatAMPM($in.split(" ")[1]);
                }
                if ($in != '' && $out != '')
                {
                    $val = $val +"<br>";
                }
                if ($out != '')
                {
                    $val = $val + "OUT : "+formatAMPM($out.split(" ")[1]);
                }
                return  $val;
            }
            function formatAMPM(date) {
                var hours = date.split(":")[0];
                var minutes = date.split(":")[1];
                var ampm = hours >= 12 ? 'pm' : 'am';
                hours = hours % 12;
                hours = hours ? hours : 12; // the hour '0' should be '12'
                hours = hours < 10 ? '0'+hours : hours
                var strTime = hours + ':' + minutes + ' ' + ampm;
                return strTime;
            }
        });
    </script>
@endsection