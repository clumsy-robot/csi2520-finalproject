//chkTutor.js

//CIT/CSE 252 - Fall 2016
//Final Group Project
//Group members:
//    Stephanie Gorham
//    Kelly Kurkowski
//    Keenan McCloskey
//    Dan Wilmot


function validateTutor()
{
    var addTutorObj = document.getElementById("addTutor");
    var course = addTutorObj.course.value;
    var email = addTutorObj.email.value;
    var everythingOK = true;

    if (!validateCourse(course))
    {
        alert("Error: Invalid course code. Format should be XXX ###");
        everythingOK = false;
    }
    
    if (!validateEmail(email))
    {
        alert("Error: Invalid e-mail address.");
        everythingOK = false;
    }
    
    if (everythingOK)
    {
        alert("All the information looks good.\nThank you!");
        return true;
    }
    else
        return false;
}

function validateCourse(course)
{
    var p = course.search(/^(\w{2,3}\s\d{3})*$/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateEmail(address)
{
    var p = address.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);
    if (p == 0)
        return true;
    else
        return false;
}