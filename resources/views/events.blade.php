<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.css">
     <link rel="stylesheet" href="./public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./public/css/owl.theme.default.css">
    <link rel="stylesheet" href="./vendor/all.css">
    <link rel="stylesheet" href="./vendor/solid.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/events.css">
    <link rel="stylesheet" href="./public/css/footer.css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="./vendor/all.js"></script>
    <script src="./public/vendor/solid.js"></script>
    <script src="./public/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.js"></script>
    <script src="./public/js/owl.carousel.min.js"></script>
    <script src="./public/js/owl-carousel-events.js"></script>
    <script src="./public/js/events.js"></script>
</head>
<body>
    @extends('template.header')
    @section('header')
    @endsection

    <section id="event-section">
        <div class="display-container"></div>
        <div class="container-slide">
            <!--? ---------------------------- EVENTS PICT --------------------------------->
            <div class="owl-pict" id="pict-1">
                <img src="./images/events/Owl-Carousel-2-Nedir-Ve-Nasıl-Kullanılır.jpg">
            </div>
            <div class="owl-pict" id="pict-2">
                <img src="./images/events/owl-carousel-responsive-slider.png">
            </div>
            <div class="owl-pict" id="pict-3">
                <img src="./images/events/smooth-autoplay.jpg">
            </div>
            <div class="owl-pict" id="pict-4">
                <img src="./images/events/owl-carousel.png">
            </div>
            <div class="owl-pict" id="pict-5">
                <img src="./images/events/owlCarousel.png">
            </div>
        </div>
    </section>
    <footer>
        <div class="logo-hima-bot">
            <img src="./images/LOGO-HIMASIKA.jpg">
        </div>
        <div class="logo-cabinet-bot">
            <img src="./images/logo-dinakara.png">
        </div>
        <div class="contact">
            <h5>Contact</h5>
            <div class="list-contact">
                <a href="#">Email</a>
                <a href="#">Instagram</a>
                <a href="#">LINE</a>
                <a href="#">LinkedIn</a>
            </div>
        </div>
        <div class="about-us">
            <h5>About Us</h5>
            <div class="list-about-us">
                <a href="#">Terms of Use</a>
                <a href="#">Privacy Policy</a>
            </div>
        </div>
        <div class="info-bot">
            <p>2022-2023 Cabinet
            <br>Secretariat of Himasika
            <br>Departement of Physics
            <br>Faculty of Science and Data Analytics
            <br>Sepuluh Nopember Institute of Technology
            <br>Surabaya, 60111, East Java</p>
        </div> 
    </footer>
</body>
</html>