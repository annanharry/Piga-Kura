// LOGIN FORM
function loginValidate(loginForm) {
    var validationVerified = true;
    var errorMessage = "";
    var okayMessage = "click OK to continue";

    if (loginForm.myusername.value == "") {
        errorMessage += "Email not filled!\n";
        validationVerified = false;
    }
    if (loginForm.mypassword.value == "") {
        errorMessage += "Password not filled!\n";
        validationVerified = false;
    }
    if (!isValidEmail(loginForm.myusername.value)) {
        errorMessage += "Invalid email address provided!\n";
        validationVerified = false;
    }
    if (!validationVerified) {
        alert(errorMessage);
    }
    if (validationVerified) {
        alert(okayMessage);
    }
    return validationVerified;
}

//UPDATE FORM
function updateProfile(registerForm) {

    var validationVerified = true;
    var errorMessage = "";
    var okayMessage = "click OK to update your account";

    if (registerForm.firstname.value == "") {
        errorMessage += "Firstname not filled!\n";
        validationVerified = false;
    }
    if (registerForm.lastname.value == "") {
        errorMessage += "Lastname not filled!\n";
        validationVerified = false;
    }
    if (registerForm.email.value == "") {
        errorMessage += "Email not filled!\n";
        validationVerified = false;
    }
    if (registerForm.password.value == "") {
        errorMessage += "New password not provided!\n";
        validationVerified = false;
    }
    if (registerForm.ConfirmPassword.value == "") {
        errorMessage += "Confirm password not filled!\n";
        validationVerified = false;
    }
    if (registerForm.ConfirmPassword.value != registerForm.password.value) {
        errorMessage += "Confirm password and new password do not match!\n";
        validationVerified = false;
    }
    if (!isValidEmail(registerForm.email.value)) {
        errorMessage += "Invalid email address provided!\n";
        validationVerified = false;
    }
    if (!validationVerified) {
        alert(errorMessage);
    }
    if (validationVerified) {
        alert(okayMessage);
    }
    return validationVerified;
}