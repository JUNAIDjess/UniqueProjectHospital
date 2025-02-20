const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signInForm = document.getElementById('signin-form');
const signUpForm = document.getElementById('signup-form');

signUpButton.addEventListener('click', () => {
    signInForm.style.display = 'none';
    signUpForm.style.display = 'block';
});
signInButton.addEventListener('click', () => {
    signUpForm.style.display = 'none';
    signInForm.style.display = 'block';
});



/**********   for error message while incorrect email or password    *+++++*/




// Function to get URL parameters
function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}

// Check for error message in URL
const error = getQueryParam("error");
if (error) {
    const errorMessageDiv = document.getElementById("error-message");

    if (error === "email_not_found") {
        errorMessageDiv.innerText = "Email not found. Please sign up.";
        errorMessageDiv.style.display = "block";

        // Show Sign-Up Form and Hide Sign-In Form
        document.getElementById("signup-form").style.display = "block";
        document.getElementById("signin-form").style.display = "none";
    } else if (error === "wrong_password") {
        errorMessageDiv.innerText = "Incorrect password. Please try again.";
        errorMessageDiv.style.display = "block";
    }
}