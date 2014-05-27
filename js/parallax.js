$(document).ready(function()
	{
		$(window).bind('scroll', function(e)
		{
			parallaxScroll();
		});
	}
);

function parallaxScroll()
{
	var scrolled = $(window).scrollTop();

	$('#rou1').css( 'bottom', ( 225 + ( scrolled * .1 ) ) + 'px');
	$('#rou2').css( 'bottom', ( 161 + ( scrolled * .1 ) ) + 'px');
	$('#rou3').css( 'bottom', ( 161 + ( scrolled * .1 ) ) + 'px');
}