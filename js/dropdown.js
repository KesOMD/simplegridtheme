$('body').ready(function()
	{
		$('.dropdown').click(function()
			{
				$(this).find('.sub_navigation').slideToggle();
			}
		);
		$('#dest-nav').click(function()
			{
				$('.bd-container1').slideToggle();
			}

		)
	}
);