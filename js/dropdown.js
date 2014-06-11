$('body').ready(function()
	{
		var isOpen = false;
		$('.dropdown').click(function()
			{
				$(this).find('.sub_navigation').slideToggle();
				$('.bd-container1').slideUp();
				$('.bd-container2').slideUp();
				$('.bd-container3').slideUp();
				$('.bd-container4').slideUp();
				if (!isOpen)
				{
					$('.arr').css("margin-top", "0");
					isOpen = true;
				}
				else
				{
					$('.arr').css("margin-top", "-7px");
					isOpen = false;
				};
				
			}
		);
		$('#dest-nav').click(function()
			{
				$('.bd-container1').slideToggle();
				$('.sub_navigation').slideUp();
				$('.bd-container2').slideUp();
				$('.bd-container3').slideUp();
				$('.bd-container4').slideUp();
				if (isOpen)
				{
					$('.arr').css("margin-top", "-7px");
					isOpen = false;
				}
			}

		)
		$('#pop-nav').click(function()
			{
				$('.bd-container2').slideToggle();
				$('.bd-container1').slideUp();
				$('.sub_navigation').slideUp();
				$('.bd-container3').slideUp();
				$('.bd-container4').slideUp();
				if (isOpen)
				{
					$('.arr').css("margin-top", "-7px");
					isOpen = false;
				}

			}
		)
		$('#soc-nav').click(function()
			{
				$('.bd-container3').slideToggle();
				$('.bd-container1').slideUp();
				$('.bd-container2').slideUp();
				$('.sub_navigation').slideUp();
				$('.bd-container4').slideUp();
				if (isOpen)
				{
					$('.arr').css("margin-top", "-7px");
					isOpen = false;
				}
			}

		)
		$('#cat-nav').click(function()
			{
				$('.bd-container4').slideToggle();
				$('.bd-container1').slideUp();
				$('.bd-container2').slideUp();
				$('.bd-container3').slideUp();
				$('.sub_navigation').slideUp();
				if (isOpen)
				{
					$('.arr').css("margin-top", "-7px");
					isOpen = false;
				}
			}
		)

		$('#mob-nav').click(function()
			{
				$('#mob-drop').slideToggle();
			}
		)

		$('#foot-nav').click(function()
			{
				$('#foot-drop').slideToggle();
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

		$('.home-post-roundel').each(function(i)
			{
				var num = ( i%6 ) +1;
				
				$(this).addClass('roundel-' + num);
			}
		)
		
		$('.mob_post_desc').each(function(j)
			{
				var jnum = ( j%6 ) + 1;
				$(this).addClass('mob-post-desc-' + jnum)
			}
		)
		/*
		var mobFooterButton = $('#foot-nav');
		var mobFooterButtonPos = mobFooterButton.offset();

		var mobMenuHeight = $('#foot-drop').height();
		var footerBottom = parseInt(mobFooterButtonPos.top-mobMenuHeight);
		console.log(mobFooterButtonPos.top);
		console.log(mobMenuHeight);
		console.log(footerBottom);
		
		$('#foot-drop').css( "bottom", -(footerBottom-153) +"px" );
		*/
	}


);