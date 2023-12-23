document.addEventListener("DOMContentLoaded", function () {
    // LocalStorage
    let userid = localStorage.getItem("userid");
    let username = localStorage.getItem("name");
    let userpicture = localStorage.getItem("userpicture");

    // call elements from UI with their Ids
    let profileMail = document.getElementById("profilemail");
    let profileName = document.getElementById('profilename');
    let profilePicture = document.getElementById('profilepicture');

    // Set the background image of the element
    profilePicture.style.backgroundImage = `url(${userpicture})`;
    profileName.innerHTML = username;

    // let profileName2 = document.getElementById('profilename2');
    // let profileName3 = document.getElementById('profilename3');
    // let profileAddress = document.getElementById('profileaddress');
    // let profileMobile = document.getElementById('profilemobile');
    // let profileZipCode = document.getElementById('profilezipcode');

    // Check if userid is a non-zero string
    // if (typeof userid === "string" && userid !== "0") {
    //     // Create a FormData object and append the userGuid to it
    //     var formData = new FormData();
    //     formData.append('userGuid', userid);

    //     // Make a POST request to your PHP script
    //     fetch('api/dashboard_api.php', {
    //         method: 'POST',
    //         body: formData
    //     })
    //         .then(response => response.text()) // Change response.json() to response.text()
    //         .then(data => {
    //             console.log('SUCCSESS - Profile Data Json', data); // Log the response for debugging
    //             try {
    //                 // Parse the response as JSON
    //                 var jsonData = JSON.parse(data);

    //                 if (jsonData.success) {
    //                     var user = jsonData.result[0];
    //                     console.log('SUCCSESS - Profile Data Parsed', user);
    //                     profileName.innerText = user.fullname;
    //                     profileName2.innerText = user.fullname;
    //                     profileName3.value = user.fullname;
    //                     profilePicture.src = 'auction/' + user.userPicture;
    //                     profileMail.value = user.userMail;
    //                     profileAddress.value = user.userAddress;
    //                     profileMobile.value = user.userMobile;
    //                     profileZipCode.value = user.userZipCode;
    //                     // Update other profile information as needed
    //                 } else {
    //                     console.error('No user data found');
    //                 }
    //             } catch (error) {
    //                 console.error('Error parsing JSON:', error);
    //             }
    //         })
    //         .catch(error => {
    //             console.error('Error fetching profile data:', error);
    //         });
    // } else {
    //     console.error('Invalid user ID:', userid);
    // }
});