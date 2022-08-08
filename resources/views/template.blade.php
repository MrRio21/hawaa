<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Hawa</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet '>
    <link rel="stylesheet" href="{{asset('css/Driver_Registration.css')}}">
    <link rel="stylesheet" href="{{asset('css/passenger_Registration.css')}}">
    <link rel="stylesheet" href="{{asset('css/sign_up.css')}}">
    <link rel="stylesheet" href="{{asset('css/booking.css')}}">
    <link rel="stylesheet" href="{{asset('css/log_in.css')}}">
    <link rel="stylesheet" href="{{asset('css/driver.css')}}">
    <link rel="stylesheet" href="{{asset('css/custmer_trips.css')}}">
    <link rel="stylesheet" href="{{asset('css/Passenger_Trip.css')}}">
    <link rel="stylesheet" href="{{asset('css/Driver_requisite.css')}}">
    <link rel="stylesheet" href="{{asset('css/about_us.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet '>
 -->




 <link rel="stylesheet" href="{{asset('css/Hawa_home.css')}}">





</head>
<body>
        <!--=== Header ===-->

    <header>
        <div class="header__container">
            <a href="{{route('home')}}">
                <h1>HAWAA</h1></a>
                <ul class="nav">
                <li><a href="{{route('about_us')}}">about Hawa</a></li>
                @auth

                @if(Auth::user()->Driver)
                <li><a href="{{route('driver_pro')}}">{{Auth::user()->name}}</a></li>
                <li><a href="{{route('driver_trip')}}">All Trip</a></li>
                @else
                <li><a href="{{route('customer_pro')}}">{{Auth::user()->name}}</a></li>
                @endif

                <li>
                    <img src="imgs/{{Auth::user()->img}}">
                </li>
                <li><a href="{{route('my_logout')}}">log out</a></li>
                @else
                <li><a href="{{route('sing_up')}}">sign up</a></li>
                <li><a href="{{route('mylogin')}}">log in</a></li>
                    @endauth

            </ul>

        </div>
    </header>
@yield('test')
@yield('main')

</body>
</html>
