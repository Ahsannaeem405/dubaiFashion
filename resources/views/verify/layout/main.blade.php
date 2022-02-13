<html>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title> Gigli </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

</title>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>

        input[type=radio] {
            border: 0px;
            width: 2em;
            height: 2em;
        }

    </style>
</head>



<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand p-2"><img style="width: 50%" src="{{asset('userSide/assets/img/logo/Logo-real.png')}}"></a>
    <form class="form-inline p-2">

     <a href="{{url('/logout_user')}}">   <button class="btn btn-outline-success my-2 my-sm-0" type="button">Logout</button>
     </a>
    </form>
</nav>

@yield('content')






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>

