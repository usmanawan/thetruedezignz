/* Bootstrap Carousel initilization */
			
	$('#myCarousel').carousel();
	/* Preloader initilization */
	

	//<![CDATA[
		$(window).load(function() { // makes sure the whole site is loaded
			$("#status").fadeOut(); // will first fade out the loading animation
			$("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
			
		})
	//]]>



$(window).load(function(){
     $(".navbar").sticky({ topSpacing: -1 });
  });
  
$('body').scrollspy({ target: '.navbar-default' })
	

	

/* Responsive Nav initilization */

	$(".collapse,.nav-collapse").collapse()





	
	/* Scrollbar  initilization*/
	$(document).ready(function() {
  
    var nicesx = $("body").niceScroll({touchbehavior:false,cursorcolor:"#cf199a",cursoropacitymax:0.9, horizrailenabled: false,cursorwidth:10});
    
  });
   
   
