<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himasika Store</title>
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./vendor/all.css">
    <link rel="stylesheet" href="./vendor/solid.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <!-- CSS FOR THIS PAGE-->
    <link rel="stylesheet" href="./public/css/footer.css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="./vendor/all.js"></script>
    <script src="./vendor/solid.js"></script>
    <script src="./vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.js"></script>
    <script src="./public/js/page-animation.js"></script>
</head>
<body>
    <header id="header">
      <input type="checkbox" id="checkbox-menu" />
      <label for="checkbox-menu" class="menu-more">
        <span class="fas fa-bars"></span>
      </label>
      <div class="logo-top">
        <img src="images/LOGO-HIMASIKA.jpg" />
      </div>
      <div class="menu-top">
        <ul>
          <<li><a href="{{ route('home') }}">HOME</a></li>
            <li><a href="#">CABINET</a></li>
            <li><a href="#">PROJECTS</a></li>
            <li><a href="{{ route('events') }}">EVENTS</a></li>
            <li><a href="{{ route('publications') }}">PUBLICATIONS</a></li>
            <li><a href="{{ route('store') }}">STORE</a></li>
          <li class="responsive-visibility">
            <a href="#" onclick="getLogIn()">LOG IN</a>
          </li>
        </ul>
      </div>
      <div class="login-top">
        <button onclick="getLogIn()">LOG IN</button>
      </div>
    </header>
    
    <!--* ----------------------------------- FOR LOGIN --------------------------------------------->
    <section id="popup-login">
      <section id="login-section">
        <div class="sign-up">
          <h2>Hello!</h2>
          <p>Enter your personal details and start journey with us</p>
          <div style="width: 100%; margin: auto">
            <button>Sign Up</button>
          </div>
        </div>
        <div class="sign-in">
          <div class="close-icon" onclick="getClose()">
            <span class="fas fa-times"></span>
          </div>
          <h3>Sign In</h3>
          <div class="sign-in-col">
            <div class="username">
              <p>Username</p>
              <input type="text" />
            </div>
            <div class="password">
              <p>Password</p>
              <input type="password" />
            </div>
            <div class="checkbox">
              <input type="checkbox" />
              <p>Remember Me</p>
            </div>
            <div style="margin: auto; display: flex">
              <button>Sign In</button>
            </div>
            <a href="#">Forget your password?</a>
          </div>
        </div>
      </section>
    </section>
    @yield('header')
</body>
</html>