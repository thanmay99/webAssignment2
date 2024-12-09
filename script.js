// script.js
$(document).ready(function () {
    $('#registration-form').submit(function (event) {
        let valid = true;

        // Check if inputs are filled
        $('input, textarea').each(function () {
            if ($(this).val().trim() === '') {
                alert('Please fill all the fields.');
                valid = false;
                return false; // Break the loop
            }
        });

        if (!valid) {
            event.preventDefault();
        }
    });
});
