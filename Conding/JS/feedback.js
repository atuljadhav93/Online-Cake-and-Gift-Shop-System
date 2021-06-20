function validateForm()
{
var firstname=document.myform.Fname.value;
var lastname=document.myform.Lname.value;

var email = document.myform.email.value;
var atpos = email.indexOf("@");
var dotpos = email.lastIndexOf(".");
var letters = /^[A-Za-z]+$/;



if(!firstname.match(letters))  
     {  
alert("Enter valid first name");  
return false;  
     }  
else
if(!lastname.match(letters))  
     {  
alert("Enter valid Last name");  
return false;  
    }  
else
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) 
   {
alert("Not a valid e-mail address");
return false;
    }
return true;
}