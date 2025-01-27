// Code by Utsav Patel
// Get references to important DOM elements used in the login form
const form = document.querySelector(".login form");  // The login form
const continueBtn = form.querySelector(".button input");  // The input button for submission
const errorText = form.querySelector(".error-text");  // Element to display error messages

// Prevent the default form submission behavior (which would reload the page)
form.onsubmit = (e) => {
    e.preventDefault();  // Stops the form from reloading the page upon submission
};

// Handle the click event for the submit button (continueBtn)
continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest();  // Create a new XMLHttpRequest object
    xhr.open("POST", "php/login.php", true);  // Open a POST request to the server-side script that handles login

    // Define the callback function to be executed when the response is received
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {  // Check if the request is complete
            if (xhr.status === 200) {  // If the HTTP status is 200 (OK)
                let data = xhr.response;  // Store the server's response
                
                if (data === "success") {  // Check if the login was successful
                    // Redirect the user to the 'users.php' page upon successful login
                    location.href = "users.php";
                } else {
                    // If login failed, display the error message
                    errorText.style.display = "block";  // Make the error text visible
                    errorText.textContent = data;  // Set the error message text
                }
            }
        }
    };

    // Create a FormData object from the form to send form data with the request
    let formData = new FormData(form);
    xhr.send(formData);  // Send the form data to the server-side script
};
