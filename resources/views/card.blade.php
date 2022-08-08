{{-- @extends('template')
@section('test') --}}
<html lang="en">
    <head>
        <link rel="stylesheet" href="{{asset('css/card.css')}}">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet '>
        <title>Responsive Card Slider</title>

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="css/swiper-bundle.min.css">

        <!-- CSS -->

    </head>

    <body>
    <header>
        <div class="header__container">
            <a href="{{route('home')}}">
                <h1>HAWAA</h1></a>
                <ul class="nav">
                <li><a href="{{route('about_us')}}">about Hawaa</a></li>
                @auth
                <li><a href="{{route('customer_pro')}}">{{Auth::user()->name}}</a></li>
                {{-- <li><a href="{{route('driver_pro')}}"{{Auth::user()->driver('id')->name}}></a></li> --}}
                {{-- <li>{{Auth::user()->img}}</li> --}}
                <form action="{{ url('search') }}" type="GET">
                    <div class="main-search-input-item">
                    <!-- <input type="search" name="search"  placeholder="Search ..." >
                    <button type="submit" class="main-search-button">Search</button> -->

                    </div>
                    </form>
                <li><a href="{{route('my_logout')}}">log out</a></li>
                @else
                <li><a href="{{route('sing_up')}}">sign up</a></li>
                <li><a href="{{route('mylogin')}}">log in</a></li>
                    @endauth

                </ul>

        </div>
    </header>

    <div class="container">

        {{-- @foreach ($data as $item) --}}

        <div class="details">
                <h1>Passenger Trip</h1>

                <div>
                    <span> From: {{ $trip["position"] }} </span>
                </div>

                <div>
                    <span> To: </span>
                    <span>{{ $trip["destination"] }}</span>
                </div>

                <div>
                    <span> Date: </span>
                    <span> {{ $trip["date"] }}</span>
                </div>
        </div>

            @foreach ($trip->Dritrips as $item)


                        <div class="swiper-slide">

                            <div class="image-content">

                                <div class="card-image">
                                    <img src="imgs/{{Auth::user()->img}}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">

                                <h2 class="name">Name : {{$item->Driver->User->name}}</h2>
                                <h2 class="name">Trip price :  {{$item['price']}}</h2>

                                {{-- <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p> --}}

                                <form method="post" action="{{route('store_bookin')}}">
                                    @csrf

                                    <input name="trip_id" value="{{ $item['trip_id'] }}" hidden>
                                    <input name="driver_id" value="{{ $item['driver_id'] }}" hidden>

                                    <button class="accept">Accept</button>
                                </form>
                                <!-- <button class="cancel">Cancel</button> -->


                            </div>
                        </div>

            @endforeach
    </div>

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
</html>

{{-- @endsection --}}
