<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/events.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="./vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/owl-carousel-events.js"></script>
    <script src="./js/all_script.js"></script>
    <script src="https://kit.fontawesome.com/fc56662415.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--HEADER-->  
    @extends('template.header')
    @section('header')
    @endsection
    
    <section id="event-section">
        <div class="display-container">
            <div class="container-img">
                <img id="container-img" src="./images/events/event1.png">
            </div>
            <div class="container-text">
                <p id="container-text">
                    Lorem1 ipsum dolor sit amet, consectetur adipiscing elit, sed do 
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                    consequat.
                </p>
            </div>
        </div>
        <div id="slider-div">
            <div id="container-slide">
            <!--? ---------------------------- EVENTS PICT --------------------------------->
            </div>
        </div>
    </section>
    <!--FOOTER-->  
    @extends('template.footer')
    @section('footer')
    @endsection
</body>
<script src="./js/content_events.js"></script>
</html>