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
    if(username == email){
        alert("Please use a different username than your email")
        return false
    }
    if (password == "") {
        alert("Please enter your password");
        return false;
    }

    const userNameRegex = /^[a-zA-Z]+$/;
    if(!userNameRegex.test(username)){
        alert("Username should only contain characters (alphabets). No numbers or special characters are permitted in the username.")
        return false
    }

    const passwordRegex = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[?$#@])[a-zA-Z\d?$#@]{6,10}$/;
    if(!passwordRegex.test(password)){
        alert("The password should be between 6 and 10 characters in length. It must contain a mix of characters (alphabets), numbers, and specific special characters: '?' '$' '#' '@'.")
        return false
    }

    alert("Signup Successful");
    return true;
}

function validateLoginFields() {
    event.preventDefault(); // prevent form submission

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

    // dummy login
    if(username != 'admin' || password !="validpass12#"){
        alert("Login not successful");
        return false;
    }

    alert("Login Successful. You can now list your car for sale");
    window.location.href = 'addcar.html';
    return true;
}
