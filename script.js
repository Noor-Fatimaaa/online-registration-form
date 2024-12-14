$(document).ready(function () {
    $('#applicationForm').on('submit', function (e) {
        e.preventDefault();

        // Collect form data
        const formData = {
            name: $('#firstName').val() + ' ' + $('#lastName').val(),
            dob: $('#dob').val(),
            gender: $('input[name="gender"]:checked').val(),
            address: $('#address1').val() + ', ' + $('#city').val() + ', ' +
                $('#region').val() + ', ' + $('#postal').val() + ', ' + $('#country').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
            program: $('#program').val(),
            degree: $('input[name="degree"]:checked').val()
        };

        // Send data via AJAX
        $.ajax({
            url: 'process.php',
            type: 'POST',
            data: formData,
            success: function (response) {
                alert('Application Submitted Successfully');
                $('#applicationForm')[0].reset();
            },
            error: function () {
                alert('An error occurred. Please try again.');
            }
        });
    });
});
