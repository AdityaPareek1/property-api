 
 $("li.menu-item-has-children").on("click", "span.arrowicon", function(e) {
e.preventDefault();
e.stopPropagation();
$(this).toggleClass("open")
$(this).next("ul").slideToggle()
}),
$(".menu-item-has-children > a:first-child").after('<span class="arrowicon"><i class="fa fa-chevron-right"></i></span>')
 
		
    $(".navbar-fostrap").click(function() {
        $(".navigation").toggleClass("visible"), $("body").toggleClass("open_menu")
    })
;



 

	
 
$('.slider_home_sec').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:4
        },
    
      
    }
})



$('.step_form').owlCarousel({
    loop:true,
  navText: ["<div class='nav-button owl-prev default_btn'>Previous</div>", "<div class='nav-button owl-next default_btn'>Next</div>"],
	nav:true,
    responsive:{
        0:{
 items:1,
        loop:false,
        center:true,
        margin:10,
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: 'URLHash'
		},
 
    }
});



 























 
 
 
 
 
 $(window).scroll(function(){
    if ($(window).scrollTop() >= 2) {
        $('.header').addClass('sticky');
    }
    else {
        $('.header').removeClass('sticky');
    }	
	$(window).scrollTop() >= 80 ? ($(".scroll-to-target").fadeIn(500)) : ($(".scroll-to-target").fadeOut(500))
});	
 
 
 
 


$(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});








 
if ($('.zoom-gallery').length) {
$('.zoom-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: true,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('.g_overlay');
			}
		}
		
	});
}
 





 
						 


 