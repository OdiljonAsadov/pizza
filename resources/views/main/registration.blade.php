<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Odil pizza | Registration</title>

  <!-- Font Icon -->
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css" />

  <!-- Main css -->
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
  <link rel="stylesheet" href="css/animate.css" />

  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />

  <link rel="stylesheet" href="css/aos.css" />

  <link rel="stylesheet" href="css/ionicons.min.css" />

  <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
  <link rel="stylesheet" href="css/jquery.timepicker.css" />

  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/icomoon.css" />
  <link rel="stylesheet" href="css/registration-style.css" />
</head>

<body>
  <nav class="
        navbar navbar-expand-lg navbar-dark
        ftco_navbar
        bg-dark
        ftco-navbar-light
      " id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="../index.html"><span
          class="flaticon-pizza-1 mr-1"></span>Pizza<br /><small>Delicous</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/menu-page" class="nav-link">Menu</a></li>
          <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="/blogs" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="/shopping-card" class="nav-link" style="font-size: 18px;"><i class="fal fa-cart-arrow-down"></i></a></li>
          <li class="nav-item"> <a href="/registration" class="nav-link"><i class="far fa-user-circle" style="font-size: 18px;"></i></a></li>
          <li class="nav-item"> <a href="/user-profil" class="nav-link"><i class="far fa-user-circle" style="font-size: 18px;"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main">
    <div class="container">
      <div class="booking-content">
        <div class="booking-image">
          <img class="booking-img" src="images/form-img.jpg" alt="Booking Image" />
        </div>
        <div class="booking-form">
          <div id="booking-form">
            <h2>Pizza Registration!</h2>
              <form action="/user/add" method="post">
                @if (Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if (Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                {{ csrf_field() }}
                <div class="form-group form-input">
                  <input type="hidden" name="role_id" id="text" value="2" />
                  <input type="text" name="first_name" id="text" value="{{old('first_name')}}"/>
                  <label for="text" class="form-label">First name</label>
                  <span class="text-danger">@error('first_name') {{$message}} @enderror</span>
                </div>
                <div class="form-group form-input">
                  <input type="text" name="last_name" id="text" value="{{old('last_name')}}"/>
                  <label for="text" class="form-label">Last name</label>
                  <span class="text-danger">@error('last_name') {{$message}} @enderror</span>
                </div>
                <div class="form-group form-input">
                  <input type="email" name="email" id="email" value="{{old('email')}}"/>
                  <label for="email" class="form-label">Your email</label>
                  <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>
                <div class="form-group form-input">
                  <input type="number" name="phone" id="phone" value="{{old('phone')}}"/>
                  <label for="phone" class="form-label">Your phone number</label>
                  <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                </div>
                <div class="form-group form-input">
                  <input type="password" name="password" id="password" value="{{old('password')}}"/>
                  <label for="password" class="form-label">Your password</label>
                  <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>
                <div class="form-group form-input">
                  <input type="password" name="password" id="repassword" value="{{old('password')}}"/>
                  <label for="repassword" class="form-label">Retry Your password</label>
                  <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>
                <div class="form-submit">
                  <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Добавить</button>
                  <a href="/login" class="vertify-booking">Login</a>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg>
  </div>

  <!-- JS -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="js/main.js"></script>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>