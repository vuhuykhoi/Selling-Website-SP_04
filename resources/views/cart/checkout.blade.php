@extends('layouts/master')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('checkout_style/styles/bootstrap-4.1.3/bootstrap.css') }}">
	<link rel="stylesheetcheckout_style/" type="text/css" href="{{ asset('checkout_style/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('checkout_style/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('checkout_style/plugins/OwlCarousel2-2.2.1/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('checkout_style/styles/checkout.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('checkout_style/styles/checkout_responsive.css') }}">
@endsection

@section('content')

	<!-- Checkout -->

	<div class="checkout">
		<div class="section_container">
			<div class="container">
				<div class="p-b-10">
					<h3 class="ltext-103 cl5">
					</br></br>
						Checkout
					</h3>
				</div>
				<div class="row">
					<div class="col">
						<div class="checkout_container d-flex flex-xxl-row flex-column align-items-start justify-content-start">
							
							<!-- Billing -->
							<div class="billing checkout_box">
								<div class="checkout_title">Billing Address</div>
								<div class="checkout_form_container">
									<form action="#" id="checkout_form" class="checkout_form">
										<div class="row">
											<div class="col-lg-6">
												<!-- Name -->
												<label for="checkout_name">First Name*</label>
												<input type="text" id="checkout_name" class="checkout_input" required="required">
											</div>
											<div class="col-lg-6">
												<!-- Last Name -->
												<label for="checkout_last_name">Last Name*</label>
												<input type="text" id="checkout_last_name" class="checkout_input" required="required">
											</div>
										</div>
										<div>
											<!-- Company -->
											<label for="checkout_company">Company</label>
											<input type="text" id="checkout_company" class="checkout_input">
										</div>
										<div>
											<!-- Country -->
											<label for="checkout_country">Country*</label>
											<select name="checkout_country" id="checkout_country" class="dropdown_item_select checkout_input" require="required">
												<option></option>
												<option>Lithuania</option>
												<option>Sweden</option>
												<option>UK</option>
												<option>Italy</option>
											</select>
										</div>
										<div>
											<!-- Address -->
											<label for="checkout_address">Address*</label>
											<input type="text" id="checkout_address" class="checkout_input" required="required">
											<input type="text" id="checkout_address_2" class="checkout_input checkout_address_2" required="required">
										</div>
										<div>
											<!-- Zipcode -->
											<label for="checkout_zipcode">Zipcode*</label>
											<input type="text" id="checkout_zipcode" class="checkout_input" required="required">
										</div>
										<div>
											<!-- City / Town -->
											<label for="checkout_city">City/Town*</label>
											<select name="checkout_city" id="checkout_city" class="dropdown_item_select checkout_input" require="required">
												<option></option>
												<option>City</option>
												<option>City</option>
												<option>City</option>
												<option>City</option>
											</select>
										</div>
										<div>
											<!-- Province -->
											<label for="checkout_province">Province*</label>
											<select name="checkout_province" id="checkout_province" class="dropdown_item_select checkout_input" require="required">
												<option></option>
												<option>Province</option>
												<option>Province</option>
												<option>Province</option>
												<option>Province</option>
											</select>
										</div>
										<div>
											<!-- Phone no -->
											<label for="checkout_phone">Phone no*</label>
											<input type="phone" id="checkout_phone" class="checkout_input" required="required">
										</div>
										<div>
											<!-- Email -->
											<label for="checkout_email">Email Address*</label>
											<input type="phone" id="checkout_email" class="checkout_input" required="required">
										</div>
										<div class="checkout_extra">
											<ul>
												<li class="billing_info d-flex flex-row align-items-center justify-content-start">
													<label class="checkbox_container">
														<input type="checkbox" id="cb_1" name="billing_checkbox" class="billing_checkbox">
														<span class="checkbox_mark"></span>
														<span class="checkbox_text">Terms and conditions</span>
													</label>
												</li>
												<li class="billing_info d-flex flex-row align-items-center justify-content-start">
													<label class="checkbox_container">
														<input type="checkbox" id="cb_2" name="billing_checkbox" class="billing_checkbox">
														<span class="checkbox_mark"></span>
														<span class="checkbox_text">Create an account</span>
													</label>
												</li>
												<li class="billing_info d-flex flex-row align-items-center justify-content-start">
													<label class="checkbox_container">
														<input type="checkbox" id="cb_3" name="billing_checkbox" class="billing_checkbox">
														<span class="checkbox_mark"></span>
														<span class="checkbox_text">Subscribe to our newsletter</span>
													</label>
												</li>
											</ul>
										</div>
									</form>
								</div>
							</div>

							<!-- Cart Total -->
							<div class="cart_total">
								<div class="cart_total_inner checkout_box">
									<div class="checkout_title">Cart total</div>
									<ul class="cart_extra_total_list">
										<li class="d-flex flex-row align-items-center justify-content-start">
											<div class="cart_extra_total_title">Subtotal</div>
											<div class="cart_extra_total_value ml-auto">$29.90</div>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<div class="cart_extra_total_title">Shipping</div>
											<div class="cart_extra_total_value ml-auto">Free</div>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<div class="cart_extra_total_title">Total</div>
											<div class="cart_extra_total_value ml-auto">$29.90</div>
										</li>
									</ul>

									<!-- Payment Options -->
									<div class="payment">
										<div class="payment_options">
											<label class="payment_option clearfix">Paypal
												<input type="radio" name="radio">
												<span class="checkmark"></span>
											</label>
											<label class="payment_option clearfix">Cach on delivery
												<input type="radio" name="radio">
												<span class="checkmark"></span>
											</label>
											<label class="payment_option clearfix">Credit card
												<input type="radio" name="radio">
												<span class="checkmark"></span>
											</label>
											<label class="payment_option clearfix">Direct bank transfer
												<input type="radio" checked="checked" name="radio">
												<span class="checkmark"></span>
											</label>
										</div>
									</div>

									<!-- Order Text -->
									<div class="order_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra temp or so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</div>

									<div class="checkout_button trans_200"><a href="checkout.html">place order</a></div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@section('script')
		<script src="{{ asset('checkout_style/js/jquery-3.2.1.min.js') }}"></script>
		<script src="{{ asset('checkout_style/styles/bootstrap-4.1.3/popper.js') }}"></script>
		<script src="{{ asset('checkout_style/styles/bootstrap-4.1.3/bootstrap.min.js') }}"></script>
		<script src="{{ asset('checkout_style/plugins/greensock/TweenMax.min.js') }}"></script>
		<script src="{{ asset('checkout_style/plugins/greensock/TimelineMax.min.js') }}"></script>
		<script src="{{ asset('checkout_style/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
		<script src="{{ asset('checkout_style/plugins/greensock/animation.gsap.min.js') }}"></script>
		<script src="{{ asset('checkout_style/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
		<script src="{{ asset('checkout_style/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
		<script src="{{ asset('checkout_style/plugins/easing/easing.js') }}"></script>
		<script src="{{ asset('checkout_style/plugins/parallax-js-master/parallax.min.js') }}"></script>
		<script src="{{ asset('checkout_style/js/checkout.js') }}"></script>
	@endsection

@endsection
