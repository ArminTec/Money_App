$(document).ready(function(){
	var altura = $('.menu').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.menu').addClass('menu-fixed');
		} else {
			$('.menu').removeClass('menu-fixed');
		}
	});
 
});

.menu-fixed {
	position:fixed;
	z-index:1000;
	top:0;
	/*max-width:1000px;*/
	left:0;
	width:100%;
	box-shadow:0px 4px 3px rgba(0,0,0,.5);
}