$(document).on( 'ready' , function() {
// alert('ok')
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
$('.mp .glyphicon').on('click' , function(){
	$('.glyphicon').not($(this)).removeClass('glyphicon-circle-arrow-up')
	$('.glyphicon').not($(this)).addClass('glyphicon-circle-arrow-down')


	if ($(this).hasClass('glyphicon-circle-arrow-up')) {
		$(this).removeClass('glyphicon-circle-arrow-up');
		$(this).addClass('glyphicon-circle-arrow-down');		
	}else{
		$(this).removeClass('glyphicon-circle-arrow-down');
		$(this).addClass('glyphicon-circle-arrow-up');
	}
})
});