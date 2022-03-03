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
        <th scope="col" style="width: 50%;background-color: black;border-radius: 15px;"><img
                src="image/png10.png" alt="" style="width: 250px;height: 250px;">
        </th>
        <th scope="col" style="width: 50%;color: darkgray;  padding-top: 30px;text-align: center;padding-left: 150px;">

            <img class="" style="width: 150px;"
                 src="https://chart.googleapis.com/chart?chs=186x189&cht=qr&chl={{$host}}&choe=UTF-8"
                 title="ACD Deposit Address"/>


        </th>


    </tr>
    </thead>

</table>


<table class="table" style="width: 100%;border-collapse: collapse;">

    <tbody>



    @foreach($events as $event)


        <tr>
            <td class="td_border th_bold" style="width: 50%;text-align: left">

           <div style="margin-left: 100px">
               <p style="margin-bottom: 0px;"> {{$event->event->start}}</p>
               <p  style="margin-top: 2px;"> CHECK-IN: {{Carbon\Carbon::parse($event->event->starttime)->format('h:i a')}}</p>
               <br>
               <p style="margin: 2px" class="font-weight-bold">SHOWS</p>
            <p style="margin-top: 2px"> {{$event->event->title}}   {{Carbon\Carbon::parse($event->event->starttime)->format('h:i a')}} - {{Carbon\Carbon::parse($event->event->starttime)->format('h:i a')}}</p>



           </div>

            </td>

            <td class="td_border th_bold" style="width: 20%;">  {{$event->seat}}</td>
        </tr>
    <tr>
      <td colspan="2">
          <hr>  </td>

    </tr>
    @endforeach



    </tbody>
</table>


<table class="table" style="width: 100%;margin-bottom: 20px;margin-top: 20px">
    <thead>
    <tr>
        <th style="text-align: left;">
            <h3 style="margin-left: 100px">You are kindly requested to arrive on time to enjoy your allocated seat.</h3>

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
