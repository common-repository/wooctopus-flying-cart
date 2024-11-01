jQuery(document).ready(function($) {
	'use strict';

	/*** Script for Dot ***/
	
	$('.add_to_cart_button').on('click', function () {
		
		let cart = $('#elementor-menu-cart__toggle_button');
		let leftCart;
		let topCart;
		let topDot = $(this).offset().top;
		let leftDot = $(this).offset().left;
	  
		   topCart = cart.offset().top;
		   leftCart = cart.offset().left;

		let imgtodrag = $(this).parent('.products.columns-6 .product').find("img").eq(0);

	  if (imgtodrag) {
		let dots =  $('<div class="dots"></div>')
				   .css('position', 'absolute')
				   .css('width', '35px')
				   .css('height', '35px')
				   .css('background-color', '#ffd113')
				   .css('border-radius', '100px')
				   .css('z-index', '100')
				   .offset({top: topDot, left: leftDot }).appendTo($('body'));
	
		  dots.animate({
			left: leftCart+15,
			top: topCart,
			height:20,
			width:20
		  }, 1200,  function () {
				$(this).detach()
			} );
	
		 }
		});

});
