/* Bootstrap Carousel initilization */
			
	$('#myCarousel').carousel();
	/* Preloader initilization */
	

	//<![CDATA[
		$(window).load(function() { // makes sure the whole site is loaded
			$("#status").fadeOut(); // will first fade out the loading animation
			$("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
			
		})
	//]]>



/*$(window).load(function(){
     $(".navbar").sticky({ topSpacing: -1 });
  });*/
  
$('body').scrollspy({ target: '.navbar-default' })
	

	

/* Responsive Nav initilization */

	$(".collapse,.nav-collapse").collapse()





	
	/* Scrollbar  initilization */
	$(document).ready(function() {
  
    var nicesx = $(".pt-page").niceScroll({touchbehavior:false,cursorcolor:"#FFF",cursoropacitymax:0.5,cursorwidth:10});
    
  });
   
  
  
// Plugin @RokoCB :: Return the visible amount of px
// of any element currently in viewport.
// stackoverflow.com/questions/24768795/
/*;(function($, win) {
  $.fn.inViewport = function(cb) {
     return this.each(function(i,el){
       function visPx(){
         var H = $(this).height(),
             r = el.getBoundingClientRect(), t=r.top, b=r.bottom;
         return cb.call(el, Math.max(0, t>0? H-t : (b<H?b:H)));  
       } visPx();
       $(win).on("resize scroll", visPx);
     });
  };
}(jQuery, window));



$(".pt-page-2").inViewport(function(px){
    if(px) $(this).addClass(".circle") ;
});*/