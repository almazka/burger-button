jQuery(document).ready(function($){

	/* Menu */
	$('.hmbrgr').hmbrgr({
		width     : 45,
		height    : 50,
		barHeight : 9
	});

	$('.hmbrgr').click(function(event) {
		$('#primary-navbar-collapse').stop().slideToggle().toggleClass('animated slideInTop');
	});
}); /* jQuery end */