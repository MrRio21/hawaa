

@extends('template')
@section('test')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet '>
    <link rel="stylesheet" href="{{asset('css/about_us.css')}}">
</head>

<div class="about__us">
    <div class="about__us__container">
       <h1> About Us</h1>
    </div>
</div>

<!--=== media_icons ===-->

<div class="media_icons">
   <a href="#" class="facebook" >facebook <i class='bx bxl-facebook' ></i></a>
   <a href="#" class="youtube" >youtube <i class='bx bxl-youtube' ></i></a>
   <a href="#"class="twitter" >twitter <i class='bx bxl-twitter' ></i></a>
   <a href="#" class="instagram" >instagram <i class='bx bxl-instagram' ></i></a>

</div>



<div class="vision">
   <h1>We reimagine the way the world moves for the better</h1>
   <p>Movement is what we power. It’s our lifeblood. It runs through our veins. It’s what gets us out of bed each morning. It pushes us to constantly reimagine how we can move better. For you. For all the places you want to go. For all the things you want to get. For all the ways you want to earn. Across the entire world. In real time. At the incredible speed of now.</p>
</div>

<section class="Sustainability">

   <div class="Sustainability__content">
       <div class="Sustainability__img" >
           <img src="https://www.uber-assets.com/image/upload/f_auto,q_auto:eco,c_fill,w_558,h_372/v1603308507/assets/f6/0c9607-ae68-43d5-9e88-79f3011d88ee/original/Sustainability.jpg" alt="">
       </div>

       <div class="Sustainability__text" >
           <h1>Sustainability</h1>
           <p>Hawa is committing to becoming a fully electric, zero-emission platform by 2040, with 100% of rides taking place in zero-emission vehicles, on public transit, or with micromobility. It is our responsibility as the largest mobility platform in the world to more aggressively tackle the challenge of climate change. We will do this by offering riders more ways to ride green, helping drivers go electric, making transparency a priority and partnering with NGOs and the private sector to help expedite a clean and just energy transition.</p>
       </div>
   </div>


</section>






<!--=== Our Team ===-->

<section class="team">

<div class="our_team">
<h1>OUR TEAM</h1>
<P>Meet the team - our office members:</P>
</div>


<div class="employees">

<div class="shater">
   <img class="avatar" src="/New folder/shater.jpg" alt="">
   <h3>mohamed elshater</h3>
   <p>Web Designer</p>
</div>

<div class="Younes">
   <img class="avatar" src="/New folder/Younes.jpeg" alt="">
   <h3>Ahmed Younes</h3>
   <p>Web Designer</p>
</div>

<div class="Rio">
   <img class="avatar" src="/New folder/Rio.jpeg" alt="">
   <h3>Mohamed hussien</h3>
   <p>Web Designer</p>
</div>

<div class="Fatma">
   <img class="avatar" src="" alt="">
   <h3>Fatma Ismail</h3>
   <p>Web Designer</p>
</div>

<div class="esra">
   <img class="avatar" src="" alt="">
   <h3>Essra Magdi</h3>
   <p>Web Designer</p>
</div>

</div>

</section>


<section class="Sustainability">

<div class="Sustainability__content">
<div class="Sustainability__img" >
   <img src="https://www.uber-assets.com/image/upload/f_auto,q_auto:eco,c_fill,w_558,h_372/v1554854756/assets/74/0853d5-80e4-414a-91d7-6fd0b15a136d/original/UberIM_20250-medium-%282%29.jpg" alt="">
</div>

<div class="Sustainability__text" >
   <h1>Rides and beyond</h1>
   <p>In addition to helping riders find a way to go from point A to point B, we're helping people order food quickly and affordably, removing barriers to healthcare, creating new freight-booking solutions, and helping companies provide a seamless employee travel experience. And always helping drivers and couriers earn.</p>
</div>
</div>
</section>


<section class="Sustainability">

<div class="Sustainability__content">
<div class="Sustainability__text" >
   <h1>Your safety drives us</h1>
   <p>Whether you’re in the back seat or behind the wheel, your safety is essential. We are committed to doing our part, and technology is at the heart of our approach. We partner with safety advocates and develop new technologies and systems to help improve safety and help make it easier for everyone to get around.</p>
</div>

<div class="Sustainability__img" >
   <img src="https://www.uber-assets.com/image/upload/q_auto:eco,c_fill,w_918,h_612/v1555433729/assets/13/b383de-93a1-4327-8812-91de86e3edd9/original/_background-01.svg" alt="">
</div>

</div>
</section>



<!--=== go to up ===-->

<a class="goup" href="#"><i class='bx bx-up-arrow-alt'></i></a>

@endsection


