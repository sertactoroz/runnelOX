$(document).ready(function () {
    var referrer = document.referrer;
    console.log(referrer);

    $("#account-btn").click(function (event) {
        $("#signin-response-message").html('<div class="valid">Logging you in...</div>');

        let formData = {
            email: $("#email").val(),
            password: $("#password").val(),
            rememberme: $("#rememberme").val()
        };
        // console.log('formData', formData);

        $.ajax({
            type: "POST",
            url: "api/login_api.php",
            data: formData,
            dataType: 'json',
            encode: false,
        }).done(function (data) {
            console.log('Response data:', data);

            if (data.success) {
                if (data.rememberme == "on") {
                    localStorage.setItem("name", data.name);
                    localStorage.setItem("email", data.email);
                    localStorage.setItem("userid", data.userid);
                    sessionStorage.setItem("name", data.name);
                    sessionStorage.setItem("email", data.email);
                    sessionStorage.setItem("userid", data.userid);
                } else {
                    sessionStorage.setItem("name", data.name);
                    sessionStorage.setItem("email", data.email);
                    sessionStorage.setItem("userid", data.userid);
                }
                //token kullanmak gerekiyor
                // updateButtons();
                //Mesajı göster 
                $("#signin-response-message").html('<div class="valid">' + data.message + '</div>');
                //1 saniye bekle, referansa git

                setTimeout(function () {
                    if (referrer != null) {
                        window.location.href = referrer;
                        // console.log('Referer page exists');
                    } else {
                        console.log('Referer page does not exist');
                        // Redirect to your default page if no referrer is available
                        // window.location.href = "index.php?p=dashboard";
                    }
                }, 1000);
            } else {
                // Show failure message
                $("#signin-response-message").html(
                    '<div class="alert alert-fail">' + data.message + "</div>"
                );
            }
        }).fail(function (data) {
            console.log('Error:', data);
            $("#signin-response-message").html(
                '<div class="alert alert-fail">' + data.message + "</div>"
            );
        });

        event.preventDefault();
    });

    // Set default values for testing
    $("#email").val("msertactoroz@test.com");
    $("#password").val("1234Abcd");

});