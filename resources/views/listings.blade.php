@extends('layouts.master')

@section('content')

<!-- Page top section -->
<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container text-white">
			<h2>Property Listings</h2>
			<h6 class="text-danger"> Browse through our vast catalogue of property listings and find your dream house</h6>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Property Listings</span>
		</div>
	</div>


	<!-- page -->
	<section class="page-section categories-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					@if(count($properties) > 0)

                @foreach($properties->all() as $property)
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="{{$property->property_image}}">
							<div class="sale-notic">{{$property->status}}</div>
							
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>{{$property->address}}</h5>
								@foreach($locations->all() as $location)
								
								<p><i class="fa fa-map-marker"></i> {{$location->location}}</p>
								@endforeach
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
									<a href='{{ url("/listview/{$property->id}") }}'>
                                <span class="fa fa-eye">View Inside</span>
                            </a>
										<p><i class="fa fa-bed"></i> {{$property->bedroom}}</p>
									</div>
									<div class="rf-right">
										
										<p><i class="fa fa-bath"></i> {{$property->bathroom}}</p>
									</div>
								</div>
								<div class="room-info">
									 <div class="rf-left">
										<p>{{$property->description}}</p>
									</div> 
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> {{date('M j, Y h:i', strtotime($property->updated_at))}}</p>
									</div>
								</div>
							</div>
							<a target="blank" href="single-list.php" class="room-price">{{$property->price}}</a>
						</div>
					</div>
				</div>
				@endforeach
                @else
                <h2>NO POST AVAILABLE</h2>

                @endif
                {{$properties->links()}}
				
			
		</div>
	</section>
	<!-- page end -->


	


@endsection
