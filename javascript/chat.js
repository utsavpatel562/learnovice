// Get references to important DOM elements used in the chat application
const form = document.querySelector(".typing-area");  // The form element for sending messages
const incoming_id = form.querySelector(".incoming_id").value;  // ID of the chat recipient
const inputField = form.querySelector(".input-field");  // Input field where users type messages
const sendBtn = form.querySelector("button");  // Button to send the message
const chatBox = document.querySelector(".chat-box");  // Element where chat messages are displayed

// Prevent form submission when pressing 'Enter' or clicking 'submit'
form.onsubmit = (e) => {
    e.preventDefault();  // Prevents the form from reloading the page
};

// Set the focus to the input field when the page loads
inputField.focus();

// Change the send button's style when there is text in the input field
inputField.onkeyup = () => {
    if (inputField.value !== "") {  // If there's any text in the input field
        sendBtn.classList.add("active");  // Add 'active' class to send button
    } else {
        sendBtn.classList.remove("active");  // Otherwise, remove 'active' class
    }
};

// Handle the click event for the send button
sendBtn.onclick = () => {
    // Create a new XMLHttpRequest for sending chat messages
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-chat.php", true);  // Open a POST request to insert chat

    xhr.onload = () => {  // Callback for when the response is loaded
        if (xhr.readyState === XMLHttpRequest.DONE) {  // If the request is complete
            if (xhr.status === 200) {  // If the request was successful
                inputField.value = "";  // Clear the input field after sending
                scrollToBottom();  // Scroll to the bottom to show the latest message
            }
        }
    };

    // Create a FormData object from the form and send it with the request
    let formData = new FormData(form);
    xhr.send(formData);  // Send the form data to the server
};

// Handle mouse entering the chat box
chatBox.onmouseenter = () => {
    chatBox.classList.add("active");  // Add 'active' class to indicate the user is interacting with the chat box
};

// Handle mouse leaving the chat box
chatBox.onmouseleave = () => {
    chatBox.classList.remove("active");  // Remove 'active' class when the user stops interacting
};

// Refresh the chat box content every 500 milliseconds
setInterval(() => {
    let xhr = new XMLHttpRequest();  // Create a new XMLHttpRequest for fetching chat messages
    xhr.open("POST", "php/get-chat.php", true);  // Open a POST request to get chat

    xhr.onload = () => {  // Callback when the response is loaded
        if (xhr.readyState === XMLHttpRequest.DONE) {  // If the request is complete
            if (xhr.status === 200) {  // If the request was successful
                let data = xhr.response;  // Get the response data
                chatBox.innerHTML = data;  // Update the chat box with the new chat content
                if (!chatBox.classList.contains("active")) {  // If the user isn't interacting with the chat box
                    scrollToBottom();  // Automatically scroll to the bottom to show the latest message
                }
            }
        }
    };

    // Send the 'incoming_id' to get the relevant chat data
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("incoming_id=" + incoming_id);  // Send the ID as a parameter
}, 500);  // Set the interval to 500 milliseconds

// Function to scroll the chat box to the bottom
function scrollToBottom() {
    chatBox.scrollTop = chatBox.scrollHeight;  // Set the scroll position to the bottom
}
