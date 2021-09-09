<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>shopping | card</title>

  <!-- Font Icon -->
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css" />

  <!-- Main css -->
  <link rel="stylesheet" href="css/shopping-style.css" />
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
  <link rel="stylesheet" href="css/shopping-style.css" />
  <link rel="stylesheet" href="css/shop.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/cart.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/shop.js"></script>  
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
  
  
  <table id="cart" style="width: 60%; margin: 0 auto; margin-bottom: 50px;" class="table table-hover table-condensed">
      <thead style="color: #fac564;">
          <tr>
              <th style="width:50%">Xarid bo'limi</th>
              <th style="width:10%">Narxi</th>
              <th style="width:8%">Soni</th>
              <th style="width:22%" class="text-center">Jami narxi</th>
              <th style="width:10%"></th>
          </tr>
      </thead>
      <tbody>
          @php $total = 0 @endphp
          @if(session('cart'))
              @foreach(session('cart') as $id => $details)
                  @php $total += $details['price'] * $details['quantity'] @endphp
                  <tr style="width: 60%; margin: 0 auto; color: #fac564;" data-id="{{ $id }}">
                      <td data-th="Product">
                          <div class="row">
                              <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>
                              <div class="col-sm-9">
                                  <h4 class="nomargin">{{ $details['name'] }}</h4>
                              </div>
                          </div>
                      </td>
                      <td data-th="Price">${{ $details['price'] }}</td>
                      <td data-th="Quantity">
                          <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                      </td>
                      <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                      <td class="actions" data-th="">
                          <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i>Olib tashlash</button>
                      </td>
                  </tr>
              @endforeach
          @endif
      </tbody>
      <tfoot>
          <tr>
              <td colspan="5" style="color: #999; text-align: right;"><h3><strong>Jami ${{ $total }}</strong></h3></td>
          </tr>
          <tr>
              <td colspan="5" class="text-right">
                  <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i>Sotib olishni davom ettirish</a>
                  <button class="btn btn" style="background: none; border: 1px solid #fac564; color:#fac564; border-radius: 0px;">Buyurtmani rasmiylashtirish</button>
              </td>
          </tr>
      </tfoot>
  </table>
    
  

 
  

  <!-- loader -->
  {{-- <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg>
  </div> --}}

  <!-- JS -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="js/shopping-main.js"></script>

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

  <script type="text/javascript">
    
    $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>