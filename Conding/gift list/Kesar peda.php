<html>
<head>
<title>Kesar peda</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- START PAGE SOURCE -->
<div class="main">
  <div class="header">
    <div class="hbg"><img src="../images/kesar peda.jpg" width="670" height="298" alt="" class="fr" />
      <div class="info fl">
        <h3>ONLINE </h3>
        <h4>BUY Sweet Gift </h4>
      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
</div>
  <div class="content">
    <div class="mainbar">
      <div class="article">
        <h2>Price Of Kesar peda </h2>
        <div class="clr"></div>
<table width="400" border="1">
  <tr>
<th align="center" style='color:#5b91a2; font-size:23px;'><b>0.5 Kg Price</b></th>
<th align="center" style='color:#5b91a2; font-size:23px;'><b>1 Kg Price</b></th>
<th align="center" style='color:#5b91a2; font-size:23px;'><b>Availability</b></th>
</tr>
 <?php
mysql_connect("localhost","root","");
mysql_select_db("cakegift");
$sel=mysql_query("select * from admingift where `admingift`.`gid` =3");
$i=0;
while($row=mysql_fetch_array($sel))
{	  
$i++;
     echo " <tr>
        
        <td style='color:#ff0000; font-size:25px; '>".$row['price1']."</td>
        <td style='color:#ff0000; font-size:25px; '>".$row['price2']."</td>
        <td style='color:#ff0000; font-size:25px; '>".$row['availability']."</td>
        
      </tr>";
	  }
	  
 ?> 
  
  
  
  
</table>

       
	   </div>
      <div class="article" style="font-size:18px; color:#000000; font-family: 'Times New Roman', Times, serif;">
        
		<div class="clr"></div>
          
		<h2>Full Information Of The Kesar peda </h2>
		   <p id="myP" onmousedown="mouseDown()" onmouseup="mouseUp()">Alternative name:- Pedha, Pera<br>
Course:- Dessert, Prasad<br>
Place of origin:- India<br>
Main ingredient:- Khoya, sugar<br>

Peda (pronounced) is a sweet from the Indian subcontinent, usually prepared in thick, semi-soft pieces. The main ingredients are khoa, sugar and traditional flavorings, including cardamom seeds, pistachio nuts and saffron. The colour varies from a creamy white to a caramel colour. The word peda is also generically used to mean a blob of any doughy substance, such as flour or khoa. Variant spellings and names for the dessert include pedha, penda (in Gujarati) and pera.

Pedas originated in the city of Mathura in present-day Uttar Pradesh. The Mathura Peda is the characteristic variety from the city. From Uttar Pradesh, the peda spread to many parts of the Indian subcontinent. Thakur Ram Ratan Singh of Lucknow, who migrated to Dharwad (in present-day Karnataka) in the 1850s, introduced pedas there. This distinct variety is now famous as the Dharwad pedha. Kandi Peda from Satara in Maharashtra is another variety of peda.

As with laddoos, pedas are sometimes used as prasadam in religious services.
kesar peda is a classic sweet made for festive occasions. They are delicious and made with very few ingredients, milk and sugar, flavored with cardamom and saffron. This 
</p>
<script>
function mouseDown() {
    document.getElementById("myP").style.color = "red";
}

function mouseUp() {
    document.getElementById("myP").style.color = "blue";
}
</script>
		</div>
    </div>
    <div class="sidebar" style="font-size:18px; color:#000000; font-family: 'Times New Roman', Times, serif;">
      <div class="gadget"></div>
      <div class="gadget">
        <h2 class="star">Main Menu</h2>
        <ul class="sb_menu">
          <li><a href="../home.php">Home</a></li>
           <li><a href="../cake.php">Cake</a></li>
          <li><a href="../gift wrap.php">Gift Wrap</a></li>
          <li><a href="../About Us.php">About Us</a></li>
          <li><a href="../feedback.php">Feedback</a></li>
        </ul>
      </div>
<!-Start the cake list -!>
        <h2 class="star">To check list of cake and infomation </h2>
        <ul class="ex_menu">
          <li><a href="Motichur ladoo.php">Motichur Ladoo</a><br/>
            Click Here Show The Next Page<br/> </li>
          <li><a href="Milk peda.php">Milk Peda</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="#">Kesar Peda</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="Wedding delights.php">Wedding Delights</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="Mix.php">Mix</a><br/>
            Click Here Show The Next Page<br/></li>
		  <li><a href="Dry fruits.php">Dry Fruits</a><br/>
            Click Here Show The Next Page<br/></li>
			<li><a href="sonpapdi.php">Sonpapdi</a><br/>
            Click Here Show The Next Page<br/></li>
        </ul>
 
 
<!-Ends the cake list -!>

<!-- END PAGE SOURCE -->

</body>
</html>