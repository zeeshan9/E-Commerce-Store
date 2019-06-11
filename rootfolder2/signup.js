
function validateForm() {
    var emailValidation = validateEmail();
    var passValidation = validatePassword();

    if(emailValidation && passValidation)
    {
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
    var emailPattren = /(\w|\d)+@(\w)+(\.com)/i;

    if(emailPattren.test(email))
    {
    }
    else
    {
        document.getElementById("userEmail").style.borderColor="red";
        return false;
    }
}


