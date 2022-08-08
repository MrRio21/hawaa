@extends('template')
@section('test')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign_up</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet '>
    <link rel="stylesheet" href="{{asset('css/sign_up.css')}}">
</head>
<div class="button__container">
         <div class="button">
             <a href="{{route('passenger')}}" ><button> sign up as rider </button></a>
             <a href="{{route('driver')}}"><button> sign up as driver </button></a>
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
                            All Right Reserved &copy; 2020
                        </p>

                    </footer>


@endsection
