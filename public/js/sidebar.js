jQuery(document).ready(function($) 
{
	$('#sidebar a').hover(
		function()
		{
			$(this).animate({
				"padding-left":"+=20%"
				},200,
				function() {
					
				}
				);
				
		},
		function()
		{
			$(this).animate({
					"padding-left":"-=20%"
					},200,
					function() { $(this).clearQueue().removeAttr('style');
								
									}
					);
		}
		);




});