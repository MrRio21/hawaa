@extends('template')
@section('test')



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet '>
    <title>Login Page</title>
    <!-- Custom Style-->
    <link rel="stylesheet" href="{{asset('css/trip_done.css')}}">
</head>

<body>


    <div class="card">

        <h1><u>The Trip is Done</u></h1>


            <div class="driver__card">



                <div class="driver__car">
                    <img src="imgs/{{$book->Driver->carlicense}}" width="300px">
                </div>




                <div class="driver__info">

                        <div class="image">
                            <img src="imgs/{{$book->Driver->User->img}}" alt="">
                        </div>

                        <h1><i class='bx bx-female' ></i>Driver Name :{{$book->Driver->User->name}}</h1>
                        {{-- {{$item->Driver->User->name}} --}}
                        <h1><i class='bx bxs-phone-call' ></i>Driver Phone :{{$book->Driver->User->phone}}</h1>
                        {{-- {{$item->Driver->User->phone}} --}}


                </div>

            </div>

    </div>

</body>


@endsection