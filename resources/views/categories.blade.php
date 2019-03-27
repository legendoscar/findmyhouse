@extends('layouts.master')

@section('content')

<!-- Page top section -->
<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container text-white">
			<h2>CATEGORIES</h2>
			<h6 class="text-danger"> Discover the various property categories under our vast real estate collections</h6>
		</div>

	</section>
	<!--  Page top end -->


	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index.php"><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i><a href="listings"> Property Listings</a></span>
			<span><i class="fa fa-angle-right"></i>Categories</span>
		</div>
	</div>

	<!-- page -->


	<!-- Filter form section -->
	<div class="filter-search mb-5">
		<div class="container">
			<form class="filter-form">
				<input type="text" placeholder="Enter a street name, address number or keyword">
				<select>
					<option value="City">All</option>
					<option value="City">For Rent</option>
					<option value="City">For Sale</option>
				</select>

				<select>
					<option value="City">All types</option>
					<option value="City">Apartments</option>
					<option value="City">Office Buildings</option>
					<option value="City">Estate houses</option>
				</select>

				<select class="mt-3">
					<option value="City">All places</option>
					<option value="City">Akwakuma</option>
					<option value="City">Wetheral</option>
					<option value="City">Amakohia</option>
					<option value="City">Orji</option>
				</select>

				<select class="mt-3 w-25">
					<option value="City">All prices</option>
					<option value="City">NGN100.00 - NGN100,000.00</option>
					<option value="City">NGN100,000.00 - NGN10,000,000.00</option>
					<option value="City">NGN10,000,000.00 - NGN100,000,000.00</option>
					<option value="City">NGN100,000,000.00 - NGN1,000,000,000.00</option>

				</select>

				<button class="site-btn fs-submit">SEARCH</button>
			</form>
		</div>
	</div>
	<!-- Filter form section end -->


	<!-- feature category section -->
	<section class="feature-category-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>KINDS OF PROPERTY</h3>
				<p>What kind of property are you looking for? We will help you</p>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 f-cata mb-5">
				<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/feature-cate/1.jpg">
							<div class="sale-notic float-left">13</div>
						</div>
						<h5 class="mt-sm-3"><a href="single-category.php?cat_id=apartments"> Apartment for rent</a></h5>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 f-cata mb-5">
					<img src="img/feature-cate/2.jpg" alt="">
					<h5><a href="single-category.php?cat_id=estates"> Estate Homes </a></h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata mb-5">
					<img src="img/feature-cate/3.jpg" alt="">
					<h5><a href="single-category.php?cat_id=villas"> Resort Villas </a></h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata mb-5">
					<img src="img/feature-cate/3.jpg" alt="">
					<h5><a href="#"> Undeveloped Lands </a></h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata mb-5">
					<img src="img/feature-cate/4.jpg" alt="">
					<h5> <a href="#"> Office Building </a></h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata mb-5">
					<img src="img/feature-cate/4.jpg" alt="">
					<h5> <a href="#"> Self-contains </a></h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata mb-5">
					<img src="img/feature-cate/4.jpg" alt="">
					<h5> <a href="#"> 2-bedroom flats </a></h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata mb-5">
					<img src="img/feature-cate/4.jpg" alt="">
					<h5> <a href="#"> 3-bedroom flats </a></h5>
				</div>
			</div>
		</div>
	</section>
	<!-- feature category section end-->

	<!-- feature category section search by place -->

	<section class="feature-category-section spd mt-5 bg-white">
		<div class="container">
			<div class="section-title text-center">
				<h3>SEARCH BY PLACE</h3>
				<p>Where do you want to stay?</p>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 f-cata mb-5">
					<img src="img/feature-cate/1.jpg" alt="">
					<h5><a href="single-category.php?cat_id=apartments"> Orji</a></h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata mb-5">
					<img src="img/feature-cate/2.jpg" alt="">
					<h5><a href="single-category.php?cat_id=estates"> Akwakuma </a></h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata mb-5">
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/feature-cate/2.jpg">
							<div class="sale-notic float-left">123</div>
						</div>
						<h5><a href="single-category.php?cat_id=villas"> Amakohia </a></h5>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- feature category section end-->

	<!-- page end -->


	<!-- Clients section -->
	<div class="clients-section">
		<div class="container">
			<div class="clients-slider owl-carousel">
				<a href="#">
					<img src="img/partner/1.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/2.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/3.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/4.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/5.png" alt="">
				</a>
			</div>
		</div>
	</div>
	<!-- Clients section end -->


@endsection
