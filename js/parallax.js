$(document).ready(function()
	{
		$(window).bind('scroll', function(e)
		{
			parallaxScroll();
		});

		$(window).scroll(function()
		{
			if ($(this).scrollTop() > 700)
			{
				$('#ps-cont').addClass('sharing-fixed');
			} else {
				$('#ps-cont').removeClass('sharing-fixed');
			}
		})
	}
);

function parallaxScroll()
{
	var scrolled = $(window).scrollTop();

	$('#rou1').css( 'bottom', ( 225 + ( scrolled * .1 ) ) + 'px');
	$('#rou2').css( 'bottom', ( 161 + ( scrolled * .1 ) ) + 'px');
	$('#rou3').css( 'bottom', ( 161 + ( scrolled * .1 ) ) + 'px');

	$('#rou-post').css( 'bottom', ( 169 + ( scrolled * .1) ) + 'px' );
}