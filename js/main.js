function validateSignupFields() {
    let fullname = document.forms["registrationForm"]["name"].value;
    let address = document.forms["registrationForm"]["address"].value;
    let pnumber = document.forms["registrationForm"]["phone"].value;
    let email = document.forms["registrationForm"]["email"].value;
    let username = document.forms["registrationForm"]["username"].value;
    let password = document.forms["registrationForm"]["password"].value;


    if (fullname == "") {
        alert("Please enter your name");
        return false;
    }
    if (address == "") {
        alert("Please enter your address");
        return false;
    }
    if (pnumber == "") {
        alert("Please enter your phone number");
        return false;
    }
    if (email == "") {
        alert("Please enter your email");
        return false;
    }
    if (username == "") {
        alert("Please enter your username");
        return false;
    }
    if (password == "") {
        alert("Please enter your password");
        return false;
    }

    alert("Signup Successful");
    return true;
}

function validateLoginFields() {
    let username = document.forms["loginForm"]["username"].value;
    let password = document.forms["loginForm"]["password"].value;

    if (username == "") {
        alert("Please enter your username");
        return false;
    }
    if (password == "") {
        alert("Please enter your password");
        return false;
    }

    alert("Login Successful");
    return true;
}
