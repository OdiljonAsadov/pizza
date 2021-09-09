<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>User | panel</title>

  <!-- Font Icon -->
  {{-- <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css" /> --}}

  <!-- Main css -->
  {{-- <link rel="stylesheet" href="css/user-style.css" /> --}}
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
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/user.css">
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
      <div class="container emp-profile">
        <form method="post">
          <div class="row">
            <div class="col-md-4">
              <div class="profile-img">
                <img
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog"
                  alt="ke" />
                <div class="file btn btn-lg btn-primary">
                  Change Photo
                  <input type="file" name="file" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="profile-head">
                <h5>
                  {{ $data->first_name }} {{ $data->last_name }}
                </h5>
                <h6>
                  Bizning qadrli mijozimiz
                </h6>
                <p class="proile-rating">Sziga taqdim etilgan ball : <span>8/10</span></p>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                      aria-controls="home" aria-selected="true">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                      aria-controls="profile" aria-selected="false">Timeline</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-2">
              <a type="submit" href="/edit-profil/{{Session::get('loginId')}}" class="profile-edit-btn">Edit Profil</a>
              <a type="submit" href="/logOut" class="profile-edit-btn" style="text-decoration: underline;">LogOut</a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="profile-work">
                <p>Sizning buyurtmalaringiz</p>
                <a href="/cart">Faol</a><br />
                <a href="">Tarix</a><br />
                <p>Aloqa</p>
                <a href="">Chat</a><br />
                <a href="">Shikoyatingiz</a><br />
                <a href="/contact">Biz bilan aloqa</a><br />
              </div>
            </div>
            <div class="col-md-8">
              <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="row">
                    {{-- <div class="col-md-6">
                      <label>User Id</label>
                    </div>
                    <div class="col-md-6">
                      <p>{{ $data->id }}</p>
                    </div> --}}
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Name</label>
                    </div>
                    <div class="col-md-6">
                      <p>{{ $data->first_name }}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Last Name</label>
                    </div>
                    <div class="col-md-6">
                      <p>{{ $data->last_name }}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Email</label>
                    </div>
                    <div class="col-md-6">
                      <p>{{ $data->email }}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Phone</label>
                    </div>
                    <div class="col-md-6">
                      <p>{{ $data->phone }}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Viloyat Manzil</label>
                    </div>
                    <div class="col-md-6">
                      <p>{{ $data->viloyat }}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Tuman Manzil</label>
                    </div>
                    <div class="col-md-6">
                      <p>{{ $data->tuman }}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Uy manzili</label>
                    </div>
                    <div class="col-md-6">
                      <p>{{ $data->uy }}</p>
                    </div>
                  </div>
                 
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Buyurtmalar soni</label>
                    </div>
                    <div class="col-md-6">
                      <p>10</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Faol buyurtmalar</label>
                    </div>
                    <div class="col-md-6">
                      <p>2</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Hisobingiz</label>
                    </div>
                    <div class="col-md-6">
                      <p>230</p>
                    </div>
                  </div>
                 
                
                </div>
              </div>
            </div>
          </div>
        </form>
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
  {{-- <script src="vendor/jquery/jquery.min.js"></script> --}}
  {{-- <script src="js/user-main.js"></script> --}}

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
  {{-- <script src="js/google-map.js"></script> --}}
  <script src="js/main.js"></script>
</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>