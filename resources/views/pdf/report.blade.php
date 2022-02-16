
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link href="https://chart.googleapis.com/chart?chs=186x189&cht=qr&chl=http%3A%2F%2Fwww.google.com%2F&choe=UTF-8">
</head>

<body>


<table class="table" style="width: 100%;">
    <thead>
    <tr>
        <th style="text-align: right;padding-right: 50px;">
            <img class="" style="width: 120px;" src="https://chart.googleapis.com/chart?chs=186x189&cht=qr&chl={{$host}}&choe=UTF-8" title="ACD Deposit Address" />


    </tr>
    </thead>

</table>




<table class="table" style="width: 100%;padding:20px">
    <thead>
    <tr>
        <th scope="col" style="width: 40%;background-color: black;border-radius: 15px;"><img src="image/ARAB-FASHION-WEEK-X-D3-LOGO_white-150x150.png" alt="" style="width: 62%;height: 157px;"></th>
        <th scope="col" style="width: 60%;color: darkgray;  padding-top: 30px;text-align: left;padding-left: 150px;">

            <span style="font-size: 20px;font-weight:bold;color: darkgray;">{{$rsvp->f_name}}{{' '}}{{$rsvp->l_name}}</span> <br>
            <span style="font-size: 17px;font-weight:inherit;color: darkgray;">{{$rsvp->email}}</span> <br>
            <span style="font-size: 17px;font-weight:inherit;color: darkgray;">{{$rsvp->phone}}</span> <br>
            <span style="font-size: 17px;font-weight:inherit;color: darkgray;">{{$rsvp->category}}</span> <br>

        </th>


    </tr>
    </thead>

</table>



<table class="table" style="width: 100%;margin-bottom: 20px;margin-top: 20px">
    <thead>
    <tr>
        <th style="text-align: center;">
            <h1>Event Detail</h1>


    </tr>
    </thead>

</table>


<table class="table" style="width: 100%;border-collapse: collapse;">

    <tbody>


    <tr>
        <td class="td_border th_bold" style="width: 20%;">  {{'Name'}}</td>
        <td class="td_border th_bold" style="width: 20%;">  {{'Date'}}</td>
        <td class="td_border th_bold" style="width: 20%;">  {{"start & End time"}}</td>
        <td class="td_border th_bold" style="width: 20%;">  {{"Seat"}}</td>
    </tr>

    @foreach($events as $event)


    <tr>
        <td class="td_border th_bold" style="width: 20%;">  {{$event->event->name}}</td>
        <td class="td_border th_bold" style="width: 20%;">  {{$event->event->start}}</td>
        <td class="td_border th_bold" style="width: 20%;"> {{Carbon\Carbon::parse($event->event->starttime)->format('h:i a')}} -  {{Carbon\Carbon::parse($event->event->endtime)->format('h:i a')}} </td>
        <td class="td_border th_bold" style="width: 20%;">  {{$event->seat}}</td>
    </tr>
    @endforeach







    </tbody>
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






<table class="table" style="width: 100%">
    <thead>
    <tr>
        <th scope="col" style="width: 80%;text-align: right;"></th>
        <th scope="col" style="width: 30%">
            <p style="padding-top: 29px;">
                Inti Fernandez M.D. PORTOFINO IV CENTER 901-A SW 87 AVE MIAMI, FL 33174
            </p>
        </th>


    </tr>
    </thead>

</table>




</body>

</html>
