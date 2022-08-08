
<!-- 
@extends('template')
@section('test')
 -->



<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passenger Registration</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet '>
    <link rel="stylesheet" href="{{asset('css/driver_pro.css')}}">
    <link rel="stylesheet" href="{{asset('css/Hawa_home.css')}}">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

  <main>
   
          <div class="driver">

                <div class="driver__info">

                      <div class="driver__img"  border-radius="50%">
                        <img src="imgs/{{Auth::user()->img}}" width="400px">
                        {{-- @auth{{Auth::user()->img}} @endauth --}}
                      </div>

                      <h4><i class='bx bxs-star'></i>Driver Information</h4>

                <hr>

                    <h4><i class='bx bx-female' ></i>Name : @auth{{Auth::user()->name}} @endauth </h4>

                    <h4><i class="fas fa-map-signs"></i>City : @auth{{Auth::user()->Driver['city']}} @endauth </h4>

                    <h4><i class='bx bxl-meta'></i>Social</h4>

                    <hr>

                    <p><i class="fas fa-mobile-alt"></i> @auth{{Auth::user()->phone}} @endauth </p>

                    <p><i class="fas fa-envelope"></i>@auth{{Auth::user()->email}} @endauth </p>

                    <p><i class="fab fa-facebook-square"></i>@auth{{Auth::user()->name}} @endauth@facebook </p>

                </div>


            <div class="driver__order">
                <div class="driver__trips">
                    <div>
                        <p>National ID:</p>
                        <img src="imgs/{{Auth::user()->NID}}">
                    </div>

                    <div>
                        <p>Driver License:</p>
                        <img src="imgs/{{Auth::user()->Driver->driver_license}}">
                    </div>

                    <div>
                        <p>Car Picture:</p>
                        <img src="imgs/{{Auth::user()->Driver->carlicense}}">
                    </div>

                    {{-- <p>Driving History:</p> --}}
                    <button><a href="{{ route('myorder') }}" class="btn"></a>my orders</button>
                </div>
            </div>
    </div>


    <!--=== footer ===-->

    <footer>
        <!--Up Section-->
        <div class="up__section">
            <a href="#" class="f__logo">HAWA.</a>
            <ul>
                <h1>Company</h1>
                <li><a href="#">Teams</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Support</a></li>
            </ul>

            <ul>
                <h1>About</h1>
                <li><a href="#">Team & company</a></li>
                <li><a href="#">Location</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Our Services</a></li>
            </ul>

        </div>

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
</main>
</body>
</html>
<!-- @endsection -->
