function validateForm()
{
var firstname=document.myform.name1.value;
var lastname=document.myform.name2.value;
var mob=document.myform.mno.value;
var email = document.myform.email.value;
var atpos = email.indexOf("@");
var dotpos = email.lastIndexOf(".");
var letters = /^[A-Za-z]+$/;
var mno = /^[789]\d{9}$/; 
var qd=document.myform.Package.options[document.myform.Package.selectedIndex].value;
var qd1=document.myform.Type.options[document.myform.Type.selectedIndex].value;
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
         	alert( "Please select package name");
      	 return false;
       	}
else
if (qd1 == "")
 	{
         	alert( "Please select Type name");
      	 return false;
       	}
return true;
}
