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
		$('#pop-nav').click(function()
			{
				$('.bd-container2').slideToggle();
			}
		)
		$('#soc-nav').click(function()
			{
				$('.bd-container3').slideToggle();
			}

		)
		$('#cat-nav').click(function()
			{
				$('.bd-container4').slideToggle();
			}
		)

		var idCount = 1;
		$('.home_post_box_top').each(function()
			{
				$(this).attr('id', 'pop' + idCount);
				idCount++;
			}
		)
		$( '#pop3' ).addClass( "home_post_box_last" );

		$( '.wpp-thumbnail' ).removeClass( "wpp-thumbnail" );
	}


);