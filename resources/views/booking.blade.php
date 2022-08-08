@extends('template')
@section('test')

{{-- @can('isDriver') --}}


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet '>

    <link rel="stylesheet" type="text/css" href="{{asset('css/booking.css')}}">
</head>

<body>
    

<main>
    @auth
    <form method="POST" action="{{route('store_trip')}}">
        @csrf

        <h1>Booking Customer</h1>

        <input class="txt" type="text" name="position" required placeholder="Please enter your position">

        <input class="txt" type="text" name="destination" required placeholder="Please enter your destination">

        <input class="time" type="datetime-local" name="date">

        <div class="now__container">
            {{-- <input id="now" name="now" type="checkbox">
            <label for="now">Now</label> --}}
            {{-- <input id="status" name="status" type="checkbox">
            <label for="status">status</label> --}}

        </div>
        <button class="bookig__submit" name="submit"> Book Now </button>


</form>



<div class="map">

    <iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26706.07804054099!2d32.92158484733164!3d24.105360983798704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1656455070994!5m2!1sar!2seg"
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
    
</div>


@else
<a href="{{route('mylogin')}}"><h1>please login</h1></a>

<div class="map">

    <iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26706.07804054099!2d32.92158484733164!3d24.105360983798704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1656455070994!5m2!1sar!2seg"
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
    
</div>

@endauth

</main>

<!--=== footer ===-->

<footer>

<!--Down Section-->
<div class="down__section">
    <ul>
        <h1>Contact Us</h1>
        <li><p>+097-2236803</p></li>
        <li><p>Egypt-Aswan</p></li>
        <li><p>House #215,Street #5</p></li>
    </ul>

    <!--Social-->
    <div class="social">
        <h1>Social</h1>
        <div class="social__icons">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-youtube'></i></a>
        </div>
    </div>

    <!--Search-->
    <div class="search">
        <h1>Email</h1>
        <input type="email" placeholder="Enter Your Email">
    </div>
</div>

<p class="copyright">
    All Right Reserved &copy; 2022
</p>
</footer>

</body>

{{-- @endcan --}}

@endsection
