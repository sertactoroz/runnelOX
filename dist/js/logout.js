$(document).ready(function () {
    $("#logoutbutton").click(function (event) {
        // Clear local storage
        localStorage.removeItem("name");
        localStorage.removeItem("email");
        localStorage.removeItem("userid");

        // Clear session storage
        sessionStorage.removeItem("name");
        sessionStorage.removeItem("email");
        sessionStorage.removeItem("userid");

        event.preventDefault();
        // setTimeout(function () {
        //     updateButtons()
        // }, 1000);

    });
});

// Redirect to clear cache PHP file
// window.location.href = "index.php?p=logout";
// setTimeout(function () {
//     window.location.href = "index.php?p=home";

// }, 1000);

// document.addEventListener("DOMContentLoaded", function () {
//     // Your updateButtons function or script here
//     function updateButtons(loggedin) {
//         // console.log("Buttons updated!");

//         if (localStorage.getItem("userid") != null || sessionStorage.getItem("userid") != null) {
//             loggedin = true;
//         }

//         let loginButton = document.getElementById("loginbutton");
//         let accountButton = document.getElementById("accountbutton");
//         let logoutButton = document.getElementById("logoutbutton");

//         if (loggedin) {
//             loginButton.style.display = "none";
//             accountButton.style.display = "block";
//             logoutButton.style.display = "block";
//         } else {
//             loginButton.style.display = "block";
//             accountButton.style.display = "none";
//             logoutButton.style.display = "none";
//         }
//     }

//     updateButtons(false);
// });