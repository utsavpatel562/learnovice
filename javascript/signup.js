// Code by Utsav Patel
// Get references to important DOM elements used in the signup form
const form = document.querySelector(".signup form");  // The signup form
const continueBtn = form.querySelector(".button input");  // The submit button for form submission
const errorText = form.querySelector(".error-text");  // Element for displaying error messages

// Prevent the default form submission behavior to avoid page reloads
form.onsubmit = (e) => {
    e.preventDefault();  // Stops the default form submission behavior
};

// Handle the click event for the submit button (continueBtn)
continueBtn.onclick = () => {
    // Create a new XMLHttpRequest for sending signup data
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);  // Open a POST request to the signup handler

    xhr.onload = () => {  // Callback when the response is received
        if (xhr.readyState === XMLHttpRequest.DONE) {  // Check if the request is complete
            if (xhr.status === 200) {  // Check if the HTTP status is 200 (successful)
                let data = xhr.response;  // Store the server's response

                if (data === "success") {  // If signup was successful
                    // Redirect the user to the 'users.php' page
                    location.href = "users.php";  
                } else {  // If there was an error during signup
                    errorText.style.display = "block";  // Show the error text
                    errorText.textContent = data;  // Display the error message from the server
                }
            }
        }
    };

    // Create a FormData object from the form to send form data with the request
    let formData = new FormData(form);
    xhr.send(formData);  // Send the form data to the server
};
