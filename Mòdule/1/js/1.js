$(document).ready(function() {
    $('input.submit-btn').click(function() {
        if ($('input.input-name').val() == '' || $('input.input-name').val() == "null") {
            $('.validation-form.error').css('display', 'block');
        } else {
            $('.validation-form.error').css('display', 'none');
            $('.validation-form.success').css('display', 'block');
        }
    })
})