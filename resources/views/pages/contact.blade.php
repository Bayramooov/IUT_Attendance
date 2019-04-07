<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IUT ASSISTANT | Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Inha University in Tashkent (IUT) is a branch of Korean Inha University located in Tashkent, Uzbekistan."/>
    <meta name="author" content="INHA UNIVERSITY STUDENTS">
    <link rel="shortcut icon" href="{{asset('images/icons/favicon.png')}}"/>
    <link rel="stylesheet" href="{{asset('fonts/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
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
                  <li><a href="{{route('index')}}">Home</a></li>
                  <li><a href="{{route('about')}}">About</a></li>
                  <li class="active"><a href="{{route('contact')}}">Contact</a></li>
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
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </header>
    </div>
 
  

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url({{asset('images/hero_bg_1.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">Contact Us</h1>
            <p class="breadcrumb-custom"><a href="{{route('index')}}">Home</a> <span class="mx-2">&gt;</span> <span>Contact</span></p>
          </div>
        </div>
      </div>
    </div>  

    @include('inc.messages')
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">

          <form action="{{action('PagesController@c_post')}}" method="POST" class="p-5 bg-white">
            @csrf
 <!-- {{Form::open(['action'=>['PagesController@c_post'],'method'=>'POST',
 'class'=>'p-5 bg-white'])}} -->
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" name="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" name="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" name="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" name="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  {{Form::close()}}
            <!-- </form> -->
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">9, Ziyolilar str., M.Ulugbek district, Tashkent city</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="tel:+998977771224">+99897 777-12-24</a></br><a href="tel:+998977404151">+99897 740-41-51</a></br><a href="tel:+998997040523">+99899 704-05-23</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="mailto:Sardor_Bayramov@bk.ru">Sardor_Bayramov@bk.ru</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>To get more information or to know more about our work, you can contacts us personally in the IUT campus by arranging a meeting in advance. </br></br>To learn more about INHA University in Tashkent follow the link bellow.</p>
              <p><a href="https://inha.uz" target="_blank" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p>
            </div>

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