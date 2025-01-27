// Code by Utsav Patel
toggleIcon.onclick = () => {
  const isPasswordVisible = pswrdField.type === "password";  // Check if the password is currently hidden
  pswrdField.type = isPasswordVisible ? "text" : "password";  // Toggle the field type
  toggleIcon.classList.toggle("active", isPasswordVisible);  // Toggle the 'active' class
  toggleIcon.setAttribute("aria-pressed", !isPasswordVisible);  // Update ARIA attribute
};
