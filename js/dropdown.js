$('body').ready(function()
	{
		$('.dropdown').click(function()
			{
				$(this).find('.sub_navigation').slideToggle();
			}
		);
		$('.big-dropdown').click(function()
			{
				$('.bd-container1').slideToggle();
			}

		)
	}
);