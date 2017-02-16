$(document).on( 'ready' , function() {
function pantalla(){
  pant = $(window).width();
  //console.info( 'la pantalla mide ' + pant + 'px' );
  if (pant <= 440) {
  	$('.sinBordeIndex p.contenido, .bordeIndex p.contenido').css('height','auto');
  }else{
  	$('.sinBordeIndex p.contenido, .bordeIndex p.contenido').css('height','115px');
  }
  }	
  pantalla();
$(window).resize(
  	function(){
  		pantalla();
  	})
    $('#myCarousel').carousel({
		interval:   4000
	});
	
	var clickEvent = false;
	$('#myCarousel').on('click', '.nav a', function() {
			clickEvent = true;
			$('.nav li').removeClass('active');
			$(this).parent().addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.nav').children().length -1;
			var current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.nav li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
$('span').on('mouseenter' , function(){
	$(this).popover('show')
})
$('span').on('mouseleave' , function(){
	$(this).popover('hide')
})
$(".fancybox").fancybox({
    helpers : {
        title: {
            type: 'outside'
        }
    }
});
	
	$("nav").find("a").click(function(e) {
	    e.preventDefault();
	    var section = $(this).attr("href");
	    $("html, body").animate({
	        scrollTop: $(section).offset().top
	    });
	});

	$('.linearight').last().removeClass('linearight');
	
});
