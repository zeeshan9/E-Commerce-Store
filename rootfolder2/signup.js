
function validateForm() {
    var emailValidation = validateEmail();
    var passValidation = validatePassword();

    if(emailValidation && passValidation)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function validatePassword(){
    var pass = document.forms["signupForm"]["userPass"].value;
    var match = document.forms["signupForm"]["passMatch"].value;

    if(pass==match)
    {
        return true;
    }
    else
    { 
        document.getElementById("userPass").style.borderColor="red";
        document.getElementById("passMatch").style.borderColor="red";
        return false;
    }   
}

function validateEmail(){
    var email = document.forms["signupForm"]["userEmail"].value;
    var emailPattren = /(\w|\d)+@(\w)+(\.com)/;

    if(emailPattren.test(email))
    {
        return true;
    }
    else
    {
        document.getElementById("userEmail").style.borderColor="red";
        return false;
    }
}


