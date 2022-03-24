<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link href="https://chart.googleapis.com/chart?chs=186x189&cht=qr&chl=http%3A%2F%2Fwww.google.com%2F&choe=UTF-8">
</head>

<style>
    @page {
        margin: 0;
    }

    @font-face {
        font-family: myArial;
        font-weight: bold;
        src: url('font/Roboto-Regular.ttf') format('truetype');
    }


    body {
        font-family: myArial;
    }




    /*table{*/
    /*    font-family: Arial !important;*/
    /*}*/

</style>

<body class="" style="background-color: black;color: white;">


<table class="table" style="width: 100%;padding:20px">
    <thead>
    <tr>
        <th scope="col" style="width: 100%;background-color: black;border-radius: 15px;"><img
                src="{{'data:image/png;base64,'.base64_encode(file_get_contents('image/mainlogo2.png'))}}" alt=""
                style="width: 100%;height: 250px;">
        </th>


    </tr>
    </thead>

</table>

<table class="table" style="width: 100%;margin-bottom: 20px;margin-top: 20px">
    <thead>
    <tr>
        <th style="text-align: left;">
            <p style="margin-left: 50px;margin-bottom: 0px;margin-top: 0px">
                NAME: {{$rsvp->f_name.' '.$rsvp->l_name}}</p>
            <p style="margin-left: 50px;margin-bottom: 0px;margin-top: 0px">You are kindly requested to arrive on time
                to enjoy your allocated seat.</p>

    </tr>
    </thead>

</table>

<div class="" style="width: 100%;">


    @foreach($events as $event)
        <div style="width: 49%;display: inline-block;margin-top: 50px;height: 200px">
            <table class=table"" style="width: 100%;border-collapse: collapse;margin: 0px;">

                <tbody>


                <tr style="width: 100%;">
                    <td class="td_border th_bold" style="width: 100%;text-align: left">

                        <div style="margin-left: 50px">
                            <p style="margin-bottom: 0px;font-weight: bolder"> {{$event->event->title}}</p>
                            <p style="margin-top: 2px;margin-bottom: 0px;font-weight: bolder">
                                CHECK-IN: {{Carbon\Carbon::parse($event->event->endtime)->format('h:i A')}}</p>
                            <p style="margin-top: 2px;font-weight: bolder"> SEAT: {{$event->seat}}</p>
                            <p style="margin-top: 2px;font-weight: bolder;color:#817875">{!! nl2br($event->event->desc) !!} </p>

{{--                            <p style="margin-top: 2px;line-height: 18px;color: #817875;font-size: 14px;">   </p>--}}


                        </div>

                    </td>


                </tr>


                </tbody>
            </table>
        </div>



    @endforeach


</div>
<table class="table" style="width: 100%;padding:20px;border: none" cellspacing="0" cellpadding="0">
    <thead>
    <tr style="background-color: white">
        <td scope="col" style="width: 80%;color: black;  padding: 20px;text-align: left;padding-top: 10px!important;">

            <p style="font-weight: bolder">LOCATION: BUILDING 7, DUBAI DESIGN DISTRICT (d3)</p>
            <p style="font-weight: bolder">Note: Please ensure that you arrive to the venue at least 30 minutes before the show's schedule to enjoy
                your allocated seats.</p>
            <p style="font-weight: bolder">P.S. Please ensure that you maintain social distance and wear face masks at all the times.</p>


        </td>

        <td style="width: 20%;;text-align: center">
            <img class="" style="width: 70%;"
                 src="https://chart.googleapis.com/chart?chs=186x189&cht=qr&chl={{$host}}&choe=UTF-8"
                 title="ACD Deposit Address"/>

        </td>


    </tr>
    </thead>

</table>


<style>
    .th_bold {
        font-weight: 800;
        font-size: 16px;
    }

    .td_border {
        border: 1px solid black;
        text-align: center;
    }

    tr.border_bottom td {
        border-bottom: 3px solid black;
    }

    tr.border_top td {
        border-top: 3px solid black;
    }

    .undr_lin {
        border-bottom: 1px solid black;
    }

    .txt_bold {
        font-weight: bolder
    }

    .t_p {
        padding-top: 16px;
    }
</style>


<table class="table" style="width: 100%;border-spacing: 0 45px">
    <thead>
    <tr>
        <th scope="col" style="width: 100%;text-align: center;">
            <img src="{{'data:image/png;base64,'.base64_encode(file_get_contents('image/allcompanylogo.png'))}}"
                 style="width: 100%" alt="">
        </th>
    </tr>


    </thead>

</table>


</body>

</html>
