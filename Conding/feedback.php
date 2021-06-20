<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-Form Box Size & Double Quetes-!>
<html>
<head>
<title>Contact Us</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="JS/feedback.js"></script>
</head>
<body onLoad='document.myform.Fname.focus()'>
<div class="main">
  <div class="header">
    <div class="logo">
      <h1><span>Our</span>&nbsp;Motto<small>is Excellent Client Service</small></h1>
    </div>
    <div class="menu_nav">
      <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="cake.php">Cake</a></li>
        <li><a href="gift wrap.php">Gift Wrap</a></li>
        <li><a href="About Us.php">About Us</a></li>
        <li class="active"><a href="feedback.php">Feedback</a></li>
      </ul>
    </div>
 <img src="images/gift wrap1.jpg" width="970" height="298" alt="" class="fr" />
<div class="content">
    <div class="mainbar">
      <div class="article" style="font-size:21px; color: #000000">
        <h2><span>Contact</span></h2>
        <div class="clr"></div>
                 <img src="images/blue-location-icon-png-19.png" width="46" height="68" />
		 &nbsp;Radhesham Cake And Gift Shop, Oppsite Bus Stand, Karmala
		  <br />
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Karmala 413203, State:- Maharashtra, District:- Solapur<br />
		  <img src="images/newsletter.jpg" width="55" height="47" />&nbsp;atuljadhavbcs@gmail.com, akshayjadhavbcs@gmail.com<br />
		  <img src="images/mobile-hi.png" width="55" height="47"/>&nbsp;9689671427, 9766801577, 9975587208<br /> 
		  
		
		
		
		
	  </div>
<div class="article">
    <h2><span>Send Feedback </span></h2>
        <div class="clr"></div>
            <form name="myform" action="#" method="post">
               <ol>
					<li>
					  <label for="name"></label>
					  <input type="text"  class="text " name="Fname" placeholder="Enter Your First Name" />
					</li>
						<li>
						  <label for="name"></label>
						  <input type="text"  class="text" name="Lname" placeholder="Enter Your Last Name" />
						</li>   
						        
							<li>
							  <label for="email"></label>
							  <input type="text"  name="email" class="text" placeholder="Enter Your Email Address" />
							</li>
           
							<li>
							  <label for="message"></label>
							  <textarea id="message" name="message" rows="5" cols="30"  placeholder="Enter Your Message" required></textarea>
							  <input name="reset" type="reset" onClick="alert('Clear Your Information')" value="Reset" />
							</li>
								<li>
								  <input type="Submit" name="Submit" value="Submit" onClick="return validateForm()"/>
								</li>
            
                </ol>
            </form>
        </div>
</div>
<?php
		
		if(isset($_POST["Submit"]))
		{
            $con=mysql_connect('localhost','root','');
			
            $db_selected=mysql_select_db("cakegift",$con);
            $mysql="INSERT INTO feedback(Fname,Lname,email,message) VAlUES ('".$_POST['Fname']."','".$_POST['Lname']."','".$_POST['email']."','".$_POST['message']."')";
            mysql_query($mysql,$con);
            mysql_close($con);
		}
?>
<div class="sidebar" style="font-size:18px; color:#000000; font-family: 'Times New Roman', Times, serif;">
    <div class="gadget"></div>
        <div class="gadget">
           <h2 class="star"><span>Sidebar</span> Menu</h2>
                <div class="clr"></div>
					<ul class="sb_menu">
					       <li><a href="signout.php">Logout</a></li>
						  <li><a href="Home.php">Home</a></li>
						  <li><a href="cake.php">Cake</a></li>
						  <li><a href="gift wrap.php">Gift Wrap</a></li>
						  <li><a href="About Us.php">About Us</a></li>
						  <li><a href="#">Feedback</a></li>
						  <li><a href="login form/Login.php">Admin Login</a></li>
					</ul>
        </div>
<div class="gadget">
    <h2 class="star">
     <h2>
</div>
</div>
<div class="clr"></div>
</div>
<div class="fbg">
    <div class="fbg_resize">
        <div class="col c1">
<script>
function bigImg(x) {
    x.style.height = "264px";
    x.style.width = "264px";
}
function normalImg(x) {
    x.style.height = "152px";
    x.style.width = "152px";
}
</script>				
<a href="#"><img onMouseOver="bigImg(this)" onMouseOut="normalImg(this)" src="images/Atul.jpg" width="152" height="152"/></a>
	    </div>
<div class="col c2">
<script>
					function mouseDown() {
						document.getElementById("my").style.color = "red";
					}

					function mouseUp() {
						document.getElementById("my").style.color = "blue";
					}
					</script>
    <h2>About Yourself</h2>
         <p id="my" onMouseDown="mouseDown()" onMouseUp="mouseUp()" style="font-size:18px; color:#000000;">
Atul Jadhav myself is the student of the T.Y.B.C.S (com.sci) Dada Patil College, Karjat. </p>
</div>
<div class="col c3">
        <h2>Join The Family </h2>
				<a href="#"><img src="images/fb-logo_cmsthmbres.jpg" width="76" height="58" alt="" /></a> <a href="#">
				<img src="images/favicon.png" width="88" height="58" alt="" /></a> <a href="#"><img src="images/YouTube_Play.png" width="79" height="58" alt="" /></a> <a href="#"><img src="images/pinterest-logo.png" width="83" height="58" alt="" /></a>      </div>
</div>
</div>
</div>
</body>
</html>