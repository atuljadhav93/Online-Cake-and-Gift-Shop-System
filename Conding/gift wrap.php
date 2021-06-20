<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-Form Box Size & Double Quetes-!>
<html>
<head>
<title>Contact Us</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="JS/giftwrap.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="logo">
      <h1><span>Our</span>&nbsp;Motto<small>is Excellent Client Service</small></h1>
    </div>
    <div class="menu_nav">
      <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="cake.php">Cake</a></li>
        <li class="active"><a href="gift wrap.php">Gift Wrap</a></li>
        <li><a href="About Us.php">About Us</a></li>
        <li><a href="feedback.php">Feedback</a></li>
      </ul>
    </div>
    <div class="clr"></div>
    <div class="hbg"><img src="images/Ghasitarams-Green-Kaju-Mawa-Mix-Box-Ghasitaram-Gifts-8dd71a5f-fde9-4a5b-b7da-938e27da799e.jpg" width="670" height="298" alt="" class="fr" />
      <div class="info fl">
        <h3>ONLINE</h3>
        <h4>BUY SWEET GIFT</h4>
      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
  <div class="content">
    <div class="mainbar">
      <div class="article">
        <h2><span>To Check The List Of the Sweet Gift And Buy</span></h2>
        <div class="clr"></div>

         <img src="images/mothi.jpg" width="627" height="244" /> 


		</div>
      <div class="article">
        <h2>Fill Form and buy Sweet Gift Form</h2>
        <div class="clr"></div>
        <form name="myform" action="#" method="post">
          <ol>
            <li>
              <label for="name"></label>
              <input type="text" name="name1" placeholder="Enter Your First Name" class="text"/>
              </li>
				  <li>
					 <label for="name"></label>
					 <input type="text" name="name2" placeholder="Enter Your Last Name" class="text"/>
				  </li>
			
            <li>
              <label for="email"></label>
              <input type="text" name="email" class="text" placeholder="Enter Your Email Address"/>
            </li>
            <li>
              <label for="website"></label>
              <input type="text" name="mno" class="text" maxlength="10" placeholder="Enter Your Mobile Number"/>
            </li>
              <li>	<label for="website"></label>		  
			<select name="Package">
			    <option value="">Select Package</option>
                <option value="1 kg">1 kg</option>
                <option value="2 kg">2 kg</option>
				<option value="2 kg">3 kg</option>
				<option value="2 kg">4 kg</option>
				<option value="5 kg">5 kg</option>
              </select>
            </li>
			    <li><label for="website"></label>
		         <select name="Type" >
					<option value="">Select Your Gift Type</option>
					<option value="Sonpapdi">Sonpapdi</option>
					<option value="Motichur ladoo">Motichur ladoo</option>
					<option value="Milk peda">Milk peda</option>
					<option value="Mix">Mix</option>
					<option value="Kesar peda">Kesar peda</option>
					<option value="Dry fruits">Dry fruits</option>
					<option value="Wedding delights">Wedding delights</option>
	             </select>
				</li>
				<li>
              <label for="message"></label>
              <textarea id="message" name="Address" rows="5" cols="20" placeholder="Enter Your Address" required></textarea>
              <input name="reset" type="reset" onclick="alert('Clear Your Information')" value="Reset" />
			</li>
            <li>
              <input type="Submit" name="submit" value="Submit" onClick="return validateForm()"/>
              <div class="clr"></div>
            </li>
          </ol>
        </form>
      </div>
    </div>
<?php
		
		if(isset($_POST["submit"]))
		{
//connection to server
$con=mysql_connect('localhost','root','');
$db_selected=mysql_select_db("cakegift",$con);

$mysql="INSERT INTO gift(name1,name2,email,mno,Package,Type,Address) VAlUES ('".$_POST['name1']."','".$_POST['name2']."','".$_POST['email']."','".$_POST['mno']."','".$_POST['Package']."','".$_POST['Type']."','".$_POST['Address']."')";
mysql_query($mysql,$con);

mysql_close($con);
}
?>
<form method="post" action="gift search.php">
     <table> 
	    <tr>
	     <td>
        <select name="cbosearch">
         <option>Name</option>
         </select>
		</td>
		<td>
        <input type="text" name="txtsearch" placeholder="Type Gift Name" />
		</td>
		<td>
        <input type="submit" name="cmdsearch" value="Search" />
		</td>
      	</tr>
	  </table>
</form>


<div class="sidebar" style="font-size:18px; color:#000000; font-family: 'Times New Roman', Times, serif;">
    <div class="gadget">
            <h2 class="star"><span>Sidebar</span> Menu</h2>
				<ul class="sb_menu">
				    <li><a href="signout.php">Logout</a></li>
				  <li><a href="Home.php">Home</a></li>
				   <li><a href="cake.php">Cake</a></li>
				  <li><a href="#">Gift Wrap</a></li>
				  <li><a href="About Us.php">About Us</a></li>
				  <li><a href="feedback.php">Feedback</a></li>
				  <li><a href="login form/Login.php">Admin Login</a></li>
				</ul>
    </div>
<div class="gadget">
        <h2 class="star"><span>To check list of gift and information</span></h2>
				<ul class="ex_menu">
				  <li><a href="gift list/Motichur ladoo.php">Motichur Ladoo</a><br/>
					Click Here Show The Next Page<br/> </li>
				  <li><a href="gift list/Milk peda.php">Milk Peda</a><br/>
					Click Here Show The Next Page<br/></li>
				  <li><a href="gift list/Kesar peda.php">Kesar Peda</a><br/>
					Click Here Show The Next Page<br/></li>
				  <li><a href="gift list/Wedding delights.php">Wedding Delights</a><br/>
					Click Here Show The Next Page<br/></li>
				  <li><a href="gift list/Mix.php">Mix</a><br/>
					Click Here Show The Next Page<br/></li>
				  <li><a href="gift list/Dry fruits.php">Dry Fruits</a><br/>
					Click Here Show The Next Page<br/></li>
					 <li><a href="gift list/sonpapdi.php">Sonpapdi</a><br/>
					Click Here Show The Next Page<br/></li>   
				</ul>
</div>
</div>
</body>
</html>