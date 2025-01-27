// Code by Utsav Patel
// Get references to important DOM elements for search functionality
const searchBar = document.querySelector(".search input");  // The input field for search queries
const searchIcon = document.querySelector(".search button");  // The button to toggle the search bar
const usersList = document.querySelector(".users-list");  // The list of users to display search results

// Toggle the visibility of the search bar when the search icon is clicked
searchIcon.onclick = () => {
  searchBar.classList.toggle("show");  // Show or hide the search bar
  searchIcon.classList.toggle("active");  // Change the icon's appearance to indicate its state
  searchBar.focus();  // Focus on the search bar when it's shown

  // Clear the search bar and remove the 'active' class if it's visible
  if (searchBar.classList.contains("active")) {
    searchBar.value = "";  // Clear the search field
    searchBar.classList.remove("active");  // Remove 'active' class
  }
};

// Handle the 'keyup' event on the search bar to detect when the user types
searchBar.onkeyup = () => {
  let searchTerm = searchBar.value;  // Get the current search term from the input field

  // If there's a search term, add the 'active' class to indicate active search
  if (searchTerm !== "") {
    searchBar.classList.add("active");
  } else {
    searchBar.classList.remove("active");
  }

  // Create a new XMLHttpRequest to send the search query to the server
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/search.php", true);  // Open a POST request to search users

  xhr.onload = () => {  // Define what happens when the response is loaded
    if (xhr.readyState === XMLHttpRequest.DONE) {  // Check if the request is complete
        if (xhr.status === 200) {  // If the response status is 200 (successful)
          let data = xhr.response;  // Get the server response
          usersList.innerHTML = data;  // Update the users list with the search results
        }
    }
  };

  // Set the request header to send form-encoded data
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
  // Send the search term to the server for processing
  xhr.send("searchTerm=" + searchTerm);
};

// Periodically refresh the users list to show real-time updates
setInterval(() => {
  let xhr = new XMLHttpRequest();  // Create a new XMLHttpRequest to fetch users
  xhr.open("GET", "php/users.php", true);  // Open a GET request to fetch the latest users list

  xhr.onload = () => {  // Define what happens when the response is loaded
    if (xhr.readyState === XMLHttpRequest.DONE) {  // Check if the request is complete
        if (xhr.status === 200) {  // If the response status is 200
          let data = xhr.response;  // Get the server response
          
          // Only update the users list if the search bar is not active (to avoid overwriting search results)
          if (!searchBar.classList.contains("active")) {
            usersList.innerHTML = data;  // Update the users list with the latest data
          }
        }
    }
  };

  xhr.send();  // Send the request to the server
}, 500);  // Refresh every 500 milliseconds
