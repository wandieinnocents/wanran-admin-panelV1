@extends('frontend.layouts_frontend.master')

@section('title')

@endsection

@section('content')
<!-- content  -->

<!--================Slider Area =================-->
@include('frontend.includes_frontend.slider')
		<!--================End Slider Area =================-->
        
<!-- Spicy Section -->
<section class="spicy-section">
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Flavour Block -->
					<div class="flavour-block col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<img src="assets/frontend_assets/assets/images/resource/pizza.jpg" alt="" />
								<div class="overlay-box">
									<div class="content">
										<h2>Pizza Calabriz <span>Mascarpone · Nduja Spicy</span></h2>
										<a href="shop-single.html" class="title">Hot & Spicy</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Drink Block -->
					<div class="drink-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<img src="assets/frontend_assets/assets/images/resource/drink.jpg" alt="" />
								<div class="overlay-box">
									<div class="content">
										<h2>Iced <span>Coffee</span></h2>
										<div class="title">Summer</div>
										<a href="shop-single.html" class="read-more">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Chips Block -->
					<div class="chips-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<img src="assets/frontend_assets/assets/images/resource/chips.jpg" alt="" />
								<div class="overlay-box">
									<div class="content">
										<h2>Get your <br> <span>free</span></h2>
										<div class="title">French Fry</div>
										<a href="shop-single.html" class="read-more">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Spicy Section -->

		<!-- Products Section -->
		<section class="products-section">
			<div class="auto-container">

				<!-- Sec Title -->
				<div class="sec-title centered">
					<h2>Our Products</h2>
				</div>

				<!-- MixitUp Galery -->
				<div class="mixitup-gallery">

					<!--Filter-->
					<div class="filters clearfix">
						<ul class="filter-tabs filter-btns clearfix">
							<li class="active filter" data-role="button" data-filter="all">All</li>
							<li class="filter" data-role="button" data-filter=".pizza">Pizza</li>
							<li class="filter" data-role="button" data-filter=".burgers">Burgers</li>
							<li class="filter" data-role="button" data-filter=".wraps">Wraps</li>
							<li class="filter" data-role="button" data-filter=".fries">Fries</li>
							<li class="filter" data-role="button" data-filter=".salad">Salad</li>
							<li class="filter" data-role="button" data-filter=".fest">Spice fest</li>
							<li class="filter" data-role="button" data-filter=".beverages">Beverages</li>
						</ul>
					</div>

					<div class="filter-list row clearfix">

						<!-- Products Block -->
						<div class="product-block all mix salad fest wraps fries col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<figure class="image-box">
									<img src="assets/frontend_assets/assets/images/resource/products/1.jpg" alt="">
								</figure>
								<div class="lower-content">
									<h4><a href="shop-single.html">Chicken Burger</a></h4>
									<div class="text">Our flavors & ingredients to build our local burgers.</div>
									<div class="price">$17.00</div>
									<div class="lower-box">
										<a href="shop-single.html" class="theme-btn btn-style-five"><span
												class="txt">Order Now</span></a>
									</div>
								</div>
							</div>
						</div>

						<!-- Products Block -->
						<div class="product-block all mix beverages wraps col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<figure class="image-box">
									<img src="assets/frontend_assets/assets/images/resource/products/2.jpg" alt="">
								</figure>
								<div class="lower-content">
									<h4><a href="shop-single.html">Classic Smash</a></h4>
									<div class="text">Our flavors & ingredients to build our local burgers.</div>
									<div class="price">$17.00</div>
									<div class="lower-box">
										<a href="shop-single.html" class="theme-btn btn-style-five"><span
												class="txt">Order Now</span></a>
									</div>
								</div>
							</div>
						</div>

						<!-- Products Block -->
						<div class="product-block all mix salad fest burgers beverages col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<figure class="image-box">
									<img src="assets/frontend_assets/assets/images/resource/products/1.jpg" alt="">
								</figure>
								<div class="lower-content">
									<h4><a href="shop-single.html">Classic Smash</a></h4>
									<div class="text">Our flavors & ingredients to build our local burgers.</div>
									<div class="price">$17.00</div>
									<div class="lower-box">
										<a href="shop-single.html" class="theme-btn btn-style-five"><span
												class="txt">Order Now</span></a>
									</div>
								</div>
							</div>
						</div>

						<!-- Products Block -->
						<div class="product-block all mix burgers col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<figure class="image-box">
									<img src="assets/frontend_assets/assets/images/resource/products/3.jpg" alt="">
								</figure>
								<div class="lower-content">
									<h4><a href="shop-single.html">Classic Smash</a></h4>
									<div class="text">Our flavors & ingredients to build our local burgers.</div>
									<div class="price">$17.00</div>
									<div class="lower-box">
										<a href="shop-single.html" class="theme-btn btn-style-five"><span
												class="txt">Order Now</span></a>
									</div>
								</div>
							</div>
						</div>

						<!-- Products Block -->
						<div class="product-block all mix pizza wraps beverages col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<figure class="image-box">
									<img src="assets/frontend_assets/assets/images/resource/products/4.jpg" alt="">
								</figure>
								<div class="lower-content">
									<h4><a href="shop-single.html">Chicken Burger</a></h4>
									<div class="text">Our flavors & ingredients to build our local burgers.</div>
									<div class="price">$17.00</div>
									<div class="lower-box">
										<a href="shop-single.html" class="theme-btn btn-style-five"><span
												class="txt">Order Now</span></a>
									</div>
								</div>
							</div>
						</div>

						<!-- Products Block -->
						<div class="product-block all mix salad pizza burgers fries col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<figure class="image-box">
									<img src="assets/frontend_assets/assets/images/resource/products/5.jpg" alt="">
								</figure>
								<div class="lower-content">
									<h4><a href="shop-single.html">Soft Drink</a></h4>
									<div class="text">Our flavors & ingredients to build our local burgers.</div>
									<div class="price">$17.00</div>
									<div class="lower-box">
										<a href="shop-single.html" class="theme-btn btn-style-five"><span
												class="txt">Order Now</span></a>
									</div>
								</div>
							</div>
						</div>

						<!-- Products Block -->
						<div class="product-block all mix salad wraps pizza fries col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<figure class="image-box">
									<img src="assets/frontend_assets/assets/images/resource/products/6.jpg" alt="">
								</figure>
								<div class="lower-content">
									<h4><a href="shop-single.html">Classic Smash</a></h4>
									<div class="text">Our flavors & ingredients to build our local burgers.</div>
									<div class="price">$17.00</div>
									<div class="lower-box">
										<a href="shop-single.html" class="theme-btn btn-style-five"><span
												class="txt">Order Now</span></a>
									</div>
								</div>
							</div>
						</div>

						<!-- Products Block -->
						<div
							class="product-block all mix pizza wraps burgers beverages salad col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<figure class="image-box">
									<img src="assets/frontend_assets/assets/images/resource/products/1.jpg" alt="">
								</figure>
								<div class="lower-content">
									<h4><a href="shop-single.html">Classic Smash</a></h4>
									<div class="text">Our flavors & ingredients to build our local burgers.</div>
									<div class="price">$17.00</div>
									<div class="lower-box">
										<a href="shop-single.html" class="theme-btn btn-style-five"><span
												class="txt">Order Now</span></a>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>

			</div>
		</section>
		<!-- End Products Section -->

		<!-- Order Section -->
		<section class="order-section" style="background-image: url(assets/frontend_assets/assets/images/background/1.jpg)">
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Empty Column -->
					<div class="empty-column col-lg-5 col-md-12 col-sm-12">

					</div>

					<!-- Content Column -->
					<div class="content-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="offer">Exclusive Offer</div>
							<h1>Veggi Fun Pizza</h1>
							<div class="order-price">
								<div class="price-inner">
									<div class="price"><sup>$</sup>12<sub>Each</sub></div>
									<ul class="order-offer">
										<li>- Chicken Hallon</li>
										<li>- Summer Pizza</li>
										<li>- Vegge Lover</li>
									</ul>
								</div>
							</div>
							<a href="shop-single.html" class="theme-btn btn-style-two"><span class="txt">Order
									Now</span></a>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Order Section -->

		<!-- Services Section -->
		<section class="services-section">
			<!-- Side Image -->
			<div class="side-image"><img src="assets/frontend_assets/assets/images/resource/service-image.jpg" alt="" /></div>
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Service Block -->
					<div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<img src="assets/frontend_assets/assets/images/resource/service-1.png" alt="" />
							</div>
							<h6>Free shipping on <br> first order</h6>
							<div class="text">Sign up for updates and <br> get free shipping</div>
						</div>
					</div>

					<!-- Service Block -->
					<div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<img src="assets/frontend_assets/assets/images/resource/service-2.png" alt="" />
							</div>
							<h6>Best Taste <br> Guaranttee</h6>
							<div class="text">We use best ingredients to <br> cook the taste food.</div>
						</div>
					</div>

					<!-- Service Block -->
					<div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<img src="assets/frontend_assets/assets/images/resource/service-3.png" alt="" />
							</div>
							<h6>Variety of <br> Dishes</h6>
							<div class="text">We give variety of dishes, <br> deserts, and drinks</div>
						</div>
					</div>

					<!-- Service Block -->
					<div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<img src="assets/frontend_assets/assets/images/resource/service-4.png" alt="" />
							</div>
							<h6>25 Minites <br> Delivery</h6>
							<div class="text">We deliver your food at <br> your dooe that you order</div>
						</div>
					</div>

				</div>
			</div>


		</section>

@endsection