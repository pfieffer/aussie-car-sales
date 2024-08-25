function validateSignupFields() {
    let fullname = document.forms["registrationForm"]["name"].value;
    let address = document.forms["registrationForm"]["address"].value;
    let pnumber = document.forms["registrationForm"]["pnumber"].value;
    let email = document.forms["registrationForm"]["email"].value;
    let username = document.forms["registrationForm"]["username"].value;
    let password = document.forms["registrationForm"]["username"].value;
    

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
}