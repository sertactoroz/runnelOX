
$(document).ready(function () {
    const signupButton = $("#signupbutton");
    const checkbox = $("#checkbox");
    const password = $("#password");
    const mobile = $("#mobile");
    const birthdate = $("#birthdate");

    function checkpwd() {
        let validLength = password.val().length >= 8;

        if (validLength && checkbox.prop('checked')) {
            signupButton.prop('disabled', false);
            console.log('signup button activated');
        } else {
            signupButton.prop('disabled', true);
            console.log('signup button de-activated');
        }
    }

    // When the user starts to type something inside the password field
    password.on("input", checkpwd);

    checkbox.on('change', function () {
        if (checkbox.prop('checked')) {
            signupButton.prop('disabled', false);
            console.log('signup button activated');
        } else {
            signupButton.prop('disabled', true);
            console.log('signup button de-activated');
        }
    });

    signupButton.click(function (event) {
        console.log('button clicked')
        event.preventDefault();
        let checkboxClicked = checkbox.prop('checked');
        let allConditionsMet = password.val().length >= 8 && checkboxClicked;
        if (allConditionsMet) {
            let formData = {
                fullname: $("#name").val(),
                email: $("#email").val(),
                password: $("#password").val(),
                mobile: $("#mobile").val(),
                birthdate: $("#birthdate").val(),
            };
            $.ajax({
                type: "POST",
                url: "api/signup.php",
                data: formData,
                dataType: 'json',
                encode: false,
            }).done(function (data) {
                console.log('done', data);
                if (data.success) {
                    localStorage.setItem("name", formData.fullname);
                    localStorage.setItem("email", formData.email);
                    localStorage.setItem("userid", data.userGuid);
                    sessionStorage.setItem("name", formData.fullname);
                    sessionStorage.setItem("email", formData.email);
                    sessionStorage.setItem("userid", data.userGuid);
                    console.log('data', data);
                    $('#signup-response-message').html('<div class="valid">' + data.message + '</div>');
                    setTimeout(function () {
                        window.location.href = "index.php?p=dashboard";
                    }, 1000);
                } else {
                    $('#signup-response-message').html('<div class="alert alert-fail">' + data.message + "</div>");
                }
            }).fail(function (data) {
                $('#signup-response-message').html('<div class="alert alert-fail">' + data.message + "</div>");
            });
        } else {
            $('#signup-response-message').html('<div class="alert alert-fail">Bir hata oluştu</div>');
        }
    });

    // Set initial values and check password on page load

    mail = Math.floor(Math.random() * 10000000000);
    $("#name").val("Name Surname");
    $("#email").val(mail + "test@test.com");
    $("#password").val("1234Abcd");
    $("#mobile").val("5325555555");
    $("#birthdate").val("1989-06-20");
    checkpwd();
});