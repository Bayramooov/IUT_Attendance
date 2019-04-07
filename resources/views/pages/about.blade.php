<!DOCTYPE html>
<html lang="en">
    <head>
        <title>IUT ASSISTANT | About</title>
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
        <link rel="stylesheet" href="{{asset('css/owl.theme.def.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('css/aos.css')}}">
        <link rel="stylesheet" href="css/style.css">
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
                  <li class="active"><a href="{{route('about')}}">About</a></li>
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
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </header>
    </div>

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url({{asset('images/bg_about.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">About Us</h1>
            <p class="breadcrumb-custom"><a href="{{route('index')}}">Home</a> <span class="mx-2">&gt;</span> <span>About</span></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          
          <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
            <img src="{{asset('images/img_1.jpg')}}" alt="Image" class="img-fluid rounded">
          </div>

          <div class="col-md-6 order-md-1" data-aos="fade">
            <div class="text-left pb-1 border-primary mb-4">
              <h2 class="text-primary">Our Website</h2>
            </div>
            <p>Our website is designed to provide opportunity for every university, school or college to have confidential and authentic attendance control system. The main feature of this website is that it doesn't require much time and effort from the user. Moreover, no special background knowledge of computer literacy is needed. User friendly interface with detailed explanation of the checking procedure makes it possible for any users whether they are teachers or students to perform the process fast and successfully.</p>
            <p class="mb-5">In addition, according to variety of gadgets used to access our website, its flexibility enables it to suit the screen of any devices.</p>
            <div class="row">
              <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                <div class="unit-4">
                  <div class="unit-4-icon mb-3 mr-4">
                    <svg height="50px" version="1.1" viewBox="-38 0 512 512.00142" width="50px"><g id="surface1"><path d="M 217.996094 158.457031 C 164.203125 158.457031 120.441406 202.21875 120.441406 256.007812 C 120.441406 309.800781 164.203125 353.5625 217.996094 353.5625 C 271.785156 353.5625 315.546875 309.800781 315.546875 256.007812 C 315.546875 202.21875 271.785156 158.457031 217.996094 158.457031 Z M 275.914062 237.636719 L 206.027344 307.523438 C 203.09375 310.457031 199.246094 311.925781 195.402344 311.925781 C 191.558594 311.925781 187.714844 310.460938 184.78125 307.523438 L 158.074219 280.816406 C 152.207031 274.953125 152.207031 265.441406 158.074219 259.574219 C 163.9375 253.707031 173.449219 253.707031 179.316406 259.574219 L 195.402344 275.660156 L 254.671875 216.394531 C 260.535156 210.527344 270.046875 210.527344 275.914062 216.394531 C 281.78125 222.257812 281.78125 231.769531 275.914062 237.636719 Z M 275.914062 237.636719 " style=" fill-rule:nonzero;fill-opacity:1;" stroke="#f89d13" fill="#f89d13"/><path d="M 435.488281 138.917969 L 435.472656 138.519531 C 435.25 133.601562 435.101562 128.398438 435.011719 122.609375 C 434.59375 94.378906 412.152344 71.027344 383.917969 69.449219 C 325.050781 66.164062 279.511719 46.96875 240.601562 9.042969 L 240.269531 8.726562 C 227.578125 -2.910156 208.433594 -2.910156 195.738281 8.726562 L 195.40625 9.042969 C 156.496094 46.96875 110.957031 66.164062 52.089844 69.453125 C 23.859375 71.027344 1.414062 94.378906 0.996094 122.613281 C 0.910156 128.363281 0.757812 133.566406 0.535156 138.519531 L 0.511719 139.445312 C -0.632812 199.472656 -2.054688 274.179688 22.9375 341.988281 C 36.679688 379.277344 57.492188 411.691406 84.792969 438.335938 C 115.886719 468.679688 156.613281 492.769531 205.839844 509.933594 C 207.441406 510.492188 209.105469 510.945312 210.800781 511.285156 C 213.191406 511.761719 215.597656 512 218.003906 512 C 220.410156 512 222.820312 511.761719 225.207031 511.285156 C 226.902344 510.945312 228.578125 510.488281 230.1875 509.925781 C 279.355469 492.730469 320.039062 468.628906 351.105469 438.289062 C 378.394531 411.636719 399.207031 379.214844 412.960938 341.917969 C 438.046875 273.90625 436.628906 199.058594 435.488281 138.917969 Z M 217.996094 383.605469 C 147.636719 383.605469 90.398438 326.367188 90.398438 256.007812 C 90.398438 185.648438 147.636719 128.410156 217.996094 128.410156 C 288.351562 128.410156 345.59375 185.648438 345.59375 256.007812 C 345.59375 326.367188 288.351562 383.605469 217.996094 383.605469 Z M 217.996094 383.605469 " style=" fill-rule:nonzero;fill-opacity:1;" stroke="#f89d13" fill="#f89d13"/></g></svg>
                  </div>
                  <div>
                    <h3>Secure</h3>
                    <p>Security is regarded as the prior aim. All the data stored and retrieved on the system is completely confidential. Moreover, students in the audiotory can varify the attandance for only themselves! System is fully secured from cheaters.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                <div class="unit-4">
                  <div class="unit-4-icon mb-3 mr-4">
                    <svg version="1.1" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 457.391 457.391" style="enable-background:new 0 0 457.391 457.391;" xml:space="preserve"><g><g><path d="M316.702,174.32l19.488,13.643c1.563,1.094,3.399,1.672,5.31,1.672c3.025,0,5.864-1.478,7.597-3.953    c2.93-4.186,1.908-9.976-2.276-12.906l-19.494-13.645c-1.563-1.093-3.398-1.672-5.304-1.672c-3.025,0-5.866,1.479-7.601,3.956    C311.493,165.601,312.515,171.39,316.702,174.32z" fill="#f89d13"/><path d="M115.893,189.635c1.91,0,3.746-0.578,5.31-1.673l19.488-13.642c4.186-2.93,5.208-8.72,2.28-12.906    c-1.734-2.476-4.575-3.955-7.599-3.955c-1.906,0-3.74,0.579-5.306,1.674l-19.493,13.643c-4.185,2.931-5.206,8.721-2.275,12.907    C110.03,188.158,112.869,189.635,115.893,189.635z" fill="#f89d13"/><path d="M322.021,96.807c1.906,0,3.741-0.581,5.306-1.677l19.494-13.644c4.183-2.929,5.203-8.719,2.274-12.906    c-1.733-2.475-4.572-3.952-7.595-3.952c-1.907,0-3.744,0.581-5.311,1.677l-19.488,13.642c-4.185,2.931-5.208,8.721-2.279,12.91    C316.156,95.33,318.997,96.807,322.021,96.807z" fill="#f89d13"/><path d="M110.573,81.487l19.49,13.641c1.567,1.098,3.402,1.679,5.308,1.679c3.026,0,5.867-1.477,7.601-3.954    c2.927-4.186,1.904-9.976-2.281-12.906l-19.489-13.642c-1.566-1.096-3.403-1.677-5.31-1.677c-3.024,0-5.863,1.479-7.595,3.952    C105.367,72.768,106.388,78.558,110.573,81.487z" fill="#f89d13"/><path d="M228.696,39.454c5.108,0,9.267-4.158,9.267-9.27V9.267c0-5.109-4.157-9.267-9.267-9.267c-5.11,0-9.267,4.157-9.267,9.267    v20.918C219.429,35.296,223.587,39.454,228.696,39.454z" fill="#f89d13"/><path d="M230.444,252.054l16.3-105.189l-17.105,3.304c-0.668,0.125-1.354,0.123-2.018-0.007l-16.973-3.237l16.407,105.13    L230.444,252.054L230.444,252.054z" fill="#f89d13"/><path d="M198.147,267.064c0,0.522,0.059,1.031,0.166,1.523c-1.862,1.395-3.072,3.609-3.072,6.113c0,2.859,4.001,4.105,3.905,6.658    c-0.1,2.551-8.271,3.971-8.271,8.613c0,4.77,8.764,5.689,8.764,8.637c0,2.938-4.398,3.85-4.398,6.905    c0,4.22,3.416,7.638,7.638,7.638h51.634c4.223,0,7.639-3.418,7.639-7.638c0-8.796-40.772-6.905-40.772-6.905    s45.137-0.107,45.137-8.637c0-8.523-47.53-8.613-47.53-8.613s43.166,0.082,43.166-6.658c0-2.504-1.21-4.719-3.072-6.113    c0.108-0.492,0.166-1.001,0.166-1.523c0-24.779,11.77-43.749,24.227-63.834c13.121-21.151,26.687-43.022,26.687-72.522    c0-44.915-36.545-81.46-81.461-81.46c-44.915,0-81.461,36.545-81.461,81.46c0,29.532,13.588,51.474,26.73,72.688    C186.4,223.477,198.147,242.445,198.147,267.064z M200.485,136.353c1.257-1.21,3.026-1.732,4.737-1.396l23.507,4.507l23.479-4.515    c1.705-0.321,3.462,0.207,4.711,1.415c1.247,1.208,1.831,2.946,1.565,4.662l-18.16,117.197c-0.403,2.607-2.648,4.53-5.286,4.53    h-12.554c-2.636,0-4.88-1.92-5.286-4.524l-18.29-117.197C198.638,139.309,199.227,137.562,200.485,136.353z" fill="#f89d13"/><path d="M196.184,393.641c-1.589-3.889-3.367-7.736-5.286-11.441c-12.563-24.272-29.815-40.471-46.504-56.137    c-4.702-4.412-10.692-11.315-17.034-18.625c-9.258-10.666-18.832-21.695-25.265-25.902c-5.829-3.809-10.592-3.914-14.16-0.312    c-5.202,5.257-3.667,15.05,4.978,31.75c5.777,11.163,14.154,24.312,23.024,38.231c1.425,2.236,2.872,4.511,4.329,6.805    c-15.709-17.182-27.246-32.807-34.344-46.52c-8.152-15.748-9.811-27.918-4.667-34.262c3.632-4.48,10.545-5.595,19.465-3.135    l1.322,0.363l-0.319-1.336c-0.165-0.69-16.648-69.36-20.13-82.357c-0.766-2.866-1.834-5.63-3.171-8.212    c-4.801-9.276-12.388-14.907-18.042-13.391c-2.729,0.734-7.223,3.835-6.631,16.398l8.583,108.402    c0.44,3.54,0.749,7.246,1.077,11.176c1.001,12.01,2.038,24.43,6.953,33.924c2.044,3.95,4.413,7.52,7.24,10.906    c5.091,6.102,19.25,20.836,34.242,36.432c14.593,15.184,29.684,30.883,35.195,37.438c4.323,5.146,8.064,10.814,11.44,17.336    c2.719,5.254,5,10.674,7.038,16.217h52.745l-0.792-2.693C211.136,433.162,204.171,413.191,196.184,393.641z" fill="#f89d13"/><path d="M397.011,169.162c-5.654-1.517-13.241,4.114-18.042,13.391c-1.338,2.582-2.405,5.346-3.171,8.212    c-3.481,12.997-19.965,81.667-20.13,82.358l-0.318,1.335l1.321-0.363c8.921-2.46,15.833-1.347,19.466,3.136    c5.144,6.344,3.484,18.514-4.667,34.26c-7.1,13.713-18.636,29.338-34.345,46.521c1.458-2.294,2.904-4.567,4.329-6.805    c8.87-13.921,17.247-27.068,23.024-38.231c8.645-16.701,10.18-26.494,4.978-31.75c-3.567-3.604-8.332-3.498-14.16,0.312    c-6.433,4.207-16.007,15.236-25.265,25.902c-6.342,7.309-12.332,14.211-17.034,18.625c-16.688,15.666-33.941,31.862-46.504,56.135    c-1.919,3.707-3.697,7.555-5.286,11.443c-7.987,19.551-14.952,39.521-21.288,61.057l-0.792,2.691h52.745    c2.038-5.543,4.319-10.963,7.038-16.215c3.376-6.521,7.117-12.191,11.44-17.336c5.511-6.557,20.603-22.256,35.194-37.439    c14.992-15.596,29.151-30.33,34.242-36.431c2.827-3.388,5.196-6.956,7.24-10.907c4.915-9.494,5.952-21.912,6.953-33.923    c0.329-3.93,0.637-7.636,1.077-11.176l8.583-108.402C404.235,172.997,399.74,169.897,397.011,169.162z" fill="#f89d13"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                  </div>
                  <div>
                    <h3>More Efficient</h3>
                    <p>It's difficult for foreign Prefessors to read out unknown names of each student. All what teachers have to do is to log in, click the particular class and click the START button. That's all! Attendance has been made more efficient, fair and fun in our system.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  
    <div class="site-section bg-image overlay" 
    style="background-image: url({{asset('images/hero_bg_4.jpg')}});">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary" data-aos="fade">How To Use</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <div class="how-it-work-item">
              <span class="number">1</span>
              <div class="how-it-work-body">
                <h2>Register & create Classes (For Staff)</h2>
                <p class="mb-5">All the data including students names, ID numbers and groups is already stored by developers. Teachers just need to register (Input name, email and set password) and arrange the section of groups. Then, all this data will be saved in the system in this specific teacher's profile. It has been made as easy as possible for the user to carry out the process of checking.</p>
                <ul class="ul-check list-unstyled white">
                  <li class="text-white">Register & Sign in</li>
                  <li class="text-white">Arrange your section of groups</li>
                  <li class="text-white">Leave your data safe and secure!</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <div class="how-it-work-item">
              <span class="number">2</span>
              <div class="how-it-work-body">
                <h2>Start & Generate a Code (For Staff)</h2>
                <p class="mb-5">In the second step, after logging into the profile and selecting the particular section, teachers should click the button "Start" to generate random password for students. Then, what has to be done is to wait few seconds while verifying process ends. Finally, all the information collected from students will be stored to the system and ready to use.</p>
                <ul class="ul-check list-unstyled white">
                  <li class="text-white">Choose your particular Section</li>
                  <li class="text-white">Click the button "Start"</li>
                  <li class="text-white">Enjoy the Lesson!</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
            <div class="how-it-work-item">
              <span class="number">3</span>
              <div class="how-it-work-body">
                <h2>Submit & Verify (For Students)</h2>
                <p class="mb-5">The system is absolutely easy and no need for students to Register & Sign in. Students' task is fairly simple, to click the "Let's get Started" button and input (immediately!) their ID and the PASSWORD generated randomly by the system and shown on the screen. The input details will be successfully saved in the system straight away without any excuses.</p>
                <ul class="ul-check list-unstyled white">
                  <li class="text-white">Input your Student ID</li>
                  <li class="text-white">Input the generated code.</li>
                  <li class="text-white">Enjoy the Lesson!</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section border-bottom">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary" data-aos="fade">Our Team</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <div class="person">
              <img src="{{asset('images/sobirjon_s.jpg')}}" alt="Image" class="img-fluid rounded mb-5">
              <h3>Sobirjon Sadullaev</h3>
              <p class="position text-muted">Back-end dev.</p>
              <p class="mb-4">Innovative, results-oriented and meticuous Web Developer with full of ambitions. I'm Junior level with an experience in Back-end development. Professional coder in MySQL & PHP and full of innovative ideas in IT sphere. I have high potential to create cutting-edge web-projects.</p>
              <ul class="ul-check list-unstyled">
                <li>20 y.o.</li>
                <li>IUT Freshman</li>
                <li>Student ID: U1810054</li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <div class="person">
              <img src="{{asset('images/sardor_b.jpg')}}" alt="Image" class="img-fluid rounded mb-5">
              <h3>Sardor Bayramov</h3>
              <p class="position text-muted">UX & UI Designer, Front-end Dev.</p>
              <p class="mb-4">Leading front-end developer and UX & UI Designer with full of ambition. Although I have less experience, I have already made attractive Highly designed websites using HTML5, CSS3, JavaScript and its frameworks. Capacity to work in a team and create effecient friendly working atmosphere.</p>
              <ul class="ul-check list-unstyled">
                <li>19 y.o.</li>
                <li>IUT Freshman</li>
                <li>Student ID: U1810022</li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
            <div class="person">
              <img src="{{asset('images/lazizbek_k.jpg')}}" alt="Image" class="img-fluid rounded mb-5">
              <h3>Lazizbek Kahramonov</h3>
              <p class="position text-muted">CopyWriter, Organizer</p>
              <p class="mb-4">Has huge interest in literature, poetry and, especially, computer science. Also, I have basic skills in Front-end development. Motivational-speaker, project organiser and copywriter. I write attractive headlines with its texts. Efficient and friendly partner in teamwork.</p>
              <ul class="ul-check list-unstyled">
                <li>19 y.o.</li>
                <li>IUT Freshman</li>
                <li>Student ID: U1810021</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section border-bottom">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Reviews</h2>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="{{asset('images/person_1.jpg')}}" alt="Image" class="img-fluid mb-3">
                <p>Prof. Abhijit Tarawade</p>
              </figure>
              <blockquote>
                <p>&ldquo;I find this project a really useful tool for checking attendance as an academician with a few years of experience in the field of teaching. I hope that university will integrate this tool in its administration system and official website. What I liked most is the innovative idea created by the team and wish success and luck in their future projects and studies.&rdquo;</p>
              </blockquote>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="{{asset('images/person_2.jpg')}}" alt="Image" class="img-fluid mb-3">
                <p>Prof. Olimov Khusniddin</p>
              </figure>
              <blockquote>
                <p>&ldquo;I was really impressed by this program, created by the IUT students which can automaticly register attandance of the students. So, I think it is really efficient because within 10 to 15 seconds professors can check their students attandance online and once this time passes, students will no longer be able to register their attandance. I really like the system and I hope I am going to use it in the future.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <!-- <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="{{asset('images/person.jpg')}}" alt="Image" class="img-fluid mb-3">
                <p>Robert Spears</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="{{asset('images/person.jpg')}}" alt="Image" class="img-fluid mb-3">
                <p>Bruce Rogers</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div> -->

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