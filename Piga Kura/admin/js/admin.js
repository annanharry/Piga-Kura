function loginValidate(loginForm) {
    var validationVerified = true;
    var errorMessage = "";
    var okayMessage = "click OK to continue";

    if (loginForm.myusername.value == "") {
        errorMessage += "Email not filled!\n";
        validationVerified = false;
    }
    if (loginForm.mypassword.value == "") {
        errorMessage += "Missing password!\n";
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

function isValidEmail(val) {
    var re = /^[\w\+\'\.-]+@[\w\'\.-]+\.[a-zA-Z]{2,}$/;
    if (!re.test(val)) {
        return false;
    }
    return true;
}