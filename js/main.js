$(document).ready(function(){
	$('.toggle').click(function()
	{
		$('.nav li').slideToggle('normal');
	});
});
$(document).ready(function(){
	$('.nav li a').click(function()
	{
		$('a').removeClass('select');
		$(this).addClass('select');

	});
});
var owl = $('.owl-carousel');
              owl.owlCarousel({
                loop: true,
                nav: true,
                margin: 40,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  960: {
                    items: 2
                  },
                  1200: {
                    items: 2
                  }
                }
              });
              owl.on('mousewheel', '.owl-stage', function(e) {
                if (e.deltaY > 0) {
                  owl.trigger('next.owl');
                } else {
                  owl.trigger('prev.owl');
                }
                e.preventDefault();
});

