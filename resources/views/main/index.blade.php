<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pizza</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

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
    <link rel="stylesheet" href="css/cart.css">
  </head>
  <body>

		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="/"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicous</small></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span> Menu
				</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul style="display: flex; align-items:center;" class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="/" class="nav-link">Bosh sahifa</a></li>
					<li class="nav-item"><a href="/menu-page" class="nav-link">Menu</a></li>
					<li class="nav-item"><a href="/blogs" class="nav-link">Blog maqolalar</a></li>
					<li class="nav-item"><a href="/about" class="nav-link">Biz haqimizda</a></li>
					<li class="nav-item"><a href="/contact" class="nav-link">Aloqa</a></li>
					
					<button type="button" class="btn btn-info" data-toggle="dropdown">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i> Savatcha <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
					</button>
					<div class="dropdown-menu" style="width: 350px; overflow-y: scroll; height: 90vh;">
						<div class="row total-header-section">
							<div class="col-lg-6 col-sm-6 col-6">
								<i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
							</div>
							@php $total = 0 @endphp
							@foreach((array) session('cart') as $id => $details)
								@php $total += $details['price'] * $details['quantity'] @endphp
							@endforeach
							<div class="col-lg-6 col-sm-6 col-6 total-section text-right">
								<p>Jami: <span class="text-info">$ {{ $total }}</span></p>
							</div>
						</div>
						@if(session('cart'))
							@foreach(session('cart') as $id => $details)
								<div class="row cart-detail">
									<div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
										<img src="{{ $details['image'] }}" />
									</div>
									<div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
										<p>{{ $details['name'] }}</p>
										<span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Soni:{{ $details['quantity'] }}</span>
									</div>
								</div>
							@endforeach
						@endif
						<div class="row">
							<div class="col-lg-12 col-sm-12 col-12 text-center checkout">
								<a href="/cart" style="margin-top: 15px; font-size: 16px;" class="btn btn-primary btn-block">Barchasini ko'rish</a>
							</div>
						</div>
					</div>
					<style>
						.log-in{
							background: none;
							border: 1px solid #fac564;
							border-radius: 0px;
							color: #fac564;
							padding: 5px 5px !important;	
							margin-left: 10px;
						}
						.log-in:hover{
							background-color: #fac564;
							color: #2d2f33;
						}
					</style>
					@if(!Session::has('loginId')) 
					<li class="nav-item "><a class="log-in" style="padding: 5px" href="/login" class="nav-link" >Login</a></li>
					@endif
					@if(Session::has('loginId')) 
					<li class="nav-item "><a class="log-in" href="/user-profil" class="nav-link">Mening Profilim</a></li>
					@endif
				</ul>
			</div>
			</div>
		</nav>
		<!-- END nav -->

    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">
      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 ftco-animate">
            	<span class="subheading">Mazzali</span>
              <h1 class="mb-4">Italiyancha Pitsa</h1>
              <p class="mb-4 mb-md-5">Biz yangiliklar qilishdan hech ham charchamaymiz. Takrorlanmas tamlarga ega menumiz bilan tanishing</p>
              <p><a href="/contact" class="btn btn-primary p-3 px-xl-4 py-xl-3">Biz bilan aloqa</a> <a href="/menu-page" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Menu</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="images/bg_1.png" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
            	<span class="subheading">Yangicha</span>
              <h1 class="mb-4">Italiyancha Pitsa</h1>
              <p class="mb-4 mb-md-5">Qulayliklar taqdim etishda davom etamiz! Biz bilan aloqaga chiqib o'zingiz yoqtirga pitsaga buyurtma berishingiz mumkin</p>
              <p><a href="/contact" class="btn btn-primary p-3 px-xl-4 py-xl-3">Biz bilan aloqa</a> <a href="/menu-page" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Menu</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="images/bg_2.png" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Xush kelibsiz</span>
              <h1 class="mb-4">Siz xohishingizni ayting - Biz sizga tayyorlab beramiz</h1>
              <p class="mb-4 mb-md-5">Kafemizda yoqimli musiqa hamda sokinlikdan bahra oling!</p>
              <p><a href="/contact" class="btn btn-primary p-3 px-xl-4 py-xl-3">Biz bilan aloqa</a> <a href="/menu-page" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Menu</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>000 (123) 456 7890</h3>
	    						<p>Pitsa kafe</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>Toshkent shahar, Yashnobod tumani</h3>
	    						<p>Aviasozlar dahasi 3</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Haftning har kuni</h3>
	    						<p>8:00am - 23:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
	    			<ul class="social-icon">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>

	@foreach ($aboutCafes as $aboutCafe)	
		<section class="ftco-about d-md-flex">
			<div class="one-half img" style="background-image: url({{ $aboutCafe->image }});"></div>
			<div class="one-half ftco-animate">
			<div class="heading-section ftco-animate ">
			<h2 class="mb-4">Bizning <span class="flaticon-pizza">Pizza</span> Kafemizga xush kelibsiz</h2>
			</div>
			<div>
					<p>{{ $aboutCafe->description }}</p>
				</div>
			</div>
		</section>
	@endforeach


    <section class="ftco-section ftco-services">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Bizning xizmatlar</h2>
            <p>Biz siz uchun qulayliklar taqdim qilishdan hech ham charchamaymiz!</p>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Sifatli mahsulotlar</h3>
                <p>Mazzali pitsa tayyor bo'lishi uchun sifatli mahsulotlardan foydalanamiz</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-bicycle"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Qizqa vaqtda yetkazib berish</h3>
                <p>50 000(Ellik ming so'm) dan kam bo'lmagan buyurtmalarni Toshkent shaxri bo'ylab bepul yetkazib beramiz!</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
              <div class="media-body">
                <h3 class="heading">Erkin tanlov</h3>
                <p>Agar siz xohlasangiz pitsa tarkibini o'zingizga moslashtirishingiz mumkin </p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Xaridorgir Pitsalar</h2>
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

    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>


		<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-pizza-1"></span></div>
		              	<strong class="number" data-number="25">0</strong>
		              	<span>Turdagi pitsalar</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-medal"></span></div>
		              	<strong class="number" data-number="10">0</strong>
		              	<span>Erishgan yutuqlarimiz</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-laugh"></span></div>
		              	<strong class="number" data-number="1067">0</strong>
		              	<span>Ishonch bildirgan mijozlar</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-chef"></span></div>
		              	<strong class="number" data-number="90">0</strong>
		              	<span>Bizning jamoa</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
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


    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Maqolalar</h2>
            <p>Biz ushbu bo'limda yangiliklar hamda qiziqarli maqolalarni taqdim qilib boramiz</p>
          </div>
        </div>
        <div class="row d-flex">
			<div class="col-md-4 d-flex ftco-animate">
					@foreach ($blogs as $blog)
						<div class="blog-entry align-self-stretch" style="width: 300px;">
							<a href="/blog/show/{{ $blog->id }}" class="block-20" style="background-image: url({{ $blog->image }}); width: 300px;">
							</a>
							<div class="text py-4 d-block">
								<div class="meta">
								<div><a href="#">{{ $blog->date }}</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
								</div>
								<h3 class="heading mt-2"><a href="#">{{ $blog->name }}</a></h3>
								<p>{{ $blog->description }}</p>
							</div>
						</div>
					@endforeach
				</div>
        </div>
      </div>
    </section>

		
		<section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    				<div id="map"></div>
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Biz bilan aloqa</h3>
	    			<form action="/messages/add" method="post" class="appointment-form">
						{{ csrf_field() }}
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" name="first_name" id="first_name" class="form-control" placeholder="Ismingiz">
		    				</div>
	    				</div>
	    				<div class="d-me-flex">
	    					<div class="form-group">
		    					<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Familiyangiz">
		    				</div>
	    				</div>
	    				<div class="form-group">
	              <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Xabaringizni kiriting"></textarea>
	            </div>
	            <div class="form-group">
	              <input type="submit" value="Yuborish" class="btn btn-primary py-3 px-4">
	            </div>
	    			</form>
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
              <h2 class="ftco-heading-2">Biz haqimizda</h2>
              <p>Biz mijozlar fikrini inobatga olgan holda sifatga intilamiz!</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-telegram"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Eng so'nggi maqolalar</h2>
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
              <h2 class="ftco-heading-2">Xizmatlarimiz</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Mazzali pitsalar</a></li>
                <li><a href="#" class="py-2 d-block">Yetkazib berish xizmati</a></li>
                <li><a href="#" class="py-2 d-block">Sifatli mahsulotlar</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Agar savolingiz mavjud bo'lsa</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Toshkent shaxar, Yashnabod tumani, 3</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+000 (123) 456 7890</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourpizza.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">RedFox Team</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <div class="container">
  
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
  
    @yield('content')
</div>
  
@yield('scripts')

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/min.js"></script>
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

    
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
  </body>
</html>