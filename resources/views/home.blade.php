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
    <title>Sahabat Service</title>
    <!-- include the site stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CPoppins:300,400,500,600,900%7CLily+Script+One" rel="stylesheet">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	
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
							<span class="txt">Selamat datang di sahabat service</span>
							<ul class="align-left list-unstyled">
								<li><a href="#">Support</a></li>
								<li><a href="{{ route('login-form') }}" class="btn btn-primary">Login</a></li>
								<li><a href="register.html"><i class="fa fa-user"></i> Register</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- nav holder -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Coupmy" height="50" style="width:auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mainNavbar" aria-controls="mainNavbar"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="homeDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">Homepages</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="homeDropdown">
                            <li><a class="dropdown-item" href="home.html">Homepage 1</a></li>
                            <li><a class="dropdown-item" href="home2.html">Homepage 2</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="blogDropdown">
                            <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                            <li><a class="dropdown-item" href="blog-detail.html">Blog Detail</a></li>
                        </ul>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pageDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">Page</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="pageDropdown">
                            <li><a class="dropdown-item" href="coupon1.html">Coupon</a></li>
                            <li><a class="dropdown-item" href="coupon-detail.html">Coupon Detail</a></li>
                            <li><a class="dropdown-item" href="category.html">Category</a></li>
                            <li><a class="dropdown-item" href="{{ route('login-form') }}">Login</a></li>
                            <li><a class="dropdown-item" href="register.html">Register</a></li>
                            <li><a class="dropdown-item" href="store.html">Store</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
		</header>
		<!-- header of the page end -->
		<!-- main of the page -->
		<main id="main">
			<!-- banner of the page -->
			<section class="banner bg-full overlay" style="background-image: url(https://placehold.jp/1920x900.png);">
				<div class="holder">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 text-left">
								<h1 class="text-uppercase">Selamat Datang  <br class="hidden-xs">di <br class="hidden-xs"> <span class="clr">Sahabat</span> <br class="hidden-xs">Service</h1>
								<form action="#" class="search-form lg-round">
									<fieldset>
										<label for="search"><i class="icon icon-search"></i></label>
										<input type="search" class="form-control" id="search" placeholder="Cari layanan Kami">
										<button type="submit" class="btn-icon"><i class="icon-right-arrow"></i></button>
									</fieldset>
								</form>
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
							<h3 class="heading">layanan Kami</h3>
							<p>Sahabat Service membantumu&amp;Sesuai dengan apa yang kamu keluhkan</p>
						</header>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<ul class="list-unstyled store-logo">
								<li><a href="#"><img src="https://placehold.jp/150x65.png" alt="LOGO" class="img-responsive"></a></li>
								<li><a href="#"><img src="https://placehold.jp/150x65.png" alt="LOGO" class="img-responsive"></a></li>
								<li><a href="#"><img src="https://placehold.jp/150x65.png" alt="LOGO" class="img-responsive"></a></li>
								<li><a href="#"><img src="https://placehold.jp/150x65.png" alt="LOGO" class="img-responsive"></a></li>
								<li><a href="#"><img src="https://placehold.jp/150x65.png" alt="LOGO" class="img-responsive"></a></li>
								<li><a href="#"><img src="https://placehold.jp/150x65.png" alt="LOGO" class="img-responsive"></a></li>
								<li><a href="#"><img src="https://placehold.jp/150x65.png" alt="LOGO" class="img-responsive"></a></li>
								<li><a href="#"><img src="https://placehold.jp/150x65.png" alt="LOGO" class="img-responsive"></a></li>
								<li><a href="#"><img src="https://placehold.jp/150x65.png" alt="LOGO" class="img-responsive"></a></li>
								<li><a href="#"><img src="https://placehold.jp/150x65.png" alt="LOGO" class="img-responsive"></a></li>
							</ul>
							{{-- <div class="text-center">
								<a href="#" class="btn-primary text-center text-uppercase md-round">Visit all stores</a>
							</div> --}}
						</div>
					</div>
				</div>
			</section>
			<!-- call out sec of the page -->
			<section class="callout-sec pad-top-sm pad-bottom-sm">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-lg-offset-1">
							<h3>Hubungi Kami <strong></strong></h3>
						</div>
						<div class="col-xs-12 col-sm-3">
							<a href="#" class="btn-primary text-center text-uppercase md-round">Kontak</a>
						</div>
					</div>
				</div>
			</section>
			<!-- offer sec of the page -->
			<section class="offer-sec container pad-top-lg pad-bottom-md">
				<div class="row">
					<header class="col-xs-12 text-center header">
						<h2 class="heading">Produk Kami</h2>
					</header>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<!-- offer holder of the page -->
						<div class="offer-holder-wrapper">
    <div class="offer-holder-grid">
    @foreach ($products as $product)
    <div class="product-card">
        <div class="product-image">
            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="img-responsive" style="width: 100%; height: auto;">
        </div>
        <span class="offer">Price: ${{ number_format($product->price, 2) }}</span>
        <div class="product-description">
            <strong class="heading6">{{ $product->name }}</strong>
            <p>Quantity: {{ $product->quantity }}</p>
            <p>{{ $product->description }}</p>
        </div>
    </div>
    @endforeach
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
							<div class="map-holder">
								<iframe 
									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126463.96642131557!2d110.28424164335937!3d-7.892790900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a578767a1c72b%3A0x7b4a24f3c7f1a3a0!2sJl.%20Bantul%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1717741445214!5m2!1sid!2sid" 
									width="100%" 
									height="375" 
									style="border:0; border-radius: 8px;" 
									allowfullscreen="" 
									loading="lazy" 
									referrerpolicy="no-referrer-when-downgrade">
								</iframe>
							</div>
						</div>
						<div class="col-xs-12 col-sm-7">
							<div class="txt-holder">
								<h3 class="heading">Alamat Kami</h3>
								<p>Jalan Bantul Kabupaten Yogyakarta</p>
								<div class="btn-holder">
									<a href="#" class="pull-left"><img src="images/g-btn.png" alt="Tombol Google Play" class="img-resposnive"></a>
									<a href="#" class="pull-left"><img src="images/app-btn.png" alt="Tombol App Store" class="img-resposnive"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- subscribe sec of the page -->
			<section class="subscribe-sec bg-full" style="background-image: url(https://placehold.jp/1920x140.png);">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 text-center" type="button">
							<a href=""><h5>Hubungi Kami</h5></a>
						</div>
						<div class="col-xs-12 col-sm-6">
							{{-- <form action="#" class="subscribe-form">
								<fieldset>
									<input type="email" class="form-control" placeholder="Email Address">
									<button type="submit" class="sub-btn"><i class="icon-airoplane"></i></button>
								</fieldset>
							</form> --}}
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
							<h3 class="text-uppercase">layanan Cepat</h3>
							<ul class="list-unstyled f-nav">
								<li><a href="#">Service</a></li>
								<li><a href="#">Jual Hp</a></li>
								<li><a href="#">Beli Hp</a></li>
							</ul>
						</div>
						<div class="col3">
							<h3 class="text-uppercase">Sosial Media</h3>
							<ul class="list-unstyled socail-network">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
						<div class="col4">
							<h3 class="text-uppercase">Alamat</h3>
							<ul class="list-unstyled recent-tweet">
								<li>
									<span class="icon"><i class="fa fa-twitter"></i></span>
									<div class="txt-holder">
										<p><a href="#">Jl. Ypgyakarta, </p>
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
							<p>@nama kamu</p>
						</div>
						<div class="col-xs-12 col-sm-7">
							<ul class="list-unstyled footer-nav">
								<li><a href="#">Home</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">kontak</a></li>
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
	<script>
		document.getElementById('slideLeft').addEventListener('click', function () {
    const container = document.getElementById('offerHolder');
    container.scrollLeft -= 300; // Geser ke kiri sejauh 300px
});

document.getElementById('slideRight').addEventListener('click', function () {
    const container = document.getElementById('offerHolder');
    container.scrollLeft += 300; // Geser ke kanan sejauh 300px
});
	</script>
	<script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>