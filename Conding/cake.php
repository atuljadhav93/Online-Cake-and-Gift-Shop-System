<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-Form Box Size & Double Quetes-!>
<html>
<head>
<title>Cake</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="JS/cake.js".js"></script>

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
        <li class="active"><a href="cake.php">Cake</a></li>
        <li><a href="gift wrap.php">Gift Wrap</a></li>
        <li><a href="About Us.php">About Us</a></li>
        <li><a href="feedback.php">Feedback</a></li>
      </ul>
    </div>
    <div class="clr"></div>
    <div class="hbg"><img src="images/food_cakes_flowers_sweet_dessert_hd_wallpaper-1440x900.jpg" width="670" height="298" alt="" class="fr" />
      <div class="info fl">
        <h3>ONLINE </h3>
        <h4>BUY CAKE </h4>
      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
  <div class="content">
    <div class="mainbar">
      <div class="article">
        <h2>To Check The List Of the Cake And Buy</h2>
        <div class="clr"></div>
        <img src="images/download.jpg" width="627" height="244" />      
		</div>
      <div class="article">
        <h2>Fill Form and buy cake Form </h2>
        <div class="clr"></div>
        <form name="myform" action="#" method="post">
          <ol>
            <li>
              <label for="name"></label>
              <input type="text" name="name3" placeholder="Enter Your First Name" class="text"  />
               </li>
			   <li>
				   <label for="name"></label>
				   <input type="text" name="name4" placeholder="Enter Your Last Name" class="text" />
               </li>
			
            <li>
              <label for="email"></label>
              <input type="text" name="emailcake" class="text" placeholder="Enter Your Email Address" />
            </li>
            <li>
              <label for="website"></label>
              <input type="text" name="cmno" class="text" maxlength="10" placeholder="Enter Your Mobile Number" />
              </li>
              <li>		<label for="website"></label>	  
			<select name="shape" >
                <option value="">Select Your Favourite Shape</option>
                <option value="Love">Love</option>
                <option value="Circle">Circle</option>
				<option value="Circle">Square</option>
              </select>

            </li>
			    <li><label for="website"></label>
		         <select name="flavor" >
					<option value="">Select Your Favourite Flavor</option>
					<option value="Blackforest">Blackforest</option>
					<option value="Buttercotch">Buttercotch</option>
					<option value="Raspberry">Raspberry</option>
					<option value="Choclate">Choclate</option>
					<option value="Strawberry">Strawberry</option>
					<option value="Vanilla bean">Vanilla bean</option>
					<option value="Ice cake">Ice cake</option>
					<option value="Bluebarry">Bluebarry</option>
					<option value="Jeli">Jeli</option>
					<option value="Pineapple">Pineapple</option>
	             </select>
			 </li>
			 <li><label for="website"></label>
			 <select name="size" >
                <option value="">Select Cake Weight</option>
                <option value="1">1 kg</option>
                <option value="1.5">1.5 kg</option>
				<option value="2">2 kg</option>
				<option value="2.5">2.5 kg</option>
			    <option value="3">3 kg</option>
				<option value="3.5">3.5 kg</option>
				<option value="4">4 kg</option>
                <option value="4.5">4.5 kg</option>
				<option value="5">5 kg</option>


				</select>
			  </li>
			 <li><label for="website"></label>
			          <input type="text" name="cno" placeholder="Quentity of cake" required>
			 </li>
			 
			 <li><label for="website"></label>
			        <input type="text" name="pname"  placeholder="Enter The Birthday Person Name"  class="text" />
		     </li>
			         
	          <li>
              <label for="message"></label>
              <textarea id="message" name="Addresscake" rows="5" cols="20" placeholder="Enter Your Address" required></textarea>
              <input name="reset" type="reset" onClick="alert('Clear Your Information')" value="Reset" />
            </li>
            <li>
              <input type="Submit" name="submit" value="submit" onClick="return validateForm()"/>
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

$mysql="INSERT INTO cake(name3,name4,emailcake,cmno,shape,flavor,size,cno,pname,Addresscake) VAlUES ('".$_POST['name3']."','".$_POST['name4']."','".$_POST['emailcake']."','".$_POST['cmno']."','".$_POST['shape']."','".$_POST['flavor']."','".$_POST['size']."','".$_POST['cno']."','".$_POST['pname']."','".$_POST['Addresscake']."')";
mysql_query($mysql,$con);

mysql_close($con);
}
?>
<form method="post" action="cakesearch.php">
     <table> 
	    <tr>
	     <td>
        <select name="cbosearch">
         <option>Name</option>
         </select>
		</td>
		<td>
        <input type="text" name="txtsearch" placeholder="Type Flavor Name" />
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
           <li><a href="#">Cake</a></li>
          <li><a href="gift wrap.php">Gift Wrap</a></li>
          <li><a href="About Us.php">About Us</a></li>
          <li><a href="feedback.php">Feedback</a></li>
		  <li><a href="login form/Login.php">Admin Login</a></li>
        </ul>
      </div>
      <div class="gadget">
        <h2 class="star">To check list of cake and infomation </h2>
        <ul class="ex_menu">
          <li><a href="cake list/Blackforest.php">Blackforest</a><br/>
            Click Here Show The Next Page<br/> </li>
          <li><a href="cake list/Buttercotch.php">Buttercotch</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="cake list/Raspberry.php">Raspberry</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="cake list/Choclate.php">Choclate</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="cake list/Strawberry.php">Strawberry</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="cake list/Vanilla bean.php">Vanilla bean</a><br/>
            Click Here Show The Next Page<br/></li>
		  <li><a href="cake list/Ice cake.php">Ice Cake </a><br/>
            Click Here Show The Next Page<br/></li>
		  <li><a href="cake list/Bluebarry.php">Bluebarry</a><br/>
            Click Here Show The Next Page<br/></li>
		  <li><a href="cake list/Jeli.php">Jeli</a><br/>
            Click Here Show The Next Page<br/></li>
		  <li><a href="cake list/Pineapple.php">Pineapple</a><br/>
            Click Here Show The Next Page<br/></li>
        </ul>
      </div>
    </div>
    <div class="clr"></div>
  </div>
</body>
</html>