<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the HandheldFriendly -->
	<meta name="HandheldFriendly" content="True">
	<!-- set the description -->
	<meta name="description" content="Coupmy-Coupons, Affiliates, Offers, Deals, Discounts &amp; Marketplace HTML Template">
	<!-- set the Keyword -->
	<meta name="keywords" content="">
	<meta name="author" content="Coupmy-Coupons, Affiliates, Offers, Deals, Discounts &amp; Marketplace HTML Template">
	<title>Coupmy-Coupons, Affiliates, Offers, Deals, Discounts &amp; Marketplace HTML Template</title>
	<!-- include the site stylesheet -->
	{{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CPoppins:300,400,500,600,900%7CLily+Script+One" rel="stylesheet">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/plugins.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/icofont.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/colors.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- include the site stylesheet -->
    <link rel="stylesheet" href="resources/css/home.css">
	<style class="color_css"></style> --}}

	@vite([
    'resources/css/home.css',
    'resources/css/icofont.css',
    'resources/css/plugins.css',
    'resources/css/responsive.css',
    'resources/css/style.css',
    // 'resources/js/app.js' // Jika ada JavaScript
])
</head>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<!-- header of the page -->
		<header id="header">
			<!-- header top of the page -->
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<span class="txt">Welcome to Coupmy Save More With Our Deals</span>
							<ul class="align-left list-unstyled">
								<li><a href="#">Support</a></li>
								<li><a href="login.html"><i class="fa fa-unlock-alt"></i> Login</a></li>
								<li><a href="register.html"><i class="fa fa-user"></i> Register</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- header holder of the page -->
			<div class="header-holder container">
				<div class="row">
					<div class="col-xs-12">
						<div class="logo">
							<a href="home.html"><img src="images/logo.png" alt="Coupmy" class="img-responsive"></a>
						</div>
						<div class="search-cart">
							<form action="#" class="search-form">
								<fieldset>
									<select>
										<option value="0">Select Category</option>
										<option value="1">Select Category</option>
										<option value="2">Select Category</option>
									</select>
									<input type="search" class="form-control" placeholder="Enter Keyword . . .">
									<button type="submit" class="sub-btn"><i class="icon-search"></i></button>
								</fieldset>
							</form>
							<a href="#" class="cart"><i class="icon-cart"></i> <span class="num round">2</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- nav holder of the page -->
			<div class="nav-holder">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<a href="#" class="nav-opener text-center hidden visible-sm visible-xs"><i class="fa fa-bars"></i></a>
							<!-- nav of the page -->
							<nav id="nav">
								<ul class="list-unstyled">
									<li class="active">
										<a href="#">Home</a>
										<ul class="drop-down list-unstyled">
											<li><a href="home.html">Homepage 1</a></li>
											<li><a href="home2.html">Homepage 2</a></li>
										</ul>
									</li>
									<li><a href="about.html">About Us</a></li>
									<li>
										<a href="#">Blog</a>
										<ul class="drop-down list-unstyled">
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog-detail.html">Blog Detail</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Page</a>
										<ul class="drop-down list-unstyled">
											<li><a href="coupon1.html">Coupon</a></li>
											<li><a href="coupon-detail.html">Coupon Detail</a></li>
											<li><a href="category.html">Category</a></li>
											<li><a href="login.html">Login</a></li>
											<li><a href="register.html">Register</a></li>
											<li><a href="store.html">Store</a></li>
											<li><a href="submit-coupon.html">Submit Coupon</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Contact Us</a>
										<ul class="drop-down list-unstyled">
											<li><a href="contact.html">Contact Us</a></li>
											<li><a href="contact2.html">Contact Us2</a></li>
										</ul>
									</li>
								</ul>
							</nav>
							<a href="submit-coupon.html" class="btn-primary text-center text-uppercase">Submit Coupon</a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header of the page end -->
		<!-- main of the page -->
		<main id="main">
			<!-- banner of the page -->
			<section class="banner bg-full overlay" style="background-image: url(http://placehold.it/1920x900);">
				<div class="holder">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 text-left">
								<h1 class="text-uppercase">It looks like it's <br class="hidden-xs">been furnished <br class="hidden-xs">by <span class="clr">discount</span> <br class="hidden-xs">stores.</h1>
								<form action="#" class="search-form lg-round">
									<fieldset>
										<label for="search"><i class="icon icon-search"></i></label>
										<input type="search" class="form-control" id="search" placeholder="Search coupons & deals">
										<button type="submit" class="btn-icon"><i class="icon-right-arrow"></i></button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- latest coupon of the page -->
			<section class="latest-coupon container pad-top-lg pad-bottom-md">
				<div class="row">
					<header class="col-xs-12 text-center header">
						<h2 class="heading">Latest Coupon Codes &amp; Deals</h2>
					</header>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<!-- coupon box of the page -->
						<div class="coupon-box mar-bottom-xs">
							<div class="img-holder">
								<img src="http://placehold.it/260x190" alt="image description" class="img-resposnive">
							</div>
							<div class="txt-holder">
								<h3 class="heading6"><a href="coupon-detail.html">Up To 50% Off On Home Appliances</a></h3>
								<ul class="list-unstyled list-show">
									<li><a href="#"><i class="icon icon-smile"></i> Verified</a></li>
									<li><a href="#"><i class="icon icon-user"></i> Used</a></li>
								</ul>
								<a href="coupon-detail.html" class="btn-primary md-round text-center text-uppercase">Get Coupon Code</a>
								<time class="time text-center" datetime="2017-02-03 20:00">Expires On : 03 Sep, 2017</time>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<!-- coupon box of the page -->
						<div class="coupon-box mar-bottom-xs">
							<div class="img-holder">
								<img src="http://placehold.it/260x190" alt="image description" class="img-resposnive">
							</div>
							<div class="txt-holder">
								<h3 class="heading6"><a href="coupon-detail.html">Up To 20% Off On Men Style Spa Saloon</a></h3>
								<ul class="list-unstyled list-show">
									<li><a href="#"><i class="icon icon-smile"></i> Verified</a></li>
									<li><a href="#"><i class="icon icon-user"></i> Used</a></li>
								</ul>
								<a href="coupon-detail.html" class="btn-primary md-round text-center text-uppercase">Get Coupon Code</a>
								<time class="time text-center" datetime="2017-02-03 20:00">Expires On : 21 Sep, 2017</time>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<!-- coupon box of the page -->
						<div class="coupon-box mar-bottom-xs">
							<div class="img-holder">
								<img src="http://placehold.it/260x190" alt="image description" class="img-resposnive">
							</div>
							<div class="txt-holder">
								<h3 class="heading6"><a href="coupon-detail.html">Up To 20% Off On Paris Honeymoon Trip</a></h3>
								<ul class="list-unstyled list-show">
									<li><a href="#"><i class="icon icon-smile"></i> Verified</a></li>
									<li><a href="#"><i class="icon icon-user"></i> Used</a></li>
								</ul>
								<a href="coupon-detail.html" class="btn-primary md-round text-center text-uppercase">Get Coupon Code</a>
								<time class="time text-center" datetime="2017-02-03 20:00">Expires On : 22 Sep, 2017</time>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<!-- coupon box of the page -->
						<div class="coupon-box mar-bottom-xs">
							<div class="img-holder">
								<img src="http://placehold.it/260x190" alt="image description" class="img-resposnive">
							</div>
							<div class="txt-holder">
								<h3 class="heading6"><a href="coupon-detail.html">Up To 20% Off On Women Accessories</a></h3>
								<ul class="list-unstyled list-show">
									<li><a href="#"><i class="icon icon-smile"></i> Verified</a></li>
									<li><a href="#"><i class="icon icon-user"></i> Used</a></li>
								</ul>
								<a href="coupon-detail.html" class="btn-primary md-round text-center text-uppercase">Get Coupon Code</a>
								<time class="time text-center" datetime="2017-02-03 20:00">Expires On : 01 Sep, 2017</time>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<!-- coupon box of the page -->
						<div class="coupon-box mar-bottom-xs">
							<div class="img-holder">
								<img src="http://placehold.it/260x190" alt="image description" class="img-resposnive">
							</div>
							<div class="txt-holder">
								<h3 class="heading6"><a href="coupon-detail.html">Extra Up To 20% Off On All Furnitures</a></h3>
								<ul class="list-unstyled list-show">
									<li><a href="#"><i class="icon icon-smile"></i> Verified</a></li>
									<li><a href="#"><i class="icon icon-user"></i> Used</a></li>
								</ul>
								<a href="coupon-detail.html" class="btn-primary md-round text-center text-uppercase">Get Coupon Code</a>
								<time class="time text-center" datetime="2017-02-03 20:00">Expires On : 05 Oct, 2017</time>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<!-- coupon box of the page -->
						<div class="coupon-box mar-bottom-xs">
							<div class="img-holder">
								<img src="http://placehold.it/260x190" alt="image description" class="img-resposnive">
							</div>
							<div class="txt-holder">
								<h3 class="heading6"><a href="coupon-detail.html">Up To 10% Off On Home Appliances</a></h3>
								<ul class="list-unstyled list-show">
									<li><a href="#"><i class="icon icon-smile"></i> Verified</a></li>
									<li><a href="#"><i class="icon icon-user"></i> Used</a></li>
								</ul>
								<a href="coupon-detail.html" class="btn-primary md-round text-center text-uppercase">Get Coupon Code</a>
								<time class="time text-center" datetime="2017-02-03 20:00">Expires On : 21 Oct, 2017</time>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<!-- coupon box of the page -->
						<div class="coupon-box mar-bottom-xs">
							<div class="img-holder">
								<img src="http://placehold.it/260x190" alt="image description" class="img-resposnive">
							</div>
							<div class="txt-holder">
								<h3 class="heading6"><a href="coupon-detail.html">Up To 15% Off On All Electronic Items</a></h3>
								<ul class="list-unstyled list-show">
									<li><a href="#"><i class="icon icon-smile"></i> Verified</a></li>
									<li><a href="#"><i class="icon icon-user"></i> Used</a></li>
								</ul>
								<a href="coupon-detail.html" class="btn-primary md-round text-center text-uppercase">Get Coupon Code</a>
								<time class="time text-center" datetime="2017-02-03 20:00">Expires On : 21 Oct, 2017</time>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<!-- coupon box of the page -->
						<div class="coupon-box mar-bottom-xs">
							<div class="img-holder">
								<img src="http://placehold.it/260x190" alt="image description" class="img-resposnive">
							</div>
							<div class="txt-holder">
								<h3 class="heading6"><a href="coupon-detail.html">Extra Up To 10% Off On Massage &amp; Spa</a></h3>
								<ul class="list-unstyled list-show">
									<li><a href="#"><i class="icon icon-smile"></i> Verified</a></li>
									<li><a href="#"><i class="icon icon-user"></i> Used</a></li>
								</ul>
								<a href="coupon-detail.html" class="btn-primary md-round text-center text-uppercase">Get Coupon Code</a>
								<time class="time text-center" datetime="2017-02-03 20:00">Expires On : 28 Oct, 2017</time>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- store sec of the page -->
			<section class="store-sec bg-grey pad-top-lg pad-bottom-lg">
				<div class="container">
					<div class="row">
						<header class="col-xs-12 text-center header">
							<h3 class="heading">More Than <span class="clr">3000+ Stores</span> In One Place!</h3>
							<p>Search your favourite store &amp; get many deals</p>
						</header>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<ul class="list-unstyled store-logo">
								<li><a href="#"><img src="http://placehold.it/150x65" alt="LOGO" class="img-responsive"></a></li>
								<li><a href="#"><img src="http://placehold.it/150x65" alt="LOGO" class="img-responsive"></a></li>
								<li><a href="#"><img src="http://placehold.it/150x65" alt="LOGO" class="img-responsive"></a></li>
								<li><a href="#"><img src="http://placehold.it/150x65" alt="LOGO" class="img-responsive"></a></li>
								<li><a href="#"><img src="http://placehold.it/150x65" alt="LOGO" class="img-responsive"></a></li>
								<li><a href="#"><img src="http://placehold.it/150x65" alt="LOGO" class="img-responsive"></a></li>
								<li><a href="#"><img src="http://placehold.it/150x65" alt="LOGO" class="img-responsive"></a></li>
								<li><a href="#"><img src="http://placehold.it/150x65" alt="LOGO" class="img-responsive"></a></li>
								<li><a href="#"><img src="http://placehold.it/150x65" alt="LOGO" class="img-responsive"></a></li>
								<li><a href="#"><img src="http://placehold.it/150x65" alt="LOGO" class="img-responsive"></a></li>
							</ul>
							<div class="text-center">
								<a href="#" class="btn-primary text-center text-uppercase md-round">Visit all stores</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- feature sec of the page -->
			<section class="feature-sec container pad-top-lg pad-bottom-md">
				<div class="row">
					<header class="col-xs-12 text-center header">
						<h4 class="heading">Coupmy Featured Category</h4>
						<p>Explore the popular categories in coupmy</p>
					</header>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<!-- feature box of the page -->
						<div class="feature-box">
							<span class="icon round text-center"><span class="border round"><i class="icon-restaurant"></i></span></span>
							<div class="img-holder overlay">
								<img src="http://placehold.it/360x200" alt="image description" class="img-responsive">
								<div class="over text-center">
									<h2 class="heading2">Restaurants</h2>
									<p>32 deals available</p>
								</div>
							</div>
							<a href="coupon-detail.html" class="btn-primary text-center text-uppercase">view deals & Coupon</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<!-- feature box of the page -->
						<div class="feature-box">
							<span class="icon round text-center"><span class="border round"><i class="icon-health"></i></span></span>
							<div class="img-holder overlay">
								<img src="http://placehold.it/360x200" alt="image description" class="img-responsive">
								<div class="over text-center">
									<h2 class="heading2">Health &amp; Beauty</h2>
									<p>21 deals available</p>
								</div>
							</div>
							<a href="coupon-detail.html" class="btn-primary text-center text-uppercase">view deals & Coupon</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<!-- feature box of the page -->
						<div class="feature-box">
							<span class="icon round text-center"><span class="border round"><i class="icon-event"></i></span></span>
							<div class="img-holder overlay">
								<img src="http://placehold.it/360x200" alt="image description" class="img-responsive">
								<div class="over text-center">
									<h2 class="heading2">Events &amp; Activities</h2>
									<p>17 deals available</p>
								</div>
							</div>
							<a href="coupon-detail.html" class="btn-primary text-center text-uppercase">view deals & Coupon</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<!-- feature box of the page -->
						<div class="feature-box">
							<span class="icon round text-center"><span class="border round"><i class="icon-sport"></i></span></span>
							<div class="img-holder overlay">
								<img src="http://placehold.it/360x200" alt="image description" class="img-responsive">
								<div class="over text-center">
									<h2 class="heading2">Sports &amp; Fitness</h2>
									<p>23 deals available</p>
								</div>
							</div>
							<a href="coupon-detail.html" class="btn-primary text-center text-uppercase">view deals & Coupon</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<!-- feature box of the page -->
						<div class="feature-box">
							<span class="icon round text-center"><span class="border round"><i class="icon-men"></i></span></span>
							<div class="img-holder overlay">
								<img src="http://placehold.it/360x200" alt="image description" class="img-responsive">
								<div class="over text-center">
									<h2 class="heading2">Sports &amp; Fitness</h2>
									<p>21 deals available</p>
								</div>
							</div>
							<a href="coupon-detail.html" class="btn-primary text-center text-uppercase">view deals & Coupon</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<!-- feature box of the page -->
						<div class="feature-box">
							<span class="icon round text-center"><span class="border round"><i class="icon-women"></i></span></span>
							<div class="img-holder overlay">
								<img src="http://placehold.it/360x200" alt="image description" class="img-responsive">
								<div class="over text-center">
									<h2 class="heading2">Women Accessories</h2>
									<p>19 deals available</p>
								</div>
							</div>
							<a href="coupon-detail.html" class="btn-primary text-center text-uppercase">view deals & Coupon</a>
						</div>
					</div>
				</div>
			</section>
			<!-- call out sec of the page -->
			<section class="callout-sec pad-top-sm pad-bottom-sm">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-lg-offset-1">
							<h3>Want To List Your Store In Our <strong>Coupmy!</strong></h3>
						</div>
						<div class="col-xs-12 col-sm-3">
							<a href="#" class="btn-primary text-center text-uppercase md-round">Register Now</a>
						</div>
					</div>
				</div>
			</section>
			<!-- offer sec of the page -->
			<section class="offer-sec container pad-top-lg pad-bottom-md">
				<div class="row">
					<header class="col-xs-12 text-center header">
						<h2 class="heading">Today’s Best Offers And Coupons</h2>
						<ul class="list-unstyled filter-list">
							<li class="active"><a href="#" data-filter=".health">Health &amp; Beauty</a></li>
							<li><a href="#" data-filter=".kitchen">Electronics &amp; Kitchen</a></li>
							<li><a href="#" data-filter=".res">Restaurants</a></li>
							<li><a href="#" data-filter=".sport">Sports &amp; Fitness</a></li>
							<li><a href="#" data-filter=".fashion">Fashion &amp; Appareals</a></li>
						</ul>
					</header>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<!-- offer holder of the page -->
						<div class="offer-holder">
							<!-- col of the page -->
							<div class="col mar-bottom-xs health">
								<div class="header">
									<div class="c-logo"><img src="http://placehold.it/150x50" alt="logo" class="img-responsive"></div>
									<span class="offer">25% Off</span>
								</div>
								<strong class="heading6">Upto 15% + Extra 10% Off On <br class="hidden-xs">Sofa. Furniture &amp; Dining Tables</strong>
								<span class="sub-title">See all 12 Coupay Offers</span>
								<div class="text-center">
									<a href="coupon-detail.html" class="btn-primary text-center text-uppercase md-round">view coupon <span class="code">18FX</span></a>
									<time class="time" datetime="2017-02-03 20:00">Expires On : 29 Oct, 2017</time>
								</div>
							</div>
							<!-- col of the page -->
							<div class="col mar-bottom-xs res">
								<div class="header">
									<div class="c-logo"><img src="http://placehold.it/150x50" alt="logo" class="img-responsive"></div>
									<span class="offer">25% Off</span>
								</div>
								<strong class="heading6">Upto 15% + Extra 10% Off On <br class="hidden-xs">Home &amp; Kitchen Appliances</strong>
								<span class="sub-title">See all 15 Coupay Offers</span>
								<div class="text-center">
									<a href="coupon-detail.html" class="btn-primary text-center text-uppercase md-round">view coupon <span class="code">18FX</span></a>
									<time class="time" datetime="2017-02-03 20:00">Expires On : 29 Oct, 2017</time>
								</div>
							</div>
							<!-- col of the page -->
							<div class="col mar-bottom-xs sport">
								<div class="header">
									<div class="c-logo"><img src="http://placehold.it/150x50" alt="logo" class="img-responsive"></div>
									<span class="offer">25% Off</span>
								</div>
								<strong class="heading6">Upto 15% Off On Family <br class="hidden-xs">Tour Packages</strong>
								<span class="sub-title">See all 22 Coupay Offers</span>
								<div class="text-center">
									<a href="coupon-detail.html" class="btn-primary text-center text-uppercase md-round">view coupon <span class="code">18FX</span></a>
									<time class="time" datetime="2017-02-03 20:00">Expires On : 29 Oct, 2017</time>
								</div>
							</div>
							<!-- col of the page -->
							<div class="col mar-bottom-xs kitchen">
								<div class="header">
									<div class="c-logo"><img src="http://placehold.it/150x50" alt="logo" class="img-responsive"></div>
									<span class="offer">25% Off</span>
								</div>
								<strong class="heading6">Extra 10% Off On Men Appareals <br class="hidden-xs">Accessories</strong>
								<span class="sub-title">See all 12 Coupay Offers</span>
								<div class="text-center">
									<a href="coupon-detail.html" class="btn-primary text-center text-uppercase md-round">view coupon <span class="code">18FX</span></a>
									<time class="time" datetime="2017-02-03 20:00">Expires On : 29 Oct, 2017</time>
								</div>
							</div>
							<!-- col of the page -->
							<div class="col mar-bottom-xs fashion">
								<div class="header">
									<div class="c-logo"><img src="http://placehold.it/150x50" alt="logo" class="img-responsive"></div>
									<span class="offer">25% Off</span>
								</div>
								<strong class="heading6">Upto 25% Off On Beauty Spa <br class="hidden-xs">&amp; Massage For Women</strong>
								<span class="sub-title">See all 15 Coupay Offers</span>
								<div class="text-center">
									<a href="coupon-detail.html" class="btn-primary text-center text-uppercase md-round">view coupon <span class="code">18FX</span></a>
									<time class="time" datetime="2017-02-03 20:00">Expires On : 29 Oct, 2017</time>
								</div>
							</div>
							<!-- col of the page -->
							<div class="col mar-bottom-xs health">
								<div class="header">
									<div class="c-logo"><img src="http://placehold.it/150x50" alt="logo" class="img-responsive"></div>
									<span class="offer">25% Off</span>
								</div>
								<strong class="heading6">Extra 15% Off On Electronics <br class="hidden-xs">&amp; Kitchen Appliances</strong>
								<span class="sub-title">See all 22 Coupay Offers</span>
								<div class="text-center">
									<a href="coupon-detail.html" class="btn-primary text-center text-uppercase md-round">view coupon <span class="code">18FX</span></a>
									<time class="time" datetime="2017-02-03 20:00">Expires On : 29 Oct, 2017</time>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- app sec of the page -->
			<section class="app-sec pad-top-lg">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-5">
							<div class="img-holder">
								<img src="http://placehold.it/375x375" alt="image description" class="img-responsive">
							</div>
						</div>
						<div class="col-xs-12 col-sm-7">
							<div class="txt-holder">
								<h3 class="heading">Download Our Coupmy App Now!</h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
								<div class="btn-holder">
									<a href="#" class="pull-left"><img src="images/g-btn.png" alt="image description" class="img-resposnive"></a>
									<a href="#" class="pull-left"><img src="images/app-btn.png" alt="image description" class="img-resposnive"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- blog sec of the page -->
			<section class="blog-sec container pad-top-lg pad-bottom-md">
				<div class="row">
					<div class="header col-xs-12 header text-center">
						<h3 class="heading">Latest Updates From Coupmy</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<!-- blog holder of the page -->
						<div class="blog-holder mar-bottom-xs">
							<div class="img-holder">
								<a href="blog-detail.html"><img src="http://placehold.it/360x240" alt="image description" class="img-resposnive"></a>
								<time class="time text-center" datetime="2017-02-03 20:00">12 <span class="txt">Sep</span></time>
							</div>
							<h4 class="heading3"><a href="blog-detail.html">Sed ut perspiciatis unde omnis</a></h4>
							<p>Lorem ipsum dolor sit amet onsect adipiscing elit sed do eiusmod tempor incididun.</p>
							<a href="blog-detail.html" class="btn-primary text-center text-uppercase">read more</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<!-- blog holder of the page -->
						<div class="blog-holder mar-bottom-xs">
							<div class="img-holder">
								<a href="blog-detail.html"><img src="http://placehold.it/360x240" alt="image description" class="img-resposnive"></a>
								<time class="time text-center" datetime="2017-02-03 20:00">12 <span class="txt">Sep</span></time>
							</div>
							<h4 class="heading3"><a href="blog-detail.html">Sed ut perspiciatis unde omnis</a></h4>
							<p>Lorem ipsum dolor sit amet onsect adipiscing elit sed do eiusmod tempor incididun.</p>
							<a href="blog-detail.html" class="btn-primary text-center text-uppercase">read more</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<!-- blog holder of the page -->
						<div class="blog-holder mar-bottom-xs">
							<div class="img-holder">
								<a href="blog-detail.html"><img src="http://placehold.it/360x240" alt="image description" class="img-resposnive"></a>
								<time class="time text-center" datetime="2017-02-03 20:00">12 <span class="txt">Sep</span></time>
							</div>
							<h4 class="heading3"><a href="blog-detail.html">Sed ut perspiciatis unde omnis</a></h4>
							<p>Lorem ipsum dolor sit amet onsect adipiscing elit sed do eiusmod tempor incididun.</p>
							<a href="blog-detail.html" class="btn-primary text-center text-uppercase">read more</a>
						</div>
					</div>
				</div>
			</section>
			<!-- subscribe sec of the page -->
			<section class="subscribe-sec bg-full" style="background-image: url(http://placehold.it/1920x140);">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 text-center">
							<h5>Subscribe To Our Newsletter</h5>
						</div>
						<div class="col-xs-12 col-sm-6">
							<form action="#" class="subscribe-form">
								<fieldset>
									<input type="email" class="form-control" placeholder="Email Address">
									<button type="submit" class="sub-btn"><i class="icon-airoplane"></i></button>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</section>
		</main>
		<!-- main of the page end -->
		<!-- footer of the page -->
		<footer id="footer">
			<!-- footer holder of the page -->
			<div class="footer-holder container">
				<div class="row">
					<div class="col-xs-12">
						<div class="col1">
							<h3 class="text-uppercase">Contact Coupmy</h3>
							<ul class="list-unstyled contact-list">
								<li>
									<span class="icon icon-location"></span>
									<address>824 Bel Meadow Drive, California, USA</address>
								</li>
								<li>
									<span class="icon icon-phone"></span>
									<span class="tel"><a href="tel:112345678520">(+11) 234 567 8520</a><a href="tel:112345678520">(+11) 234 567 8520</a></span>
								</li>
								<li>
									<span class="icon icon-email"></span>
									<span class="mail"><a href="mailto:Info@Coupmy.Com">Info@Coupmy.Com</a><a href="mailto:Mail@Coupmy.Com">Mail@Coupmy.Com</a></span>
								</li>
							</ul>
						</div>
						<div class="col2">
							<h3 class="text-uppercase">Quick Links</h3>
							<ul class="list-unstyled f-nav">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Coupons</a></li>
								<li><a href="#">Offers</a></li>
								<li><a href="#">Deals</a></li>
								<li><a href="#">Latest News</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col3">
							<h3 class="text-uppercase">Categories</h3>
							<ul class="list-unstyled tags">
								<li><a href="#">Restaurant</a></li>
								<li><a href="#">Health</a></li>
								<li><a href="#">Fitness</a></li>
								<li><a href="#">Events</a></li>
								<li><a href="#">Beauty</a></li>
								<li><a href="#">Sports</a></li>
								<li><a href="#">Electronics</a></li>
								<li><a href="#">Watches</a></li>
							</ul>
							<h3 class="text-uppercase">Follow us</h3>
							<ul class="list-unstyled socail-network">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
						<div class="col4">
							<h3 class="text-uppercase">Recent Tweets</h3>
							<ul class="list-unstyled recent-tweet">
								<li>
									<span class="icon"><i class="fa fa-twitter"></i></span>
									<div class="txt-holder">
										<p><a href="#">@Micheal Doe</a> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu santium dolo remque laudan tium, </p>
										<time datetime="2018-02-03 20:00" class="time">Posted on 29 Sep</time>
									</div>
								</li>
								<li>
									<span class="icon"><i class="fa fa-twitter"></i></span>
									<div class="txt-holder">
										<p><a href="#">@Micheal Doe</a> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu santium dolo remque laudan tium, </p>
										<time datetime="2018-02-03 20:00" class="time">Posted on 29 Sep</time>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- footer area of the page -->
			<div class="footer-area">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-5">
							<p>© 2017 All rights reserved. Created by Htmlbeans</p>
						</div>
						<div class="col-xs-12 col-sm-7">
							<ul class="list-unstyled footer-nav">
								<li><a href="#">Home</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms&amp;Conditions</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer of the page end -->
		<span id="back-top" class="text-center md-round fa fa-angle-up"></span>
		<!-- loader of the page -->
		<!-- <div id="loader" class="loader-holder">
			<div class="block"><img src="images/svg/bars.svg" width="60" alt="loader"></div>
		</div> -->
	</div>
	<!-- main container of all the page elements end -->
	<!-- include jQuery -->
	<script src="js/jquery.js"></script>
	<!-- include jQuery -->
	<script src="js/plugins.js"></script>
	<!-- include jQuery -->
	<script src="js/jquery.main.js"></script>
	<div id="style-changer" data-src="style-changer.html"></div>
</body>
</html>