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
    <title>Sign in - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
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
    <div class="page page-center ">
        <img id="background-image" src="./static/ark0-bg.png"></img>
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark">
                    <img src="static/logo.svg" height="55" alt="">
                </a>
            </div>
            <div class="card card-md">
                <div class="card-body rounded">
                    <h2 class="h2 text-center mb-4">Login to your account</h2>
                    <form action="" method="post" autocomplete="off" novalidate>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input id="email" type="email" class="form-control" placeholder="your@email.com" autocomplete="off">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">
                                Password
                                <span class="form-label-description">
                                    <a href="./forgot-password.html">I forgot password</a>
                                </span>
                            </label>
                            <div class="input-group input-group-flat">
                                <input id="password" type="password" class="form-control" placeholder="Your password" autocomplete="off">
                                <span class="input-group-text">
                                    <a href="#" class="link-secondary" title="Show password" id="togglePassword" data-bs-toggle="tooltip">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                        </svg>
                                    </a>
                                </span>
                            </div>

                        </div>
                        <div class="mb-2">
                            <label class="form-check">
                                <input id="rememberme" type="checkbox" class="form-check-input">
                                <span class="form-check-label">Remember me on this device</span>
                            </label>
                        </div>
                        <div class="mb-3">
                            <span class="form-check-label" id="signin-response-message">
                            </span>
                        </div>
                        <div class="form-footer">
                            <button id="signinbutton" type="submit" class="btn btn-primary w-100">Sign in</button>
                        </div>
                    </form>
                </div>
                <div class="hr-text">or</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="#" class="btn w-100" onclick="signInWithGoogle()">
                                <!-- Use the official Google Sign-In icon -->
                                <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google Sign-In" width="24" height="24">
                                Login with Google
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="btn w-100" onclick="signInWithX()">
                                <!-- Placeholder "X" icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" y1="6" x2="6" y2="18" />
                                    <line x1="6" y1="6" x2="18" y2="18" />
                                </svg>
                                Login with X
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center text-muted mt-3">
                Don't have account yet?
                <a href="./sign-up.php" tabindex="-1">Sign up</a>
            </div>

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

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

    <!-- Libs JS -->

    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js?1684106062" defer></script>
    <script src="./dist/js/demo.min.js?1684106062" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./dist/js/signin.js" defer></script>
</body>

</html>