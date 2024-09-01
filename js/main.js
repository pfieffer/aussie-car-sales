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
    if (username == email) {
        alert("Please use a different username than your email")
        return false
    }
    if (password == "") {
        alert("Please enter your password");
        return false;
    }

    // The username should only contain characters (alphabets).
    // No numbers or special characters are permiTed in the username.
    const userNameRegex = /^[a-zA-Z]+$/;
    if (!userNameRegex.test(username)) {
        alert("Username should only contain characters (alphabets). No numbers or special characters are permitted in the username.")
        return false
    }

    // The password should be between 6 and 10 characters in length.
    // It must contain a mix of characters (alphabets), numbers, and specific special characters: '?' '$' '#' '@'.
    const passwordRegex = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[?$#@])[a-zA-Z\d?$#@]{6,10}$/;
    if (!passwordRegex.test(password)) {
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
    if (username != 'admin' || password != "valid12#") {
        alert("Login not successful. Please check your username and/or password");
        return false;
    }

    alert("Login Successful. You can now list your car for sale");
    window.location.href = 'addcar.html';
    return true;
}

function validateAddCarForm() {
    let make = document.getElementById("make").value;
    let model = document.getElementById("model").value;
    let year = document.getElementById("year").value;
    let milage = document.getElementById("milage").value;
    let location = document.getElementById("location").value;

    if (make == '') {
        alert("Please enter the car make");
        return false
    }
    if (model == '') {
        alert("Please enter the car model name");
        return false
    }
    if (year == '') {
        alert("Please enter the car year");
        return false
    }
    if (year.length != 4) {
        alert("Please enter a valid year");
        return false
    }
    if (year == '') {
        alert("Please enter the car year");
        return false
    }
    if (milage == '') {
        alert("Please enter the kilometers on your car");
        return false
    }
    if (location == '') {
        alert("Please enter the location");
        return false
    }
    if (price == '') {
        alert("Please enter the price");
        return false
    }

    alert('Car listed successfully. 🎉');
    return true
}


function validateSearchCarForm() {
    let searchKeyword = document.getElementById("searchKeyword").value;
    let location = document.getElementById("searchLocation").value

    if (searchKeyword == '' && location == '') {
        alert("Please enter a search keyword and/or location");
        return false;
    }

    alert("Valid. Filter the car list based on search keyword and/or location")
    return true;
}