<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pizza</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicous</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="/" class="nav-link">Home</a></li>
				<li class="nav-item active"><a href="/menu-page" class="nav-link">Menu</a></li>
				<li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
				<li class="nav-item"><a href="/blogs" class="nav-link">Blog</a></li>
				<li class="nav-item"><a href="/about" class="nav-link">About</a></li>
				<li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Bizning Menumiz</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="/">Bosh sahifa</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    
		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Top Menu</h2>
            <p>Biz o'zimizning top xaridorgir Pitsalarni sizga taqdim qilayotganimizdan mamnunmiz.</p>
          </div>
        </div>
    	</div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-flex">
				@foreach ($menus as $menu)	
				
					<div class="col-lg-4 d-flex ftco-animate">
						<div class="services-wrap d-flex">
							<a href="#" class="img" style="background-image: url({{ $menu->image }});"></a>
							<div class="text p-4">
								<h3>{{ $menu->name }}</h3>
								<p>{{ $menu->description }}</p>
								<p class="price"><span>{{ $menu->price }} so'm</span> <a href="{{ route('add.to.cart', $menu->id) }}" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
							</div>
						</div>
					</div>
				@endforeach

    		</div>
    	</div>

    	<div class="container">
			<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2 class="mb-4">Bizning menumiz</h2>
					<p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
					<p class="mt-5">Ushbu ro'yxatda bizning barcha mahsulotlarimizni narxlari asosida ko'rishingiz mumkin.</p>
				</div>
			</div>
			<div class="row">
				@foreach ($menus as $menu)	
					<div class="pricing-entry d-flex ftco-animate col-md-6">
						<div class="img" style="background-image: url({{ $menu->image }});"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>{{ $menu->name }}</span></h3>
								<span class="price">{{  $menu->price }}</span>
							</div>
							<div class="d-block">
								<p>{{ $menu->description }}</p>
							</div>
						</div>
					</div>	
				@endforeach
			</div>
    	</div>
    </section>

    <section class="ftco-menu">
    	<div class="container-fluid">
			<style>
				.for-me{
					overflow: hidden;
				}
			</style>
    		<div class="row for-me d-md-flex">
	    		<div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(images/about.jpg);">
	    		</div>
	    		<div class="col-lg-8 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

						@foreach ($categories as $category)
						<a class="nav-link" id="v-pills-{{ $category->id }}-tab" data-toggle="pill" href="#v-pills-{{ $category->id }}" role="tab" aria-controls="v-pills-{{ $category->id }}" aria-selected="true">{{ $category->name }}</a>
						@endforeach						
						

					  

		              {{-- <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Burgers</a>

		              <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Pasta</a> --}}
		            </div>
		          </div>
		          <div class="col-md-6 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">
						{{-- @foreach ($products as $product) --}}
						<div class="tab-pane fade show active" id="v-pills-{{$products[0]->category_id}}" role="tabpanel" aria-labelledby="v-pills-1-tab">
						<style>
							.clear{
								overflow: hidden;
								width: 85%;

							}
							.myrow{
								display: flex;
								overflow-x: scroll;
							}

							.myrow::-webkit-scrollbar{
								/* -webkit-box-shadow: inset 0 0 6px rgba(228, 0, 0, 0.3); */
								border-radius: 10px;
								background-color: #2d2f33;
								height: 8px;
							}
							.myrow::-webkit-scrollbar-thumb{
								border-radius: 10px;
								-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
								background-color: #fac564;
								height: 5px;
							}
						</style>
						<div class="clear">
							<div class="myrow">
						  	{{-- @endforeach --}}
						 		@foreach ($pizzas as $pizza)
						  			<div class="text-center mb-3">
							  			<div class="menu-wrap" style="width: 250px">
								  			<a href="#" class="menu-img img mb-4" style="background-image: url({{ $pizza->image }});"></a>
								  		<div class="text">
									  		<h3><a href="#">{{$pizza->name}}</a></h3>
									  		<p>{{$pizza->description}}</p>
									  		<p class="price"><span>{{$pizza->price}} so'm</span></p>
									  		<p><a href="{{ route('add.to.cart', $pizza->id) }}" class="btn btn-white btn-outline-white">Add to cart</a></p>
										</div>
									</div>
								</div>
								@endforeach
							</div>
		              	</div>
						  {{-- {{$pizzas->links()}} --}}
		            </div>

					  <div class="tab-pane fade show" id="v-pills-{{$products[1]->category_id}}" role="tabpanel" aria-labelledby="v-pills-1-tab">
						<div class="clear">
						<div class="myrow">
					  {{-- @endforeach --}}
					@foreach ($drinks as $drink)
					<div class="col-md-4 text-center">
						<div class="menu-wrap" style="width: 250px">
							<a href="#" class="menu-img img mb-4" style="background-image: url({{ $drink->image }});"></a>
							<div class="text">
								<h3><a href="#">{{$drink->name}}</a></h3>
								<p>{{$drink->description}}</p>
								<p class="price"><span>{{$drink->price}} so'm</span></p>
								<p><a href="{{ route('add.to.cart', $drink->id) }}" class="btn btn-white btn-outline-white">Add to cart</a></p>
							</div>
						</div>
					</div>
					@endforeach
					</div>
					</div>
				  	</div>

					
					<div class="tab-pane fade show" id="v-pills-{{$products[2]->category_id}}" role="tabpanel" aria-labelledby="v-pills-1-tab">
					<div class="clear">
					<div class="myrow">
					  {{-- @endforeach --}}
					@foreach ($burgers as $burger)
					<div class="col-md-4 text-center">
						<div class="menu-wrap" style="width: 250px">
							<a href="#" class="menu-img img mb-4" style="background-image: url({{ $burger->image }});"></a>
							<div class="text">
								<h3><a href="#">{{$burger->name}}</a></h3>
								<p>{{$burger->description}}</p>
								<p class="price"><span>{{$burger->price}} so'm</span></p>
								<p><a href="{{ route('add.to.cart', $burger->id) }}" class="btn btn-white btn-outline-white">Add to cart</a></p>
							</div>
						</div>
					</div>
					@endforeach
					  </div>
					</div>
				  </div>
					  <div class="tab-pane fade show" id="v-pills-{{$products[3]->category_id}}" role="tabpanel" aria-labelledby="v-pills-1-tab">
						<div class="clear">
						<div class="myrow">
					  {{-- @endforeach --}}
					@foreach ($pastas as $pasta)
					<div class="col-md-4 text-center">
						<div class="menu-wrap" style="width: 250px">
							<a href="#" class="menu-img img mb-4" style="background-image: url({{ $pasta->image }});"></a>
							<div class="text">
								<h3><a href="#">{{$pasta->name}}</a></h3>
								<p>{{$pasta->description}}</p>
								<p class="price"><span>{{$pasta->price}} so'm</span></p>
								<p><a href="{{ route('add.to.cart', $pasta->id) }}" class="btn btn-white btn-outline-white">Add to cart</a></p>
							</div>
						</div>
					</div>
					@endforeach
					  </div>
						</div>
				  </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Cooked</a></li>
                <li><a href="#" class="py-2 d-block">Deliver</a></li>
                <li><a href="#" class="py-2 d-block">Quality Foods</a></li>
                <li><a href="#" class="py-2 d-block">Mixed</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>