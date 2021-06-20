function validateForm()
{
var firstname=document.myform.name3.value;
var lastname=document.myform.name4.value;
var mob=document.myform.cmno.value;
var email = document.myform.emailcake.value;
var atpos = email.indexOf("@");
var dotpos = email.lastIndexOf(".");
var letters = /^[A-Za-z]+$/;
var mno = /^[789]\d{9}$/; 
var qd=document.myform.shape.options[document.myform.shape.selectedIndex].value;
var qd1=document.myform.flavor.options[document.myform.flavor.selectedIndex].value;
var qd2=document.myform.size.options[document.myform.size.selectedIndex].value;
var cakeperson=document.myform.pname.value;
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
else
if(!mob.match(mno))  
        {        
alert("Enter valid 10 digit mob no start with 7,8 or 9");  
return false;  
        }  
else
if (qd == "")
 	{
         	alert( "Please select shape name");
      	 return false;
       	}
else
if (qd1 == "")
 	{
         	alert( "Please select flavor name");
      	 return false;
       	}
else
if (qd2 == "")
 	{
         	alert( "Please select size name");
      	 return false;
       	}
else
if(!cakeperson.match(letters))  
     {  
		alert("Enter valid personname");  
		return false;  
     } 
return true;
}
