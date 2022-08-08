

@extends('template')
@section('test')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log_in</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet '>  
    <link rel="stylesheet" href="{{asset('css/log_in.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<main>

    <form method="POST" action="{{route('store_login')}}">
        @csrf


        <div class="user">
            <input type="email" name=email   placeholder="Email">
        </div>
        @error('email')
        {{ $message }}
        @enderror
        <div class="pass">
            <input type="password" name="password"  placeholder="Password">
        </div>
        @error('password')
        {{ $message }}

        @enderror
        <div class="forgot"><a href=""> Forgot Password?</a></div>

        <button class="submit" name="submit" type="submit">Login</button>



        <div class="member">
        Not a member? <a href="sign_up.html">Signup</a>
        </div>

    </form>

</main>

<footer>
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
