<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication</title>
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./vendor/all.css">
    <link rel="stylesheet" href="./vendor/solid.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/publication.css">
    <link rel="stylesheet" href="./public/css/footer.css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="./vendor/all.js"></script>
    <script src="./vendor/solid.js"></script>
    <script src="./public/js/type-animation.js"></script>
    <script src="./vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.js"></script>
    <script src="./public/js/publication.js"></script>
    <!--? FOR OUL CAROUSEL-->
    <link rel="stylesheet" href="./public/css/owl.carousel.min.css">
    <script src="./public/js/owl.carousel.min.js"></script>
    <script src="./public/js/owl-carousel-pub.js"></script>
    <!--?-------------------->
</head>
<body>
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
                <i class="fa-solid fa-angles-down"></i>
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
                        <i class="fa-solid fa-upload"></i>
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
                            <h3>Creation 1</h3>
                        </div>
                        <div class="event-slide">
                            <div class="slider">
                                <div class="owl-carousel owl-1">
                                    <!--? ITEM 1 -->
                                    <div class="slider-card slider-creation-1">
                                        <div>
                                            <img src="./images/publication/Pub-1.jpg">
                                        </div>
                                        <h5>Ambis Ngampus</h5>
                                    </div>
                                    <!--?--------->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--! -------------------Creation 2---------------------------->
                <div class="creation creation-2">
                    <div class="creation-bar">
                        <div class="event-slide">
                            <div class="slider">
                                <div class="owl-carousel owl-2">
                                    <div class="slider-card slider-creation-1">
                                        <div>
                                            <img src="./images/publication/Pub-2.jpg">
                                        </div>
                                        <h5>Belajar Mulu</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="creation-title">
                            <h3>Creation 2</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="third-container"></div>
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