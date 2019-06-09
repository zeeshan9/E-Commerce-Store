
function showbrand(str) 
{

    var xhttp;  

    if (str == "") 
    {
        //change will occur here
        document.getElementById("test").innerHTML = "";
        return;

    }

    xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200) 
        {
        document.getElementById("test").innerHTML = this.responseText;
        }
    };

    xhttp.open("GET", "select_brand_type.php?q=" + str, true);
    xhttp.send();
}

function validateForm(){
    var priceValidation = validateNumericValue("productPrice","productPrice");
    var stockValidation = validateNumericValue("productStock","productStock");

    if(priceValidation && stockValidation)
    {
    }
    else
    {
        return false;
    }
}

function validateNumericValue(elementName,elementId){
    var dataEntered = document.forms["newProductAddition"][elementName].value;
    var numericPattern = /"(\d)+"/i;

    if(numericPattern.test(dataEntered))
    {
    }
    else
    { 
        document.getElementById(elementId).style.borderColor="red";
        if(elementName == "productPrice")
        {
            alert("Please enter numbers for price.");
        }else if(elementName == "productStock")
        {
            alert("Please enter numbers for stock.");
        }

        return false;
    }  
}