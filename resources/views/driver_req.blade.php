@extends('template')
@section('main')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet '>
    <link rel="stylesheet" href="{{asset('css/driver_req.css')}}">
    <title>Driver Requisite</title>
</head>

<body>
    

<main>

    @foreach ($data as $item)


    <div class="swiper-slide">

            <div class="image-content">

                    <div class="card-image">
                        <img src="imgs/{{$item['img']}}" alt="" class="card-img">
                    </div>
            </div>



        <div class="card-content">

            <h2 class="name">start point : {{$item['position']}}</h2>
            <h2 class="name">Destination : {{$item['destination']}}</h2>



            <form method="post" action="{{route('he')}}">

                @csrf


                <div class="card__price">
                        <label for="">Enter The Trip Price:</label>
                        <input type="text" name="trip_id" value="{{$item['id']}}" hidden>
                        <input type="number" name="price" required>
                        @error('price')
                        {{ $message }}
                        @enderror
                    <h3>Pound</h3>
                </div>

                <div class="buttons">
                     <button  class="accept"  type="submit" name="accept">Accept</button>
                </div>
                
            </form>



        
        </div>
    </div>
    @endforeach
</main>

</body>



@endsection