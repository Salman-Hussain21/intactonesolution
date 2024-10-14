	jQuery(document).ready(function($) {
    $('#contact-form').on('submit', function(e) {
        e.preventDefault(); // Prevents the default form submission

        // Collect form data
        var formData = {
            'action': 'handle_form_submission',
            'name': $('#name').val(),
            'email': $('#email').val(),
            'phone': $('#phone').val(),
            'company': $('#company').val(),
            'service': $('#service').val(),
            'message': $('#message').val()
        };

        // Perform AJAX request
        $.ajax({
            type: 'POST',
            url: ajaxurl, // Provided by wp_localize_script in WordPress
            data: formData,
            success: function(response) {
                if (response.success) {
                    displayNotification('Your Response has been submitted. We will reply you ASAP', true);
                    $('#contact-form')[0].reset(); // Clear form after success
                } else {
                    displayNotification('Error: ' + response.data, false);
                }
            },
            error: function() {
                displayNotification('Submission failed, please try again.', false);
            }
        });
    });

    // Function to display notification
    function displayNotification(message, isSuccess) {
        const notice = $('<div class="notification"></div>');
        $('body').append(notice);

        notice.text(message)
            .css({
                'position': 'fixed',
                'top': '120px',
                'right': '20px',
                'background-color': isSuccess ? '#d4edda' : '#f8d7da',
                'border-left': '5px solid' + (isSuccess ? ' #155724' : '#721c24'),
                'color': isSuccess ? '#155724' : '#721c24',
                'padding': '15px',
                'box-shadow': '0 2px 8px rgba(0, 0, 0, 0.2)',
                'z-index': '9999',
                'font-size': '16px',
                'width': '300px'
            });

        // Auto-remove the notification after 5 seconds
        setTimeout(function() {
            notice.fadeOut(function() {
                $(this).remove(); // Remove the notification from DOM
            });
        }, 5000);
    }
});
