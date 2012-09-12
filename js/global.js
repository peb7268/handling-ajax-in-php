jQuery(document).ready(function($) {
	var form = '';
	$('#form').submit(function(event){
			event.preventDefault();
			var data = $(this).serialize();


			$.ajax({
				url: 'handler.php',
				type: 'POST',
				data: data

			}).done(function(data){
				console.log(data);
			});
	});
});
