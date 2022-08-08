@extends('template')
@section('main')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Registration</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet '>
    <link rel="stylesheet" href="{{asset('css/Driver_Registration.css')}}">
</head>

<main>

<!--=== Form ===-->
<form method="POST" action="{{route('store_driver')}}" enctype="multipart/form-data">
    @csrf
<h1>Driver Registration</h1>
    <!--=== Full Name & Phone ===-->
<div class="full_name">
    <input type="text" name="name"  id="full_name"  placeholder="Frist Name">
</div>

    <span style="color:red">
       @error('name')
        {{ $message }}
        @enderror
    </span>

<div>
    <input class="phone__num" type="text" name="phone" id="Phone Number"  placeholder="Enter your phone number">
</div>
<span style="color:red">
    @error('phone')
    {{ $message }}
    @enderror
</span>

    <!--=== Email & Password ===-->
<div>
    <input type="email" name="email" id="Email"  placeholder="Ex:Email@gamil.com">
</div>
<span style="color:red">
    @error('email')
    {{ $message }}
    @enderror
</span>

<div>
    <input type="password" name="password"  id="password"  placeholder="Enter your password">
</div>
<span style="color:red">
@error('password')
{{ $message }}
@enderror
</span>


        <div class="address__input">

            <!--=== Address ===-->
            <div>
                <input type="text" name="city" id="Address"  placeholder="City">
                <span style="color:red">
                @error('city')
                {{ $message }}
                @enderror
                </span>
            </div>


            <div>
                <input type="text" name="region" id="Address"  placeholder="Region">
                <span style="color:red">
                @error('region')
                {{ $message }}
                @enderror
                </span>
            </div>

         </div>


       <!--=== Files ===-->
    <div class="national__id">
        <label for=" ">Picture</label>
        <input type="file" name="img" id="selectedFile" style="display: none;" />
        <input type="button" value="Upload your Picture" onclick="document.getElementById('selectedFile').click();" />
    </div>

    <span style="color:red">
    @error('img')
    {{ $message }}
    @enderror
    </span>

        <div class="national__id">
            <label for="">Driver License:</label>
            <input type="file" name="driver_license" id="selectedFile1" style="display: none;" />
            <input type="button" value="Upload Driver License" onclick="document.getElementById('selectedFile1').click();" />
        </div>

        <span style="color:red">
        @error('driver_license')
        {{ $message }}
        @enderror
        </span>

            <div class="national__id">
                <label>Car Picture:</label>
                <input type="file" name="carlicense" id="selectedFile2" style="display: none;" />
                <input type="button" value="Upload Car Picture" onclick="document.getElementById('selectedFile2').click();" />
            </div>

        <span style="color:red">
        @error('carlicense')
        {{ $message }}
        @enderror
        </span>
            
            <div class="national__id">
                <label for=" ">National ID:</label>
                <input type="file" name="NID" id="selectedFile3" style="display: none;" />
                <input type="button" value="Upload your National ID" onclick="document.getElementById('selectedFile3').click();" />
            </div>

            <span style="color:red">
            @error('NID')
            {{ $message }}
            @enderror
            </span>
            

            <!--=== Submit Button ===-->
        <input class="submit" type="submit" name="submit" value="Registration">
    </form>

</main>


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

            <!-- <ul>
                <h1>Company</h1>
                <li><a href="#">Teams</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Support</a></li>
            </ul> -->

            <!-- <ul>
                <h1>About</h1>
                <li><a href="#">Team & company</a></li>
                <li><a href="#">Location</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Our Services</a></li>
            </ul> -->

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
