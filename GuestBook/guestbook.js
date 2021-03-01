document.getElementById("bookForm").onsubmit = validate;



function validate()
{
    let isValid = true;

    //Removes error messages
    let errors = document.getElementsByClassName("err");
    for (let i=0; i < errors.length; i++)
    {
        errors[i].style.display = "none";
    }

    //first & last name validation
    let first = document.getElementById("fName").value;
    let last = document.getElementById("lName").value;
    if (first == "")
    {
        let errFirst = document.getElementById("err_fname");
        errFirst.style.display = "inline";
        isValid = false;
    }
    if (last == "")
    {
        let errLast = document.getElementById("err_lname");
        errLast.style.display = "inline";
        isValid = false;
    }

    //LinkedIn validation
    let link = document.getElementById("linkUrl");
    let linkVal = link.value;
    if (linkVal != "" && (!(linkVal.slice(0, 4) == "http") || !(linkVal.slice(linkVal.length - 4, linkVal.length) == ".com")))
    {
        let errLink = document.getElementById("err_link");
        errLink.style.display = "inline";
        isValid = false;
    }

    //Email validation
    let email = document.getElementById("email").value;
    let properEmail = false;
    if (email != "" && !(email.includes("@") && email.includes(".")))
    {
        let errMail = document.getElementById("err_email");
        errMail.style.display = "inline";
        isValid = false;
    }
    else if (email != "")
    {
        properEmail = true;
    }

    //Have we met validation
    let cat = document.getElementById("category").value;
    if (cat == "none") {
        let errCat = document.getElementById("err_met");
        errCat.style.display = "inline";
        isValid = false;
    }

    //addme validation
    let addme = document.getElementById("Addme").checked;
    if (addme && !properEmail)
    {
        let errFirst = document.getElementById("err_email");
        errFirst.style.display = "inline";
        isValid = false;
    }

    return isValid;
}