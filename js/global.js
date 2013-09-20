/* 	This simple script is the client side implementation
*	for my first cross domain ajax proxy script. It's mostly
* 	just a simple excercise and reference for myself.
*/
jQuery(document).ready(function($) {
	$('form a').on('click', function(evt){
		evt.preventDefault();
		var site, method;
		site 	= $('input[name="site"]').val();
		method 	= $('input[name="method"]').val();

		$.ajax('handler.php', {
			data: { 'site' : site,
					'method': method
			},
			type: method
		}).done(function(resp){
			//Executes a curl request cross domain using a PHP proxy that leverages curl.
			console.log(resp);
		});
	});

});