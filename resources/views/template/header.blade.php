<!DOCTYPE html>
  <header id="header">
      <input type="checkbox" id="checkbox-menu">
      <label for="checkbox-menu" class="menu-more">
        <span class="fas fa-bars"></span>
      </label>
      <div class="logo-top">
        <img src="images/LOGO-HIMASIKA.jpg">
      </div>
      <div class="menu-top">
        <ul>
          <li><a href="{{ route('home') }}">HOME</a></li>
            <li><a href="#">CABINET</a></li>
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
          <form action="#" id="form-sign-up">
              <div class="sign-up">
                  <h2>Hello!</h2>
                  <p>This Log-in Form is for admin only, thank you.</p>
                  <div style="width: 100%; margin: auto;">
                    <button type="submit" onclick="signup()">Sign Up</button>
                  </div>
              </div>
          </form>
          <form action="/private/login" id="form-sign-in" method="POST">
              @csrf
              <div class="sign-in">
                  <div class="close-icon" onclick="getClose()">
                      <span class="fas fa-times"></span>
                  </div>
                  <h3>Sign In</h3>
                  <div class="sign-in-col">
                      <div class="username-cl">
                          <label for="username">Username</label>
                          <input id="username" value="{{Session::get('username')}}" type="text">
                      </div>
                      <div class="password-cl">
                          <label for="password">Password</label>
                          <input id="password" type="password">
                      </div>
                      <div class="checkbox-cl">
                          <input type="checkbox">
                          <p>Remember Me</p>
                      </div>
                      <div style="margin:auto; display: flex;">
                        <button name="sign-in" type="submit">Sign In</button>
                      </div>
                      <a href="#">Forget your password?</a>
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
