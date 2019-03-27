@extends('layouts.master')

@section('content')

<!-- Page top section -->
<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container text-white">
			<h2>About us</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index.php"><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>About us</span>
		</div>
	</div>

	<!-- page -->
	<section class="page-section">
		<div class="container">
			<img class="mb-5" src="img/about.jpg" alt="">
			<div class="row about-text">
				<div class="col-xl-6 about-text-left">
					<h5>ABOUT US</h5>
					<p>We are an estate firm....</p>
					<p>Our name is findmyhouse...</p>
				</div>
				<div class="col-xl-6 about-text-right">
					<h5>OUR QUALITY</h5>
					<p>We are unique. Check out these features...</p>
					<ul class="about-list">
						<li><i class="fa fa-check-circle-o"></i>Speed.</li>
						<li><i class="fa fa-check-circle-o"></i>Convenience. </li>
						<li><i class="fa fa-check-circle-o"></i>Affordable.</li>
						<li><i class="fa fa-check-circle-o"></i>Experienced.</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Review section -->
		<section class="review-section set-bg" data-setbg="img/review-bg.jpg">
			<div class="container">
				<div class="review-slider owl-carousel">
					<div class="review-item text-white">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>“findmyhouse was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
						<h5>Stacy Mc Neeley</h5>
						<span>CEP’s Director</span>
						<div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
					</div>
					<div class="review-item text-white">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>“findmyhouse was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
						<h5>Stacy Mc Neeley</h5>
						<span>CEP’s Director</span>
						<div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
					</div>
					<div class="review-item text-white">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>“findmyhouse was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
						<h5>Stacy Mc Neeley</h5>
						<span>CEP’s Director</span>
						<div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- Review section end-->


		<!-- Team section -->
		<section class="team-section spad pb-0">
			<div class="container">
				<div class="section-title text-center">
					<h3>OUR TEAM</h3>
					<p>The following are the founding members that make up the core team at Findmyhouse  </p>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="team-member">
							<div class="member-pic">
								<img src="img/team/1.jpg" alt="#">
								<div class="member-social">
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h5>Onuoha Oscar Osinachi</h5>
								<span>Software Developer</span>
								<div class="member-contact">
									<p><i class="fa fa-phone"></i>(+234) 814 214 6183</p>
									<p><i class="fa fa-envelope"></i>devlegendoscar@gmail.com</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="team-member">
							<div class="member-pic">
								<img src="img/team/2.jpg" alt="#">
								<div class="member-social">
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h5>Sandra PeakLady</h5>
								<span>Content Developer </span>
								<div class="member-contact">
									<p><i class="fa fa-phone"></i>(234) 666 121 2243</p>
									<p><i class="fa fa-envelope"></i>sandra@gmail.com</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="team-member">
							<div class="member-pic">
								<img src="img/team/3.jpg" alt="#">
								<div class="member-social">
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h5>Amadi Austin</h5>
								<span>Web Developer</span>
								<div class="member-contact">
									<p><i class="fa fa-phone"></i>(234) 666 121 2255</p>
									<p><i class="fa fa-envelope"></i>rexteroxy@gmail.com</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mt-lg-5">
						<div class="team-member">
							<div class="member-pic">
								<img src="img/team/3.jpg" alt="#">
								<div class="member-social">
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h5>Valentine</h5>
								<span>UI/UX Designer</span>
								<div class="member-contact">
									<p><i class="fa fa-phone"></i>(234) 666 121 2288</p>
									<p><i class="fa fa-envelope"></i>valentine@gmail.com</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mt-lg-5">
						<div class="team-member">
							<div class="member-pic">
								<img src="img/team/2.jpg" alt="#">
								<div class="member-social">
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h5>Justus</h5>
								<span>Marketer</span>
								<div class="member-contact">
									<p><i class="fa fa-phone"></i>(234) 666 121 2288</p>
									<p><i class="fa fa-envelope"></i>justus@gmail.com</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mt-lg-5">
						<div class="team-member">
							<div class="member-pic">
								<img src="img/team/4.jpg" alt="#">
								<div class="member-social">
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h5>Anthony</h5>
								<span>Frontend Designer</span>
								<div class="member-contact">
									<p><i class="fa fa-phone"></i>(234) 666 121 2288</p>
									<p><i class="fa fa-envelope"></i>anthony@gmail.com</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- Team section end-->
	</section>
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
