<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IUT ASSISTANT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Inha University in Tashkent (IUT) is a branch of Korean Inha University located in Tashkent, Uzbekistan."/>
    <meta name="author" content="INHA UNIVERSITY STUDENTS">

    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}"/>
    <link rel="stylesheet" href="{{asset('fonts/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.def.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>

  <body style="background-color: #333333;">
  
  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar py-3" role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-11 col-xl-2">
            <h1 class="mb-0"><a href="{{route('index')}}" class="text-white h2 mb-0">IUT</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                @guest
                  @if (Route::has('register'))
                    <li><a href="{{route('register')}}">Register</a></li>
                  @endif
                    @else
                      <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ url('/dashboard') }}">
                            Dashboard
                          </a>
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                        </div>
                      </li>
                @endguest
              </ul>
            </nav>
          </div>
          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" id="overflowOff" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>
      </header>
    </div>
   
    <div class="site-blocks-cover overlay" style="background-image:
     url({{asset('images/main_background.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center"> 
          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">AUTHENTIC ATTENDANCE IN ONE CLICK!</h1>
             @guest
                 <p><a href="#verifyPage" class="btn btn-primary py-3 px-5 text-white">Get Started!</a></p>
                 @else
                  <p><a href="{{ url('/dashboard') }}" class="btn btn-primary py-3 px-5 text-white">Dashboard</a></p>
             @endguest
          </div>
        </div>
      </div>
    </div>  
    

    <div class="container">
      <div class="row align-items-center no-gutters align-items-stretch overlap-section">
        <div class="col-md-4">
          <div class="feature-1 pricing h-100 text-center">
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 489.418 489.418" style="enable-background:new 0 0 489.418 489.418;" xml:space="preserve" width="40px" height="40px" class=""><g><g><path d="M244.709,389.496c18.736,0,34.332-14.355,35.91-33.026l24.359-290.927c1.418-16.873-4.303-33.553-15.756-46.011   C277.783,7.09,261.629,0,244.709,0s-33.074,7.09-44.514,19.532C188.74,31.99,183.022,48.67,184.44,65.543l24.359,290.927   C210.377,375.141,225.973,389.496,244.709,389.496z" data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff"/><path d="M244.709,410.908c-21.684,0-39.256,17.571-39.256,39.256c0,21.683,17.572,39.254,39.256,39.254   s39.256-17.571,39.256-39.254C283.965,428.479,266.393,410.908,244.709,410.908z" data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff"/></g></g></svg>
            </div>
            <h2 class="my-4 heading">Warning!</h2>
            <p style="color: rgba(255, 255, 255, 0.6);">Logging in or registering is strictly confined to IUT professors and VIP. Students are not eligible for this procedure. To get accurate instructions follow the link below.</p>
            <a href="{{route('about')}}" class="special__anchors">Learn more</a>
          </div>
        </div>

        @guest
<!--------------------------IF NOT AUTHENTICATED------------------------------->
        <div class="col-md-4">
          <div class="free-quote bg-dark h-100">
            <h2 class="my-4 heading  text-center">Sign in</h2>
            <form method="POST" action="{{ route('login') }}">
                 @csrf
              <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input type="text" class="form-control btn-block
                {{ $errors->has('email') ? ' is-invalid' : '' }}"
                 id="fq_email" name="email" placeholder="Enter Email"value="{{ old('email') }}" required autofocus>
                 @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                   <strong>{{ $errors->first('email') }}</strong>
                    </span>
                 @endif
              </div>
              <div class="form-group mb-4">
                <label for="password">{{ __('Password') }}</label>
                <input type="password" class="form-control btn-block
                {{ $errors->has('password') ? ' is-invalid' : '' }}" 
                id="fq_name" name="password" placeholder="Enter password"required>
                @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                   </span>
                @endif
              </div>

              <div class="form-group">
                <input type="submit" class="btn btn-primary text-white py-2 px-4 btn-block" value="sign in">  
              </div>
                
            </form>
          </div>
        </div>
        @else
<!----------------------------ELSE Authenticated----------------------------------->
        <div class="col-md-4">
          <div class="free-quote bg-dark h-100">
            <h2 class="my-4 heading  text-center">Welcome!</h2>
            <h2 class="my-4 heading  text-center">{{auth()->user()->name}}</h2>
            <?php
              $count=App\TClass::where('teacher_id',auth()->user()->id)->count();
            ?>
              <div class="form-group">
                <h4 class="text-center">Number of classes : {{$count}}</h4>
                <h4 class="text-center">Date : <?php echo date('d-m-Y'); ?></h4>
                <br>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                     @csrf
                   <input type="submit" class="btn btn-primary text-white py-2 px-4 btn-block" value="logout" name="logout">  
                </form>
               
              </div>
                <div class="form-group mb-4"> </div>
           </div>
         </div>
        @endguest
<!----------------------------------------------------------------------------->
        <div class="col-md-4">
          <div class="feature-3 pricing h-100 text-center">
            <div class="icon">
              <span class="icon-phone"></span>
            </div>
            <h2 class="my-4 heading">Want to know more?</h2>
            <p style="color: rgba(255, 255, 255, 0.6);">Regarding inquiries and suggestions, you are more than welcome to contact us through the link provided below.</p>
            <a href="{{route('contact')}}" class="special__anchors">Contact us</a>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>This website is meant to serve the good. Developed by the Students of INHA UNIVERSITY in TASHKENT. </br>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

  
    <div class="verifyPage" id="verifyPage">
      <div class="verifyPage-inner">
        <div class="verifyPage__photo">
          <img src="{{asset('images/form_pic.jpg')}}" alt="">
        </div>
        <div class="verifyPage__text">
          <h1>Verify your Attendance</h1>
          {{Form::open(['action'=>'AttendanceController@activate','method'=>'POST','id'=>'verify'])}}
          
              <div class="verifyPage__input form_1">
                <input type="text" name="st_id" placeholder="Student ID" required/>
                <label for="st_id">Student ID</label>
              </div>
              <div class="verifyPage__input form_2">
                <input type="text" name="password" placeholder="Code" required/>
                <label for="password">Code</label>
              </div>
              <div class="verify__btn">
                  <button type="submit" form="verify" value="submit" >SUBMIT</button>
              </div>
              {{Form::close()}}
        </div>
        <a class="verifyPage__close" href="#">X</a>
      </div>
    </div>

    <div class="verifyPage" id="registerPage">
        <div class="verifyPage-inner">
          <div class="verifyPage__photo">
            <img src="{{asset('images/form_pic.jpg')}}" alt="">
          </div>
          <div class="verifyPage__text">
            <h1>Register</h1>
            <form action="{{ route('register') }}"method="POST"  id="register">
              @csrf
              

               <div class="verifyPage__input form">
                  <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus/>
                  <label for="name">Name</label>

                </div>

                <div class="verifyPage__input form">
                  <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required/>
                  <label for="email">E-mail</label>
                 
                </div>
                <div class="verifyPage__input form">

                  <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password" required/>
                  <label for="password">Password</label>


                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="verifyPage__input form">
                  <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm password" required/>
                  <label for="password-confirm">Confirm Password</label>

                 
                </div>

                <div class="verify__btn">
                    <button type="submit" form="register" value="submit">SUBMIT</button>
                </div>
            </form>
          </div>
          <a class="verifyPage__close" href="#">X</a>
        </div>
      </div>

  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('js/jquery-ui.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>

  <script src="{{asset('js/main.js')}}"></script>

  </body>
</html>