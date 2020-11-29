(function($) {
	
$( '#ajax-contact' ).on( 'submit', function(e) {
      e.preventDefault();	
	
	var name = $('#name').val();
	var email = $('#email').val();
	var message = $('#message').val();
	// Get the messages div.
	var formMessages = $('#form-messages');
	
	var data = {
		name: name,
		email: email,
		message: message,
		action: 'my_action'
	};
	
	$.ajax({
		method: 'POST',
		url: my_ajax_url.ajaxurl,
		data: data,
		success: function(response) {
			console.log(response);
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('error');
			$(formMessages).addClass('success');

			// Set the message text.
			$(formMessages).text(response.data);

			// Clear the form.
			$('#name').val('');
			$('#email').val('');
			$('#message').val('');
		},
		fail: function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('success');
			$(formMessages).addClass('error');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		}
	});
});


	
})( jQuery );

