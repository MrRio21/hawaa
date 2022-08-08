
@extends('template')
@section('test')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hawaa</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet '>
    <link rel="stylesheet" href="{{asset('css/Hawa_home.css')}}">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->

</head>
<body>
        <!--=== Header ===-->

    <!-- <header>
        <div class="header__container">
            <a href="Hawa_home.html">
                <h1>HAWAA</h1></a>
            <ul class="nav">
                <li><a href="about_us.html">about Hawaa</a></li>
                <li><a href="sign_up.html">sign up</a></li>
                <li><a href="log_in.html">log in</a></li>
            </ul>

        </div>
    </header> -->

    <!--=== photo ===-->

    <section class="photo">
        <div class="photo__content">
            <h1>Book your ride with Hawaa.</h1>
            <h3>Safer, more reliable, and at a lower cost.</h3>
            <a href="{{route('booking')}}"><button class="photo__button"><b> Book your Driver </b></button></a>
        </div>
    </section>


        <!--=== media_icons ===-->

    <div class="media_icons">
        <a href="https://www.facebook.com/Hawaa-108659811907843/" class="facebook" >facebook <i class='bx bxl-facebook' ></i></a>
        <a href="#" class="youtube" >youtube <i class='bx bxl-youtube' ></i></a>
        <a href="#"class="twitter" >twitter <i class='bx bxl-twitter' ></i></a>
        <a href="#" class="instagram" >instagram <i class='bx bxl-instagram' ></i></a>

    </div>

    <!--=== details ===-->

    <section class="details">
        <div class="details__contents">
            <div class="details__card"><i class='bx bx-dollar-circle'></i>
                <h4>أجرة منخفضة بشكل يومي</h4>
                <p>مسافة أبعد بتكلفة أقل، وذلك بفضل أجرة حواء اليومية المنخفضة، بالإضافة إلى العروض الترويجية..</p>
            </div>

                    <!--=== details card ===-->

            <div class="details__card"><i class='bx bx-stopwatch' ></i>
                <h4>السرعة والموثوقية</h4>
                <p>مشوارك جاهز في الموعد اللي يناسبك.</p>
            </div>


            <div class="details__card"><i class='bx bx-shield-quarter bx-flip-horizontal' ></i>

                <h4>السلامة أولاً</h4>
                <p>استمتع بمزيد من راحة البال عند الركوب مع الشركاء السائقين الذين تم التحقق منهم مسبقًا، واحصلى على ميزات السلامة داخل التطبيق، بالإضافة إلى طرق الدفع الآمنة.</p>
            </div>



            <div class="details__card"><i class='bx bx-smile' ></i>
                <h4>مشاوير ترسم الابتسامة على وجهك</h4>
                <p>نتعامل مع شركائنا السائقين بشكل يتسم بالاحترام ويتيح لك الاستمتاع بمشوارك بكل هدوء.</p>
            </div>

        </div>
        <div class="details__img">
            <img src="https://www.uber-assets.com/image/upload/f_auto,q_auto:eco,c_fill,w_558,h_372/v1613520285/assets/c2/91ea9c-90d7-4c36-a740-d7844536694e/original/Cities_Home_Img2x.png" alt="">
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

            <div class="go">
                <img class="avatar" src="" alt="">
                <h3>Essra Magdi</h3>
                <p>Web Designer</p>
            </div>

        </div>

    </section>
                    <!--=== Exprss ===-->


    <section class="express">
        <h1>Customize your ride to the occasion you have.</h1>

        <div class="express__content">
            <div class="express__img" >
                <img src="https://striveme.com/img/article/17868/%D8%A7%D8%B5%D8%AF%D8%A7%D8%B1_%D8%B1%D8%AE%D8%B5%D8%A9_%D9%82%D9%8A%D8%A7%D8%AF%D8%A9_%D9%84%D9%84%D9%86%D8%B3%D8%A7%D8%A1_(1).jpg" alt="">
            </div>

            <div class="express__text" >
                <h1>Our Story</h1>
                <p>Hawa is the internet platform for the greater Middle East region. A pioneer of the region's ride-hailing economy, Hawa is expanding services across its platform to include mass transportation, delivery, and payments to become the region's everyday super app. Hawa's mission is to simplify and improve people's lives and build a lasting organization that inspires. Hawa was established in July 2022 and was acquired by Careem in 2012, and Uber in 2020. Hawa operates in over 100 cities across 14 countries and has created more than one million employment opportunities in the region.</p>
            </div>
        </div>

        <div class="express__content">
            <div class="express__text" >
                <h1>Our Leaders</h1>
                <p>Our leaders are purpose-driven and motivated to move our region forward by leveraging technology to simplify and improve lives. We are building an incredible organization that inspires people to achieve great impact at Hawa and in our communities.</p>
            </div>
            <div class="express__img" >
                <img src="https://img.freepik.com/free-photo/elegant-uber-driver-giving-taxi-ride_23-2149241751.jpg?w=2000" alt="">
            </div>

        </div>

        <div class="express__content">
            <div class="express__img" >
                <img src="https://o.aolcdn.com/images/dims3/GLOB/crop/7952x4473+0+0/resize/800x450!/format/jpg/quality/85/https://media-mbst-pub-ue1.s3.amazonaws.com/creatr-images/2020-01/63c65280-3ef6-11ea-bdec-a60a0f813dd1" alt="">
            </div>

            <div class="express__text" >
                <h1>Our mission</h1>
                <p>Our mission is to connect, empower, and support the advancement of women at Hawa. We are building a strong community of women and allies to share knowledge, provide access to leadership and mentoring, and attract and retain top talent to Hawa. Women at Hawa is open to everyone—men and women, managers and individual contributors.</p>
            </div>
        </div>
    </section>

    <!--=== Contact Us ===-->


    <section class="contact">
            <h1>do you need help?</h1>

        <div class="contact__us">
            <i class='bx bx-envelope'></i>
            <h3>Connect with us</h3>
            <a href="Hawa247@gmail.com">Hawa247@gmail.com</a>
        </div>

    </section>


                <!--=== go to up ===-->

    <a class="goup" href="#"><i class='bx bx-up-arrow-alt'></i></a>



                    <!--=== footer ===-->

    <footer>
        <!--Up Section-->
        <div class="up__section">
            <a href="#" class="f__logo">HAWA.</a>
            <ul>
                <h1>Company</h1>
                <li><a href="{{route('team')}}">Teams</a></li>
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



</body>
</html>
@endsection
