<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quickeat - index</title>
  <link rel="icon" href="assets/cssss/assets/img/fav-icon.png">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- owl carousel -->
  <link rel="stylesheet" href="assets/cssss/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/cssss/assets/css/owl.theme.default.min.css">
  <!-- nice-select -->
  <link rel="stylesheet" href="assets/cssss/assets/css/nice-select.css">
  <!-- aos -->
  <link rel="stylesheet" href="assets/cssss/assets/css/aos.css">
  <!-- style -->
  <link rel="stylesheet" href="assets/cssss/assets/css/style.css">
  <!-- responsive -->
  <link rel="stylesheet" href="assets/cssss/assets/css/responsive.css">
	<!-- color -->
  <link rel="stylesheet" href="assets/cssss/assets/css/color.css">


	<!-- Font Awesome 5 -->
	<script src="https://kit.fontawesome.com/27a041baf1.js" crossorigin="anonymous"></script>
</head>
<body class="menu-layer">

	<!-- loader start-->
	<div class="page-loader">
		<div class="wrapper">
	        <div class="circle"></div>
	        <div class="circle"></div>
	        <div class="circle"></div>
	        <div class="shadow"></div>
	        <div class="shadow"></div>
	        <div class="shadow"></div>
	        <span>Loading</span>
	    </div>
	</div>
	<!-- loader end-->

	<!-- header -->
	<header>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-2">
					<div class="header-style">
						<a href="index.html">
							<svg xmlns="http://www.w3.org/2000/svg" width="163" height="38" viewBox="0 0 163 38">
  <g id="Logo" transform="translate(-260 -51)">
    <g id="Logo-2" data-name="Logo" transform="translate(260 51)">
      <g id="Elements">
        <path id="Path_1429" data-name="Path 1429" d="M315.086,140.507H275.222v-.894c0-11.325,8.941-20.538,19.933-20.538s19.931,9.213,19.931,20.538Z" transform="translate(-270.155 -115.396)" fill="#f29f05"/>
        <path id="Path_1430" data-name="Path 1430" d="M301.13,133.517a1.488,1.488,0,0,1-1.394-.994,11.361,11.361,0,0,0-10.583-7.54,1.528,1.528,0,0,1,0-3.055,14.353,14.353,0,0,1,13.37,9.527,1.541,1.541,0,0,1-.875,1.966A1.444,1.444,0,0,1,301.13,133.517Z" transform="translate(-264.176 -113.935)" fill="#fff"/>
        <path id="Path_1431" data-name="Path 1431" d="M297.343,146.544a14.043,14.043,0,0,1-13.837-14.211h2.975a10.865,10.865,0,1,0,21.723,0h2.975A14.043,14.043,0,0,1,297.343,146.544Z" transform="translate(-266.247 -108.544)" fill="#363636"/>
        <path id="Path_1432" data-name="Path 1432" d="M302.183,132.519a7.064,7.064,0,1,1-14.122,0Z" transform="translate(-264.027 -108.446)" fill="#363636"/>
        <path id="Path_1433" data-name="Path 1433" d="M320.332,134.575H273.3a1.528,1.528,0,0,1,0-3.055h47.033a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-271.815 -108.923)" fill="#f29f05"/>
        <path id="Path_1434" data-name="Path 1434" d="M289.154,123.4a1.507,1.507,0,0,1-1.487-1.528v-3.678a1.488,1.488,0,1,1,2.975,0v3.678A1.508,1.508,0,0,1,289.154,123.4Z" transform="translate(-264.154 -116.667)" fill="#f29f05"/>
        <path id="Path_1435" data-name="Path 1435" d="M284.777,138.133H275.3a1.528,1.528,0,0,1,0-3.055h9.474a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-270.84 -107.068)" fill="#363636"/>
        <path id="Path_1436" data-name="Path 1436" d="M284.8,141.691h-6.5a1.528,1.528,0,0,1,0-3.055h6.5a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-269.379 -105.218)" fill="#363636"/>
      </g>
    </g>
    <text id="Quickeat" transform="translate(320 77)" fill="#363636" font-size="20" font-family="Poppins" font-weight="700"><tspan x="0" y="0">QUICK</tspan><tspan y="0" fill="#f29f05">EAT</tspan></text>
  </g>
</svg>

						</a>
						<div class="extras bag">
	           				<a href="javascript:void(0)" class="menu-btn">
		                       <i class="fa-solid fa-bag-shopping"></i>
		                   </a>
		                   <div class="bar-menu">
		                   	<i class="fa-solid fa-bars"></i>
		                   </div>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<nav class="navbar">
				      <ul class="navbar-links">
				        <li class="navbar-dropdown active">
				          <a href="index.html">Home</a>
				        </li>
				        <li class="navbar-dropdown">
				          <a href="https://www.itenas.ac.id/">Itenas</a>
				        </li>
				      </ul>
				    </nav>
				</div>
				<div class="col-lg-3">
					<div class="extras bag">
           <a href="javascript:void(0)" id="desktop-menu" class="menu-btn">

							
                         <a href="<?php echo e(route('login')); ?>" class="button button-2">Login</a>
					</div>
				</div>
			 <div class="menu-wrap">
               <div class="menu-inner ps ps--active-x ps--active-y">
                 <span class="menu-cls-btn"><i class="cls-leftright"></i><i class="cls-rightleft"></i></span>
                 <div class="checkout-order">
						<div class="title-checkout">
							<h2>My Orders</h2>
						</div>
						<div class="banner-wilmington">
							<img alt="logo" src="https://via.placeholder.com/50x50">
							<h6>Kennington Lane Cafe</h6>
						</div>
						<ul>
							<li class="price-list">
							<i class="closeButton fa-solid fa-xmark"></i>
							<div class="counter-container">
								<div class="counter-food">
									<img alt="food" src="https://via.placeholder.com/100x67">
									<h4>Pasta, kiwi and sauce chilli</h4>
								</div>
								<h3>$39</h3>
							</div>
							<div class="price">
									<div>
					              		<h2>$39</h2>
					              		<span>Sum</span>
					              	</div>
					              		<div>
						             	 	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
											<span>Quantity</span>
										</div>
										</div>
							</li>
							<li class="price-list">
							<i class="closeButton fa-solid fa-xmark"></i>
							<div class="counter-container">
								<div class="counter-food">
									<img alt="food" src="https://via.placeholder.com/100x67">
									<h4>Rice with shrimps and kiwi</h4>
								</div>
								<h3>$49</h3>
							</div>
							<div class="price">
									<div>
					              		<h2>$49</h2>
					              		<span>Sum</span>
					              	</div>
					              		<div>
						             	 	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
											<span>Quantity</span>
										</div>
										</div>
							</li>
						</ul>
						<div class="totel-price">
							<span>Total order:</span>
							<h5>$137</h5>
						</div>
						<div class="totel-price">
							<span>To pay:</span>
							<h2>$137</h2>
						</div>
						<button class="button-price">Checkout</button>

					</div>
            	 </div>
         	 </div>
         	 <div class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">


            <div class="res-log">
            	<a href="index.html">
              		<svg xmlns="http://www.w3.org/2000/svg" width="163" height="38" viewBox="0 0 163 38">
<g id="Logo" transform="translate(-260 -51)">
<g id="Logo-2" data-name="Logo" transform="translate(260 51)">
<g id="Elements">
<path id="Path_1429" data-name="Path 1429" d="M315.086,140.507H275.222v-.894c0-11.325,8.941-20.538,19.933-20.538s19.931,9.213,19.931,20.538Z" transform="translate(-270.155 -115.396)" fill="#f29f05"/>
<path id="Path_1430" data-name="Path 1430" d="M301.13,133.517a1.488,1.488,0,0,1-1.394-.994,11.361,11.361,0,0,0-10.583-7.54,1.528,1.528,0,0,1,0-3.055,14.353,14.353,0,0,1,13.37,9.527,1.541,1.541,0,0,1-.875,1.966A1.444,1.444,0,0,1,301.13,133.517Z" transform="translate(-264.176 -113.935)" fill="#fff"/>
<path id="Path_1431" data-name="Path 1431" d="M297.343,146.544a14.043,14.043,0,0,1-13.837-14.211h2.975a10.865,10.865,0,1,0,21.723,0h2.975A14.043,14.043,0,0,1,297.343,146.544Z" transform="translate(-266.247 -108.544)" fill="#363636"/>
<path id="Path_1432" data-name="Path 1432" d="M302.183,132.519a7.064,7.064,0,1,1-14.122,0Z" transform="translate(-264.027 -108.446)" fill="#363636"/>
<path id="Path_1433" data-name="Path 1433" d="M320.332,134.575H273.3a1.528,1.528,0,0,1,0-3.055h47.033a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-271.815 -108.923)" fill="#f29f05"/>
<path id="Path_1434" data-name="Path 1434" d="M289.154,123.4a1.507,1.507,0,0,1-1.487-1.528v-3.678a1.488,1.488,0,1,1,2.975,0v3.678A1.508,1.508,0,0,1,289.154,123.4Z" transform="translate(-264.154 -116.667)" fill="#f29f05"/>
<path id="Path_1435" data-name="Path 1435" d="M284.777,138.133H275.3a1.528,1.528,0,0,1,0-3.055h9.474a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-270.84 -107.068)" fill="#363636"/>
<path id="Path_1436" data-name="Path 1436" d="M284.8,141.691h-6.5a1.528,1.528,0,0,1,0-3.055h6.5a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-269.379 -105.218)" fill="#363636"/>
</g>
</g>
<text id="Quickeat" transform="translate(320 77)" fill="#363636" font-size="20" font-family="Poppins" font-weight="700"><tspan x="0" y="0">QUICK</tspan><tspan y="0" fill="#f29f05">EAT</tspan></text>
</g>
</svg>
            	</a>
          	</div>
			<ul>

				  <li><a href="index.html">Home</a>
                   </li>

                  <li><a href="https://www.itenas.ac.id/">Itenas</a></li>

                </ul>

          <a href="JavaScript:void(0)" id="res-cross"></a>
      </div>
		</div>
	   </div>
  </header>
  <!-- hero-section -->
	<section class="hero-section gap" style="background-image: url(assets/cssss/assets/img/background-1.png);">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="restaurant">
						<h1>The Best restaurants
							in your  home</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						<div class="nice-select-one">
							<select class="nice-select Advice">
							  <option>Choose a Restaurant</option>
							  <option>Choose a Restaurant 1</option>
							  <option>Choose a Restaurant 2</option>
							  <option>Choose a Restaurant 3</option>
							  <option>Choose a Restaurant 4</option>
						</select>
						<a href="#" class="button button-2">Order Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6" data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="img-restaurant">
						<img alt="man" src="https://via.placeholder.com/680x720">
						<div class="wilmington">
							<img alt="img" src="https://via.placeholder.com/90x90">
							<div>
								<p>Restaurant of the Month</p>
								<h6>The Wilmington</h6>
								<div>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star-half-stroke"></i>
								</div>
							</div>
						</div>
						<div class="wilmington location-restaurant">
							<i class="fa-solid fa-location-dot"></i>
							<div>
								<h6>12 Restaurant</h6>
								<p>In Your city</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- works-section -->
	<section class="works-section gap no-top">
		<div class="container">
			<div class="hading" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
				<h2>How it works</h2>
				<p>Magna sit amet purus gravida quis blandit turpis cursus. Venenatis tellus in<br> metus vulputate eu scelerisque felis.</p>
			</div>
			<div class="row ">
				<div class="col-lg-4 col-md-6 col-sm-12" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="work-card">
						<img alt="img" src="https://via.placeholder.com/300x154">
						<h4><span>01</span>  Select Restaurant</h4>
						<p>Non enim praesent elementum facilisis leo vel fringilla. Lectus proin nibh nisl condimentum id. Quis varius quam quisque id diam vel.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="work-card">
						<img alt="img" src="https://via.placeholder.com/300x154">
						<h4><span>02</span>  Select menu</h4>
						<p>Eu mi bibendum neque egestas congue quisque. Nulla facilisi morbi tempus iaculis urna id volutpat lacus. Odio ut sem nulla pharetra diam sit amet.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12" data-aos="flip-up"  data-aos-delay="400" data-aos-duration="500">
					<div class="work-card">
						<img alt="img" src="https://via.placeholder.com/300x154">
						<h4><span>03</span>  Wait for delivery</h4>
						<p>Nunc lobortis mattis aliquam faucibus. Nibh ipsum consequat nisl vel pretium lectus quam id leo. A scelerisque purus semper eget. Tincidunt arcu non.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- best-restaurants -->
	<section class="best-restaurants gap" style="background:#fcfcfc">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
						<div class="city-restaurants">
							<h2>12 Best Restaurants in Your City</h2>
							<p>Magna sit amet purus gravida quis blandit turpis cursus. Venenatis tellus in metus vulputate.</p>
						</div>
				</div>
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="logos-card">
						<img alt="logo" src="https://via.placeholder.com/100x100">
							<div class="cafa">
								<h4><a href="restaurant-card.html">Kennington Lane Cafe</a></h4>
								<div>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<div class="cafa-button">
										<a href="#">american</a>
										<a href="#">steakhouse</a>
										<a class="end" href="#">seafood</a>
								</div>
								<p>Non enim praesent elementum facilisis leo vel fringilla. Lectus proin nibh nisl condimentum id. Quis varius quam quisque id diam vel.</p>
							</div>
					</div>
				</div>
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="400" data-aos-duration="500">
					<div class="logos-card two">
						<img alt="logo" src="https://via.placeholder.com/100x100">
							<div class="cafa">
								<h4><a href="restaurant-card.html">The Wilmington</a></h4>
								<div>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>
								<div class="cafa-button">
										<a href="#">american</a>
										<a href="#">steakhouse</a>
										<a class="end" href="#">seafood</a>
								</div>
								<p>Vulputate enim nulla aliquet porttitor lacus luctus. Suscipit adipiscing bibendum est ultricies integer. Sed adipiscing diam donec adipiscing tristique.</p>
							</div>
					</div>
				</div>
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="500" data-aos-duration="600">
					<div class="logos-card three">
						<img alt="logo" src="https://via.placeholder.com/100x100">
							<div class="cafa">
								<h4><a href="restaurant-card.html">Kings Arms</a></h4>
								<div>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star-half-stroke"></i>
								</div>
								<div class="cafa-button">
										<a href="#">healthy</a>
										<a href="#">steakhouse</a>
										<a class="end" href="#">vegetarian</a>
								</div>
								<p>Tortor at risus viverra adipiscing at in tellus. Cras semper auctor neque vitae tempus. Dui accumsan sit amet nulla facilisi. Sed adipiscing diam donec adipiscing tristique.</p>
							</div>
					</div>
				</div>
			</div>
			<div class="button-gap">
				<a href="restaurants.html" class="button button-2 non">See All<i class="fa-solid fa-arrow-right"></i></a>
			</div>
		</div>
	</section>
	<!-- your-favorite-food -->
	<section class="your-favorite-food gap" style="background-image: url(assets/cssss/assets/img/background-1.png);">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="food-photo-section">
						<img alt="img" src="https://via.placeholder.com/676x700">
						<a href="#" class="one"><i class="fa-solid fa-burger"></i>Burgers</a>
						<a href="#" class="two"><i class="fa-solid fa-cheese"></i>Steaks</a>
						<a href="#" class="three"><i class="fa-solid fa-pizza-slice"></i>Pizza</a>
					</div>
				</div>
				<div class="col-lg-6 offset-lg-1" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
					<div class="food-content-section">
						<h2>Food from your favorite restaurants
								to your table</h2>
								<p>Pretium lectus quam id leo in vitae turpis massa sed. Lorem donec massa sapien faucibus et molestie. Vitae elementum curabitur vitae nunc.</p>
								<a href="#" class="button button-2">Order Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- counters-section -->
	<section class="counters-section">
		<div class="container">
			<div class="row align-items-center">
					<div class="col-lg-3 col-md-6 col-sm-12" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
						<div>
							<h2>Service shows good taste.</h2>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
						<div class="count-time">
								<h2 class="timer count-title count-number" data-to="976" data-speed="2000">976</h2>
									<p>Satisfied<br>
									Customer</p>
						</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12" data-aos="flip-up"  data-aos-delay="400" data-aos-duration="500">
						<div class="count-time">
								<h2 class="timer count-title count-number" data-to="12" data-speed="2000">12</h2>
									<p>Best<br>
											Restaurants</p>
						</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12" data-aos="flip-up"  data-aos-delay="500" data-aos-duration="600">
						<div class="count-time sp">
								<h2 class="timer count-title count-number" data-to="1" data-speed="2000">1</h2>
								<span>k+</span>
									<p>Food<br>
											Delivered</p>
						</div>
				</div>
			</div>
		</div>
	</section>
	<!-- reviews-sections -->
	<section class="reviews-sections gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-12" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="reviews-content">
						<h2>What customers say about us</h2>
						<div class="custome owl-carousel owl-theme">
							<div class="item">
								<h4>"Dapibus ultrices in iaculis nunc sed augue lacus viverra vitae. Mauris a diam maecenas sed enim. Egestas diam in arcu cursus euismod quis. Quam quisque id diam vel".</h4>
								<div class="thomas">
									<img alt="girl" src="https://via.placeholder.com/70x70">

									<div>
										<h6>Thomas Adamson</h6>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
									</div>
								</div>
						</div>
						<div class="item">
								<h4>"Dapibus ultrices in iaculis nunc sed augue lacus viverra vitae. Mauris a diam maecenas sed enim. Egestas diam in arcu cursus euismod quis. Quam quisque id diam vel".</h4>
								<div class="thomas">
									<img alt="girl" src="https://via.placeholder.com/70x70">

									<div>
										<h6>Thomas Adamson</h6>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
									</div>
								</div>
						</div>
						<div class="item">
								<h4>"Dapibus ultrices in iaculis nunc sed augue lacus viverra vitae. Mauris a diam maecenas sed enim. Egestas diam in arcu cursus euismod quis. Quam quisque id diam vel".</h4>
								<div class="thomas">
									<img alt="girl" src="https://via.placeholder.com/70x70">

									<div>
										<h6>Thomas Adamson</h6>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
									</div>
								</div>
						</div>
					</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-12" data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="reviews-img">
						<img alt="photo" src="https://via.placeholder.com/676x585">
						<i class="fa-regular fa-thumbs-up"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- join-partnership -->
	<section class="join-partnership gap" style="background-color: #363636;">
		<div class="container">
			<h2>Want to Join Partnership?</h2>
			<div class="row">
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="join-img">
						<img alt="img" src="https://via.placeholder.com/626x393">
						<div class="Join-courier">
							<h3>Join Courier</h3>
							<a href="become-partner.html" class="button button-2">Learn More <i class="fa-solid fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="join-img">
						<img alt="img" src="https://via.placeholder.com/626x393">
						<div class="Join-courier">
							<h3>Join Merchant</h3>
							<a href="become-partner.html" class="button button-2">Learn More <i class="fa-solid fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- news-section -->
	<section class="news-section gap">
		<div class="container">
			<h2>Latest news and	events</h2>
			<div class="row">
				<div class="col-xl-6 col-lg-12" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="news-posts-one">
						<img alt="man" src="https://via.placeholder.com/626x269">
						<div class="quickeat">
							<a href="#">news</a>
							<a href="#">quickeat</a>
						</div>
						<h3>We Have Received An Award For The Quality Of Our Work</h3>
							<p>Donec adipiscing tristique risus nec feugiat in fermentum. Sapien eget mi proin sed libero. Et magnis dis parturient montes nascetur.
							Praesent semper feugiat nibh sed pulvinar proin gravida.</p>
							<a href="#">Read More<i class="fa-solid fa-arrow-right"></i></a>
							<ul class="data">
								<li><h6><i class="fa-solid fa-user"></i>by Quickeat</h6></li>
								<li><h6><i class="fa-regular fa-calendar-days"></i>01.Jan. 2022</h6></li>
								<li><h6><i class="fa-solid fa-eye"></i>132</h6></li>
							</ul>

					</div>
				</div>
				<div class="col-xl-6 col-lg-12" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="news-post-two">
						<img alt="food-img" src="https://via.placeholder.com/200x200">
							<div class="news-post-two-data">
								<div class="quickeat">
									<a href="#">restaurants</a>
									<a href="#">cooking</a>
								</div>
								<h6><a href="single-blog.html">With Quickeat you can order food for
											the whole day</a></h6>
								<p>Lorem ipsum dolor sit amet, consectetur
										adipiscing elit, sed do eiusmod tempor...</p>
								<ul class="data">
										<li><h6><i class="fa-solid fa-user"></i>by Quickeat</h6></li>
										<li><h6><i class="fa-regular fa-calendar-days"></i>01.Jan. 2022</h6></li>
										<li><h6><i class="fa-solid fa-eye"></i>132</h6></li>
								</ul>
						</div>
					</div>
					<div class="news-post-two">
						<img alt="food-img" src="https://via.placeholder.com/200x200">
							<div class="news-post-two-data">
								<div class="quickeat">
									<a href="#">restaurants</a>
									<a href="#">cooking</a>
								</div>
								<h6><a href="single-blog.html">127+ Couriers On Our Team!</a></h6>
								<p>Urna condimentum mattis pellentesque id nibh tortor id aliquet. Tellus at urna condimentum mattis...</p>
								<ul class="data">
										<li><h6><i class="fa-solid fa-user"></i>by Quickeat</h6></li>
										<li><h6><i class="fa-regular fa-calendar-days"></i>01.Jan. 2022</h6></li>
										<li><h6><i class="fa-solid fa-eye"></i>132</h6></li>
								</ul>
						</div>
					</div>
					<div class="news-post-two end">
						<img alt="food-img" src="https://via.placeholder.com/200x200">
							<div class="news-post-two-data">
								<div class="quickeat">
									<a href="#">restaurants</a>
									<a href="#">cooking</a>
								</div>
								<h6><a href="single-blog.html">Why You Should Optimize Your
																Menu for Delivery</a></h6>
								<p>Enim lobortis scelerisque fermentum dui. Sit amet cursus sit amet dictum sit amet. Rutrum tellus...</p>
								<ul class="data">
										<li><h6><i class="fa-solid fa-user"></i>by Quickeat</h6></li>
										<li><h6><i class="fa-regular fa-calendar-days"></i>01.Jan. 2022</h6></li>
										<li><h6><i class="fa-solid fa-eye"></i>132</h6></li>
								</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- subscribe-section -->
	<section class="subscribe-section gap" style="background:#fcfcfc">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="img-subscribe">
						<img alt="Illustration" src="https://via.placeholder.com/676x403">
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="get-the-menu">
						<h2>Get the menu of your favorite restaurants every day</h2>
						<form>
							<i class="fa-regular fa-bell"></i>
							<input type="text" name="email" placeholder="Enter email address">
							<button class="button button-2">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- footer -->
	<footer class="gap no-bottom" style="background-color: #363636;">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-sm-12">
					<div class="footer-description">
						<a href="index.html">
							<svg xmlns="http://www.w3.org/2000/svg" width="163" height="38" viewBox="0 0 163 38">
  <g id="Logo" transform="translate(-260 -51)">
    <g id="Logo-2" data-name="Logo" transform="translate(260 51)">
      <g id="Elements">
        <path id="Path_1429" data-name="Path 1429" d="M315.086,140.507H275.222v-.894c0-11.325,8.941-20.538,19.933-20.538s19.931,9.213,19.931,20.538Z" transform="translate(-270.155 -115.396)" fill="#f29f05"/>
        <path id="Path_1430" data-name="Path 1430" d="M301.13,133.517a1.488,1.488,0,0,1-1.394-.994,11.361,11.361,0,0,0-10.583-7.54,1.528,1.528,0,0,1,0-3.055,14.353,14.353,0,0,1,13.37,9.527,1.541,1.541,0,0,1-.875,1.966A1.444,1.444,0,0,1,301.13,133.517Z" transform="translate(-264.176 -113.935)" fill="#fff"/>
        <path id="Path_1431" data-name="Path 1431" d="M297.343,146.544a14.043,14.043,0,0,1-13.837-14.211h2.975a10.865,10.865,0,1,0,21.723,0h2.975A14.043,14.043,0,0,1,297.343,146.544Z" transform="translate(-266.247 -108.544)" fill="#fff"/>
        <path id="Path_1432" data-name="Path 1432" d="M302.183,132.519a7.064,7.064,0,1,1-14.122,0Z" transform="translate(-264.027 -108.446)" fill="#fff"/>
        <path id="Path_1433" data-name="Path 1433" d="M320.332,134.575H273.3a1.528,1.528,0,0,1,0-3.055h47.033a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-271.815 -108.923)" fill="#f29f05"/>
        <path id="Path_1434" data-name="Path 1434" d="M289.154,123.4a1.507,1.507,0,0,1-1.487-1.528v-3.678a1.488,1.488,0,1,1,2.975,0v3.678A1.508,1.508,0,0,1,289.154,123.4Z" transform="translate(-264.154 -116.667)" fill="#f29f05"/>
        <path id="Path_1435" data-name="Path 1435" d="M284.777,138.133H275.3a1.528,1.528,0,0,1,0-3.055h9.474a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-270.84 -107.068)" fill="#fff"/>
        <path id="Path_1436" data-name="Path 1436" d="M284.8,141.691h-6.5a1.528,1.528,0,0,1,0-3.055h6.5a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-269.379 -105.218)" fill="#fff"/>
      </g>
    </g>
    <text id="Quickeat" transform="translate(320 77)" fill="#fff" font-size="20" font-family="Poppins" font-weight="700"><tspan x="0" y="0">QUICK</tspan><tspan y="0" fill="#f29f05">EAT</tspan></text>
  </g>
</svg>
						</a>
						<h2>The Best Restaurants
								in Your  Home</h2>
						<p>Vitae congue mauris rhoncus aenean. Enim nulla
							 aliquet porttitor lacus luctus accumsan
								tortor posuere. Tempus egestas sed sed risus pretium quam.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="menu">
						<h4>Menu</h4>
						<ul class="footer-menu">
							<li><a href="index.html">home<i class="fa-solid fa-arrow-right"></i></a></li>
							<li><a href="about.html">about us<i class="fa-solid fa-arrow-right"></i></a></li>
							<li><a href="restaurants.html">Restaurants<i class="fa-solid fa-arrow-right"></i></a></li>
							<li><a href="contacts.html">Contacts<i class="fa-solid fa-arrow-right"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="menu contacts">
						<h4>Contacts</h4>
						<div class="footer-location">
							<i class="fa-solid fa-location-dot"></i>
							<p>1717 Harrison St, San Francisco, CA 94103,
									United States</p>
						</div>
						<a href="mailto:quickeat@mail.net"><i class="fa-solid fa-envelope"></i>quickeat@mail.net</a>
						<a href="callto:+14253261627"><i class="fa-solid fa-phone"></i>+1 425 326 16 27</a>
					</div>
					<ul class="social-media">
							<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
						</ul>
				</div>
			</div>
			<div class="footer-two gap no-bottom">
				<p>Copyright © 2022. Quickeat. All rights reserved.</p>
				<div class="privacy">
					<a href="#">Privacy Policy</a>
					<a href="#">Terms & Services</a>
				</div>
			</div>
		</div>
	</footer>
	<!-- bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<!-- jQuery -->
	<script src="assets/cssss/assets/js/jquery-3.6.0.min.js"></script>
	<script src="assets/cssss/assets/js/jquery.nice-select.min.js"></script>
	<!-- owl.carousel -->
	<script src="assets/cssss/assets/js/owl.carousel.min.js"></script>
	<!-- aos -->
	<script src="assets/cssss/assets/js/aos.js"></script>
	<!-- custom -->
	<script src="assets/cssss/assets/js/custom.js"></script>
</body>
<?php /**PATH C:\Users\lenovo\laravel-pemweb\resources\views/welcome.blade.php ENDPATH**/ ?>