<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link href="https://chart.googleapis.com/chart?chs=186x189&cht=qr&chl=http%3A%2F%2Fwww.google.com%2F&choe=UTF-8">
</head>

<body class="" style="background-color: black;color: white">


<table class="table" style="width: 100%;padding:20px">
    <thead>
    <tr>
        <th scope="col" style="width: 100%;background-color: black;border-radius: 15px;"><img
                src="image/png10.png" alt="" style="width: 250px;height: 250px;">
        </th>



    </tr>
    </thead>

</table>

<table class="table" style="width: 100%;margin-bottom: 20px;margin-top: 20px">
    <thead>
    <tr>
        <th style="text-align: left;">
            <p style="margin-left: 100px;margin-bottom: 0px;margin-top: 0px">NAME: {{$rsvp->f_name.' '.$rsvp->l_name}}</p>
            <p style="margin-left: 100px;margin-bottom: 0px;margin-top: 0px">You are kindly requested to arrive on time to enjoy your allocated seat.</p>

    </tr>
    </thead>

</table>

<div class="" style="width: 100%;">


    @foreach($events as $event)
        <div style="width: 49%;display: inline-block">
            <table class=table"" style="width: 100%;border-collapse: collapse;margin: 0px;">

                <tbody>





                <tr style="width: 100%;">
                    <td class="td_border th_bold" style="width: 100%;text-align: left">

                        <div style="margin-left: 100px">
                            <p style="margin-bottom: 0px;"> {{$event->event->title}}</p>
                            <p  style="margin-top: 2px;"> CHECK-IN: {{Carbon\Carbon::parse($event->event->endtime)->format('h:i A')}}</p>

                            <p style="margin-top: 2px;line-height: 20px;color: #d9d2d2"> {!! nl2br($event->event->desc) !!}   </p>



                        </div>

                    </td>


                </tr>





                </tbody>
            </table>
        </div>
    @endforeach



</div>
<table class="table" style="width: 100%;padding:20px;border: none"  cellspacing="0" cellpadding="0">
    <thead>
    <tr style="background-color: white">
        <td scope="col" style="width: 80%;color: darkgray;  padding: 20px;text-align: left;">

            <p>location</p>
            <p>locationnote</p>
            <p>locationnote</p>



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
        <th scope="col" style="width: 25%;text-align: center;">
            <img src="image/png1.png" style="width: 50%" alt="">
        </th>

        <th scope="col" style="width: 25%;text-align: center;">
            <img src="image/png2.png" style="width: 50%" alt="">
        </th>

        <th scope="col" style="width: 25%;text-align: center;">
            <img src="image/png3.png" style="width: 50%" alt="">
        </th>

        <th scope="col" style="width: 25%;text-align: center;">
            <img src="image/png4.png" style="width: 50%" alt="">
        </th>


    </tr>

    <tr>


        <th scope="col" style="width: 25%;text-align: center;">
            <img src="image/png5.png" style="width: 50%" alt="">
        </th>


        <th scope="col" style="width: 25%;text-align: center;">
            <img src="image/png6.png" style="width: 50%" alt="">
        </th>

        <th scope="col" style="width: 25%;text-align: center;">
            <img src="image/png7.png" style="width: 50%" alt="">
        </th>

        <th scope="col" style="width: 25%;text-align: center;">
            <img src="image/png8.png" style="width: 50%" alt="">
        </th>

    </tr>


    </thead>

</table>


<table class="table" style="width: 100%">
    <thead>

    <tr>

        <th scope="col" style="width: 33%;text-align: right;">
            <img src="image/png9.png" style="width: 50%" alt="">
        </th>

        <th scope="col" style="width: 33%;text-align: center;">
            <img src="image/png2.png" style="width: 50%" alt="">
        </th>


        <th scope="col" style="width: 33%;text-align: left;">
            <img src="image/png11.png" style="width: 50%" alt="">
        </th>

    </tr>
    </thead>

</table>

<table class="table" style="width: 100%">
    <thead>
    <tr>
        <th scope="col" style="width: 25%;text-align: center;">
            <img src="image/png11.png" style="width: 50%" alt="">
        </th>

        <th scope="col" style="width: 25%;text-align: center;">
            <img src="image/png12.png" style="width: 50%" alt="">
        </th>

        <th scope="col" style="width: 25%;text-align: center;">
            <img src="image/png5.png" style="width: 50%" alt="">
        </th>

        <th scope="col" style="width: 25%;text-align: center;">
            <img src="image/ARAB-FASHION-WEEK-X-D3-LOGO_white-150x150.png" style="width: 50%" alt="">
        </th>


    </tr>
    </thead>

</table>

</body>

</html>
