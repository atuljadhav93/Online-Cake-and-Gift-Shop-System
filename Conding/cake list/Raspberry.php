<html>
<head>
<title>Raspberry</title>
<link href="../css/style.css"  rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
  <div class="header">
     <div class="hbg"><img src="../images/Raspberry cake.JPG" width="670" height="298" alt="" class="fr" />
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
        <h2> Price Of Raspberry Cake </h2>
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
$sel=mysql_query("select * from admincake where `admincake`.`cid` =13");
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
        <h2>Full Information Of The Raspberry Cake </h2>
<p id="myP" onmousedown="mouseDown()" onmouseup="mouseUp()">
The raspberry is a small delicate berry. Raspberries have a similar structure to blackberries, but they are hollow. Red raspberries are the most common type but there are also golden, amber, and purple berries all similar in taste and texture. In the USA raspberries are often imported from Chile, while most of the fruit comes from California. Raspberry season begins in June and lasts through October in the northern hemisphere. In Europe raspberries are grown in most places and imported in large quantities from south eastern Europe, particulary Serbia and Bulgaria.<h2>Blue raspberry</h2><br>is a common flavoring for candy, snack foods, syrups and soft drinks. The flavor originates from Rubus leucodermis, more commonly known as the "whitebark raspberry" or "blue raspberry" for the blue-black color of its fruit.

Food products labeled as blue raspberry flavor often contain a bright blue food coloring, the most common being Brilliant Blue FCF, although this coloring is not an accurate rendition of the actual color of the fruit, which has an almost black hue when ripe. The blue color also helps distinguish raspberry-flavored foods from cherry- and strawberry-flavored foods (the former usually being colored red, and the latter also sometimes colored red but often colored pink if the same product is also available in a cherry flavor).
Raspberry juice is a liquid created from raspberries that is often either used as a part of a mixed drink, added in with other liquids such as orange juice, or consumed by itself. The juice is known for containing a large amount of Vitamin C as well as biological iron, which means it is sometimes drank when an individual feels feverish. Soft drinks that incorporate raspberry juice notably include Bouvrage, a product made from Scottish raspberries that the husband and wife team Anne Thomson and John Gallagher created. Launched in 1998 at that year's Royal Highland Show, that particular drink includes sparkling water and is designed to be somewhat sweet yet having a fruit content in contrast to competing products.

<h2>Raspberry juice</h2><br>can also be used to make smoothies. Other berries, such as blueberries, are commonly added either in whole, crushed, or juiced form.

Other examples of its use include as a part of cocktails, being a part of mixed alcoholic drinks served in bars and restaurants, and as a key ingredient in making the raspberry jelly desserts.

In terms of background, raspberries are an important commercial fruit crop not just in heavily cultivated, temperate areas but around the world. The top ten countries in terms of production include Mexico, Poland, Russia, and the United States.
</p>		
		<script>
function mouseDown() {
    document.getElementById("myP").style.color = "red";
}

function mouseUp() {
    document.getElementById("myP").style.color = "blue";
}
</script>
		
        <div class="clr"></div>
    


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
          <li><a href="Blackforest.php">Blackforest</a><br/>
            Click Here Show The Next Page<br/> </li>
          <li><a href="Buttercotch.php">Buttercotch</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="#">Raspberry</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="Choclate.php">Choclate</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="Strawberry.php">Strawberry</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="Vanilla bean.php">Vanilla bean</a><br/>
            Click Here Show The Next Page<br/></li>
		  <li><a href="Ice cake.php">Ice Cake </a><br/>
            Click Here Show The Next Page<br/></li>
		  <li><a href="Bluebarry.php">Bluebarry</a><br/>
            Click Here Show The Next Page<br/></li>
		  <li><a href="Jeli.php">Jeli</a><br/>
            Click Here Show The Next Page<br/></li>
		  <li><a href="Pineapple.php">Pineapple</a><br/>
            Click Here Show The Next Page<br/></li>
        </ul>
 
 
<!-Ends the cake list -!>

<!-- END PAGE SOURCE -->

</body>
</html>