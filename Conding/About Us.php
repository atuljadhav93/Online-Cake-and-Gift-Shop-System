<html>
<head>
<title>About Us</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
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
        <li ><a href="gift wrap.php">Gift Wrap</a></li>
        <li class="active"><a href="About Us.php">About Us</a></li>
        <li><a href="feedback.php">Feedback</a></li>
      </ul>
    </div>
<div class="clr"></div>
    <div class="hbg"><img src="images/Happy-birthday-cupcake-tumblr-3.jpg" width="670" height="298" alt="" class="fr" />
<div class="info fl">
        <h3>Touch</h3>
        <h4>With Heart</h4>
</div>
<div class="clr"></div>
</div>
<div class="clr"></div>
</div>
<!-Start the Content-!> 
  <div class="content">
    <div class="mainbar">
      <div class="article" style="font-size:21px; color: #000000">
        <h2>CONTACT</h2>
        <div class="clr"></div>
         <span class="article" style="font-size:21px; color: #000000">
		 <img src="images/blue-location-icon-png-19.png" width="27" height="47" />
		 &nbsp;Radhesham Cake And Gift Shop, Oppsite Bus Stand, Karmala
		  <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Karmala 413203, State:- Maharashtra, District:- Solapur<br />
		  <img src="images/newsletter.jpg" width="55" height="47" />&nbsp;atuljadhavbcs@gmail.com, akshayjadhavbcs@gmail.com<br />
		  <img src="images/mobile-hi.png" width="55" height="47"/>&nbsp;9689671427, 9766801577, 9975587208<br /> 
		  
		  
 		  </div>
      <div class="article">
        <h2>Distributer Details</h2>
        <div class="clr"></div>
		
<table border="1" align="center" height="88" width="641" style="font-size:18px; color:#000000;">
<tr>
<th width="46" height="80" align="center"><b>Sr.No</b></th>
<th width="214" align="center"><b>Distributer Name</b></th>
<th width="146" align="center"><b>Mobile Number</b></th>
<th width="222" align="center"><b>E-mail</b></th>

</tr>
        <?php
mysql_connect("localhost","root","");
mysql_select_db("cakegift");
$sel=mysql_query("select * from distributer");
$i=0;
while($row=mysql_fetch_array($sel))
{	  
$i++;
     echo " <tr>
        <td>$i</td>
        <td>".$row['Dname']."</td>
        <td>".$row['Mno']."</td>
		<td>".$row['email']."</td>
        </tr>";
	  }
?>
	</table>	
		
		
	  </div>
    </div>
 
 <!-End the Content-!>	
	
	
	
	<!-Start Side bar menu-!>
    <div class="sidebar" style="font-size:18px; color:#000000; font-family: 'Times New Roman', Times, serif;">
      <div class="gadget">
        <h2 class="star"><span>Sidebar</span> Menu</h2>
        <ul class="sb_menu">
		   <li><a href="signout.php">Logout</a></li>
          <li><a href="Home.php">Home</a></li>
           <li><a href="cake.php">Cake</a></li>
          <li><a href="gift wrap.php">Gift Wrap</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="feedback.php">Feedback</a></li>
		  <li><a href="login form/Login.php">Admin Login</a></li>
        </ul>
      </div>
      <div class="gadget">
        <h2 class="star"></h2>
        <div class="clr">
		</div>
        <ul class="ex_menu">
          
		  
		  
		
		  
		  <!-Add the sweet Address-!>
		  
		  <!-End Side bar menu-!>
        
</body>
</html>