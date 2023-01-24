<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication</title>
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/publication.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="./vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/fc56662415.js" crossorigin="anonymous"></script>
    <script src="./js/all_script.js"></script>
    <!--? FOR OUL CAROUSEL-->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/owl-carousel-pub.js"></script>
    <!--?-------------------->
</head>
<body>
    <!--HEADER-->  
    @extends('template.header')
    @section('header')
    @endsection
<!-- ------------------------------------- PUBLICATION SECTION ---------------------------------------->
    <section class="publication-section">
        <!--? Top Container ------------------------------------------>
        <div class="pub-top-container">
            <div>
                <h1>Publication</h1>
            </div>
            <button onclick="scrollWin(0,700)">
                <i class="fas fa-angle-double-down"></i>
            </button>
        </div>
        <!--? Container --------------------------------------------->
        <div class="pub-container">
            <h1>Karya Mahasiswa</h1>
            <div class="first-container">
                <div class="img-container">
                    <img src="./images/vector/creation.jpg">
                    <ul class="type-text">
                        <li><span>Karya Tulis</span></li>
                        <li><span>Video</span></li>
                        <li><span>Jurnal</span></li>
                        <li><span>Projek Sains</span></li>
                    </ul>
                    <h2><span id="type-text"></span></h2>
                </div>
                <div class="upload-container">
                    <h3>Creativity</h3>
                    <p>Let's submit your creativity here. You can submit videos, jurnal, poem, 
                        science project, etc.
                    </p>
                    <button>
                        <i class="fas fa-download"></i>
                        <p>Submit</p>
                    </button>
                </div>
            </div>
            <div class="second-container">
                <!--! --------------------Creation 1----------------------->
                <div class="creation creation-1">
                    <img src="./images/vector/book.jpg">
                    <div class="creation-bar">
                        <div class="creation-title">
                            <h3>Submitted</h3>
                        </div>
                        <div class="event-slide">
                            <div class="slider">
                                <div class="owl-carousel owl-1" id="publication-content"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FOOTER-->  
    @extends('template.footer')
    @section('footer')
    @endsection
</body>
<script src="./js/content_publication.js"></script>
</html>