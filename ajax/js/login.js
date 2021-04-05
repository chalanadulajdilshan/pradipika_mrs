$(document).ready(function () {
    $('button[id="login"').click(function () {

        $username = $("#username").val();
        $password = $("#password").val();

        if ($username === "")
        {
            $('#message').text('Please enter your Username');
        } else if ($password === "") {
            $('#message').text('Please enter your Password');
        } else {
            var formData = new FormData($("form#formlogin")[0]);
            $.ajax({
                url: "ajax/php/login.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function (result) {
                    if (result.status == 'success') {
                        window.location.replace("index.php");
                    } else {
                        $('#message').text(result.message);
                    }
                }
            });
        }

        return false;
    });


});