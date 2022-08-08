@extends('template')
@section('test')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header&footer.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/team.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrab.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Template Stylesheet -->
    {{-- <link href="css/style.css" rel="stylesheet"> --}}
    {{-- <link href="css/header&footer.css" rel="stylesheet"> --}}
</head>

<body>



    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">HAWA </h6>
                <h1 class="mb-5">Our team</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="elshater.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>

                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0"> Mohamed Elshater</h5>
                            <small>information</small>
                            <!-- <h5 class="mb-0"><a class="btn btn-primary py-3 px-5 mt-2" href="">accept</a></h5>
                            <small><a class="btn btn-primary py-3 px-5 mt-2" href=""> no</a></small> -->
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="fatimaa.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Fatima</h5>
                            <small>Developer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="ahmedd.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>

                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Ahmed Younes</h5>
                            <small>Developer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 wow fadeInUp center-block" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="mo(1).jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>

                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mohamed Hussain</h5>
                            <small>Developer</small>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="esraa.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>

                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Esraa Jopran</h5>
                            <small>project Maneger</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

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
        All Right Reserved &copy; 2022
    </p>

</footer>




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
@endsection
