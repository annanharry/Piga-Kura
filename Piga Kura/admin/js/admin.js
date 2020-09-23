// To make sure there's input. Among other things that require js

// LOGIN FORM VALIDATION
function loginValidate(loginForm) {
    var validationVerified = true;
    var errorMessage = "";
    var okayMessage = "click OK to continue";

    if (loginForm.username.value == "") {
        errorMessage += "Email not filled!\n";
        validationVerified = false;
    }
    if (loginForm.password.value == "") {
        errorMessage += "Missing password!\n";
        validationVerified = false;
    }
    if (!isValidEmail(loginForm.username.value)) {
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

// REGISTER FORM VALIDATION
function registerValidate(registerForm) {

    var validationVerified = true;
    var errorMessage = "";
    var okayMessage = "click OK to process registration";

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
        errorMessage += "Password not provided!\n";
        validationVerified = false;
    }
    if (registerForm.ConfirmPassword.value == "") {
        errorMessage += "Confirm password not filled!\n";
        validationVerified = false;
    }
    if (registerForm.ConfirmPassword.value != registerForm.password.value) {
        errorMessage += "Confirm password and password do not match!\n";
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

// UPDATE FORM
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

// VALIDATE EMAIL
function isValidEmail(val) {
    var re = /^[\w\+\'\.-]+@[\w\'\.-]+\.[a-zA-Z]{2,}$/;
    if (!re.test(val)) {
        return false;
    }
    return true;
}

// VALIDATE PASSWORD LENGTH
function isValidLength(val) {
    var length = 8;
    if (!re.test(val)) {
        return false;
    }
    return true;
}

// POSITION FUNCTION
function isValidPosition(val) {
    var re = /[-]/;
    if (!re.test(val)) {
        return false;
    }
    return true;
}

//VALIDATE UPDATE FORM
function updateValidate(updateForm) {
    var validationVerified = true;
    var errorMessage = "";
    var okayMessage = "click OK to change your password";

    if (updateForm.opassword.value == "") {
        errorMessage += "Please provide your old password.\n";
        validationVerified = false;
    }
    if (updateForm.npassword.value == "") {
        errorMessage += "Please provide a new password.\n";
        validationVerified = false;
    }
    if (updateForm.cpassword.value == "") {
        errorMessage += "Please confirm your new password.\n";
        validationVerified = false;
    }
    if (updateForm.cpassword.value != updateForm.npassword.value) {
        errorMessage += "Confirm password and new password do not match!\n";
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

// VALIDATE POSITION FORM
function positionValidate(positionForm) {

    var validationVerified = true;
    var errorMessage = "";
    var okayMessage = "click OK to add new position";

    if (positionForm.position.value == "") {
        errorMessage += "Please enter the position name!\n";
        validationVerified = false;
    }
    if (!isValidPosition(positionForm.position.value)) {
        errorMessage += "Invalid position provided! Don't leave spaces between words i.e. Try to replace spaces with a dash (-)\n";
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

// VALIDATE CANDIDATE FORM
function candidateValidate(candidateForm) {

    var validationVerified = true;
    var errorMessage = "";
    var okayMessage = "click OK to add new candidate";

    if (candidateForm.name.value == "") {
        errorMessage += "Please enter the candidate name!\n";
        validationVerified = false;
    }
    if (candidateForm.position.selectedIndex == 0) {
        errorMessage += "Candidate position not set!\n";
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

// VALIDATE POSITION FORM
function positionValidate(positionForm) {

    var validationVerified = true;
    var errorMessage = "";
    var okayMessage = "click OK to see the poll results under the chosen position.";

    if (positionForm.position.selectedIndex == 0) {
        errorMessage += "Position not set! Choose a position to retrieve the respective poll results.\n";
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