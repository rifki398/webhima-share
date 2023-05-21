<!DOCTYPE html>
  <header id="header" class="d-flex position-fixed z-10 align-items-center">
      <input type="checkbox" id="checkbox-menu">
      <label for="checkbox-menu" class="menu-more">
        <span class="fas fa-bars"></span>
      </label>
      <div class="d-flex align-items-center" id="logo-top">
        <img src="images/LOGO-HIMASIKA.jpg">
      </div>
      <div id="menu-top" class="text-center m-auto">
        <ul class="d-flex">
          <li><a class="fw-bold text-center position-relative d-inline-block" href="{{ route('home') }}">HOME</a></li>
          <li><a class="fw-bold text-center position-relative d-inline-block" href="{{ route('home') }}">CABINET</a></li>
          <li><a class="fw-bold text-center position-relative d-inline-block" href="{{ route('events') }}">EVENTS</a></li>
          <li class="responsive-visibility">
            <a class="fw-bold" href="#" onclick="getLogIn()">LOG IN</a>
          </li>
        </ul>
      </div>
      <div id="login-top" class="position-absolute">
        <button class="fw-bold pt-2 pb-2 ps-4 pe-4" onclick="getLogIn()">LOG IN</button>
      </div>
    </header>
    <!--* ----------------------------------- FOR LOGIN --------------------------------------------->
    <section id="popup-login" class="position-fixed top-0 z-20 d-flex align-items-center justify-content-center">
      <section id="login-section" class="d-flex m-auto">
          <form action="#" id="form-sign-up">
              <div class="sign-up position-relative text-center d-flex flex-column justify-content-center align-items-center">
                  <h2 class="fw-bold position-absolute" style="top: 80px">Hello!</h2>
                  <p>This Log-in Form is for admin only, thank you.</p>
                  <div class="position-absolute" style="bottom: 80px; width:100%;">
                    <button type="submit" onclick="signup()" class="m-auto d-block fw-bold">Sign Up</button>
                  </div>
              </div>
          </form>
          <form action="/private/login" id="form-sign-in" method="POST">
              @csrf
              <div class="sign-in position-relative text-center d-flex flex-column justify-content-center align-items-center">
                  <div class="close-icon" onclick="getClose()">
                      <span class="fas fa-times position-absolute"></span>
                  </div>
                  <h3 class="fw-bold position-absolute" style="top:80px;">Sign In</h3>
                  <div class="sign-in-col">
                      <div class="username-cl d-inline-block">
                          <label for="username" class="fw-bold">Username</label>
                          <input id="username" value="{{Session::get('username')}}" type="text">
                      </div>
                      <div class="password-cl d-inline-block">
                          <label for="password" class="fw-bold">Password</label>
                          <input id="password" type="password">
                      </div>
                      <div class="position-absolute" style="bottom: 80px; width:100%;">
                        <button name="sign-in" type="submit" class="fw-bold d-block m-auto">Sign In</button>
                      </div>
                  </div>
              </div>
          </form>
      </section>
      <script>
        function signup(){
            alert('Please Contact Staff For Sign Up');
            return;
        }
    </script>
    </section>
    @yield('header')
