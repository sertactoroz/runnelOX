<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css?1684106062" rel="stylesheet">
    <link href="./dist/css/tabler-flags.min.css?1684106062" rel="stylesheet">
    <link href="./dist/css/tabler-payments.min.css?1684106062" rel="stylesheet">
    <link href="./dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet">
    <link href="./dist/css/demo.min.css?1684106062" rel="stylesheet">
    <link href="./dist/css/custom.css" rel="stylesheet">
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="./dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page page-center">
        <img id="background-image" src="./static/ark0-bg.png"></img>
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark">
                    <img src="./static/logo.svg" height="36" alt="">
                </a>
            </div>
            <form class="card card-md" action="" method="post" autocomplete="off" novalidate>
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Create new account</h2>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input id="name" type="text" class="form-control" placeholder="Enter name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input id="email" type="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mobile</label>
                        <input id="mobile" type="tel" class="form-control" placeholder="Enter mobile" pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Birth Date</label>
                        <input id="birthdate" type="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <div class="input-group input-group-flat">
                            <input id="password" type="password" class="form-control" placeholder="Password" autocomplete="off">
                            <span class="input-group-text">
                                <a href="#" class="link-secondary" title="Show password" id="togglePassword" data-bs-toggle="tooltip">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-check">
                            <input id="checkbox" type="checkbox" class="form-check-input">
                            <span class="form-check-label">
                                Agree the
                                <a href="./terms-of-service.html" tabindex="-1">terms and policy</a>
                                .
                            </span>
                        </label>
                    </div>
                    <div class="mb-3">
                        <span class="form-check-label" id="signup-response-message">
                        </span>
                    </div>
                    <div class="form-footer">
                        <button id="signupbutton" type="button" class="btn btn-primary w-100">Create new account</button>
                    </div>
                </div>
                <div class="hr my-0"></div>
                <div class="text-center text-muted my-3">
                    Already have account?
                    <a href="./sign-in.php" tabindex="-1">Sign in</a>
                </div>
            </form>


        </div>
    </div>


    <!-- Libs JS -->

    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js?1684106062" defer></script>
    <script src="./dist/js/demo.min.js?1684106062" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./dist/js/signup.js" defer></script>
    <!-- Toggle  JS -->
    <script>
        $(document).ready(function() {
            // Initialize tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });

            // Toggle password visibility
            $("#togglePassword").click(function() {
                var passwordField = $("#password");
                var type = passwordField.attr("type");

                // Toggle the password field type
                if (type === "password") {
                    passwordField.attr("type", "text");
                } else {
                    passwordField.attr("type", "password");
                }

                // Toggle the eye icon (SVG) based on the password field type
                var eyeIcon = $("#togglePassword").find("svg");
                if (type === "password") {
                    eyeIcon.find("path").attr("d", "M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0");
                } else {
                    eyeIcon.find("path").attr("d", "M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6");
                }
            });
        });
    </script>
</body>

</html>