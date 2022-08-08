

@extends('template')
@section('main')

{{-- @can('isDriver') --}}

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet '>
    <link rel="stylesheet" href="{{asset('css/Driver_requisite.css')}}">
    <title>Driver Requisite</title>
</head>
<main>

    <h1>Driver Requisite</h1>
    @foreach ($data as $item)
    <div class="card">

        <h2>Trip Details</h2>

        <div class="card__trip">
            <ol>
                {{-- <li>Passenger Name:</li> --}}
                <li>Start Point:{{$item['position']}}</li>
                <li>Destination:{{$item['destination']}}</li>
                <li>Date:{{$item['date']}}</li>
            </ol>

            {{-- <div class="card__img">
                <img src="/images/Rio.jpeg" alt="">
                <h3>The Passenger</h3>
            </div> --}}
        </div>


        <form method="post" action="{{route('he')}}">

            @csrf
            {{-- {{ dd($data) }} --}}
            {{-- @method('delete') --}}
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
        </form>
        <form method="post" action="{{route('delete',['trip'=>$item])}}">
            @csrf
            {{-- <button class="cancel" name="cancel">Cancel</button> --}}
        </form>
        </div>



    </div>
    @endforeach
    {{ $data->links() }}
</main>

{{-- @endcan --}}
@endsection
