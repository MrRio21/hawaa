@extends('template')
@section('main')

{{-- @can('isUser') --}}

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet '>
    <title>Passenger_Trip</title>
    <link rel="stylesheet" href="{{asset('css/custmer_trips.css')}}">
</head>
<main>
    <h1>Passenger Trip</h1>

    {{-- @foreach ($data as $item) --}}

   <div class="details">
       <div >
           <span> From: {{ $data["position"] }} </span>
           {{-- <span>{{$item['position']}}</span> --}}
       </div>

       <div>
            <span> To: </span>
            <span>{{ $data["destination"] }}</span>
       </div>

       <div>
               <span> Date: </span>
           <span> {{ $data["date"] }}</span>
       </div>
       <form action="{{ url('search') }}" type="GET">
        <div class="main-search-input-item">
        <input type="search" name="search"  placeholder="Search ..." >
        </div>
        <button type="submit" class="main-search-button">Search</button>
        </form>
   </div>


   @foreach ($data->Dritrips as $item)
   <div class="card">

           <h3>Driver information</h3>

           <div class="card__driver">

               <ol >
                   <li>Name:{{$item->Driver->User->name}}</li>
                   {{-- <li>Car model:</li> --}}
                   {{-- <li>Car color:</li> --}}
                   <li>Trip price:{{$item['price']}}</li>
               </ol>

               <img src="imgs/{{$item->Driver->User->img}}" width="" alt="">

           </div>

           <div class="card__buttons">
            <form method="post" action="{{route('store_bookin')}}">
                @csrf
                <input name="trip_id" value="{{ $item['trip_id'] }}" hidden>
                <input name="driver_id" value="{{ $item['driver_id'] }}" hidden>
            <button >Accept</button>
            </form>
            <button class="cancel">Cancel</button>
        </div>
   </div>
   @endforeach

  </main>
{{-- @endcan --}}
@endsection
