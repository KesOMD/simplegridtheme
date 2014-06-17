$(document).ready(function()
	{
		$(window).bind('scroll', function(e)
		{
			parallaxScroll();
		});

		$(window).scroll(function()
		{
			if ( $(window).width() > 799)
			{
				if ($(this).scrollTop() > 700)
				{
					$('#ps-cont').addClass('sharing-fixed');
				}
				else
				{
					$('#ps-cont').removeClass('sharing-fixed');
				}
			}
			
		})

		//FIX PADDING ON PINTEREST WIDGET
		var rowChildren = $('.row').children();
		var firstRowLastChild = rowChildren.eq(3);
		var secondRowLastChild = rowChildren.eq(7);
		var thirdRowLastChild = rowChildren.eq(11);

		firstRowLastChild.css("margin-right", "0");
		secondRowLastChild.css("margin-right", "0");
		thirdRowLastChild.css("margin-right", "0");
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