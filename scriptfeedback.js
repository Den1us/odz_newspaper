$(document).ready(function () {
    $("#done").click( function () {
        $('#messageshow').hide();
        var name = $("#name").val();
        var email = $("#email").val();
        var subject = $("#subject").val();
        var message = $("#message").val();
        var fail = "";
        if (name.length < 3) fail = "Name must be more than 3 characters";
        else if (email.split('@').length - 1 == 0 || email.split('.').length - 1 == 0)
            fail = "You have entered an invalid email";
        else if (subject.length < 5)
            fail = "Message subject of at least 5 characters";
        else if (message.length < 20)
            fail = "Subject of at least 20 characters";
        if (fail != "") {
            $('#messageshow').html(fail + "<div class = 'clear'><br></div>");
            $('#messageshow').show();
            return false;
        }
        $.ajax({
           url: '/ajax/feedback.php',
            type : 'POST',
            cache: false,
            data: {'name': name, 'email': email, 'subject': subject, 'message': message},
            dataType: 'html',
            success: function (data) {
                    $('#messageshow').html(data + "<div class = 'clear'><br></div>");
                    $('#messageshow').show();
            }
        });
    });
});