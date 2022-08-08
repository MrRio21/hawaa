@extends('template')
@section('test')

{{-- @can('isUser') --}}

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passenger Registration</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet '>
    <link rel="stylesheet" href="{{asset('css/cust.css')}}">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>


    <main>
        <div class="customer">
                <div class="customer__info">

                    <div class="customer__img" border-radius="50%">
                    <img src="imgs/{{Auth::user()->img}}" width="400px">
                    </div>


                    <h4><i class='bx bxs-star'></i> Customert information</h4>

                    <hr>

                    <h4><i class='bx bx-female' ></i> Name :
                        @auth
                    {{Auth::user()->name}}
                        @endauth
                    </h4>



                    <h4><i class='bx bxl-meta'></i> Social</h4>
                    <hr>


                        <p><i class="fas fa-mobile-alt"></i>@auth{{Auth::user()->phone}} @endauth</p>



                        <p><i class="fas fa-envelope"></i> @auth{{Auth::user()->email}}@endauth </p>



                        <p><i class="fab fa-facebook-square"></i>  @auth {{Auth::user()->name}} @endauth@facebook </p>

                        <p><a href="{{ route('history') }}" class="btn" >My History</a></p>


                </div>



                <div class="customer__order">

                    @foreach ($data as $item)
                    <div class="customer__trips">

                        <h2>My Trip </h2>

                            <ol>
                                <li><a href="{{route('card',['trip'=>$item])}}">Start Point:{{$item['position']}}</li>
                                <li>Destination:{{$item['destination']}}</li>
                                <li>Date:{{$item['date']}}</li>
                                <li>status:{{$item['status']}}</li>

                            </ol>
                    </div>
                    @endforeach
                </div>
        </div>


    </main>





        <!--=== Footer ===-->
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

        {{-- @endcan --}}
        @endsection
