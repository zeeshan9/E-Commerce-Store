
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