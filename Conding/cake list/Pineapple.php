
<html>
<head>
<title>Pineapple</title>
<link href="../css/style.css"  rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
  <div class="header">
    
    <div class="hbg"><img src="../images/five-star-pineapple.jpg" width="670" height="298" alt="" class="fr" />
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
        <h2>Full Information Of The Pineapple Cake </h2>
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
$sel=mysql_query("select * from admincake where `admincake`.`cid` = 14");
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
        
		<h2>Full Information Of The Pineapple Cake </h2>
		  <p id="myP" onmousedown="mouseDown()" onmouseup="mouseUp()">Alternative names:- Fengli Su, pineapple shortcake, pineapple pastry<br>
Course:- Dessert<br>
Place of origin:- Taiwan<br>
Region or state:- Southeast Asia<br>


Pineapple cake (Chinese: pinyin: fenglisu; Zhuyin Fuhao:  or Chinese: ; Peh-oe-ji ong-lai-so͘) contains butter, flour, egg, sugar, and pineapple jam. However, some bakers add or substitute pineapple with winter melon to make the jam. Its crumbly, fragrant crust and the chewy, sweet fruit filling come together as a companion for tea and other beverages.
The pineapple fruit is not really a fruit at all but is a mass of individual berries fused to the central stalk. This is why the fruit has leaves on top. They are actually the continued growth of the stalk beyond where the berries are attached. Pineapples are not grown from seed.
Pineapple tarts or nanas tart refers to small, bite-size pastries filled with or topped with pineapple jam found in different parts of Asia. In South East Asia exists one form of pineapple tart. A different form of pineapple tart, also known as pineapple pastry or pineapple cake, is found in Taiwan.

The pastry consists of a large proportion of butter and egg yolk, besides using corn starch, giving it a rich, buttery, tender and melt-in-the-mouth texture. The pineapple jam is usually made by slowly reducing and caramelizing grated fresh pineapple that has been mixed with sugar and spices usually cinnamon, star anise and cloves.
Typical shapes include a flat, open tart topped with pineapple jam under a lattice of pastry, rolls filled with jam that are open at the ends and jam-filled spheres.                           
<br><h2>History</h2>

According to the food historians, the ancient Egyptians were the first culture to show evidence of advanced baking skills. The Oxford English Dictionary traces the English word cake back to the 13th century. It is a derivation of 'kaka', an Old Norse word. Medieval European bakers often made fruitcakes and gingerbread.
The primary exporters of fresh pineapples in 2001 were Costa Rica, 322,000 tons; Cote dIvoire, 188,000 tons; and the Philippines, 135,000 tons. Since 2000, the most common fresh pineapple fruit found in U.S. and European supermarkets is a low-acid hybrid that was developed in Hawaii in the early 1970s.		  
The word pineapple in English was first recorded to describe the reproductive organs of conifer trees (now termed pine cones). When European explorers discovered this tropical fruit in the Americas, they called them "pineapples" (first referenced in 1664 for resemblance to the pine cone).		  
		  
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
          <li><a href="../feedback.php">feedback</a></li>
        </ul>
      </div>
<!-Start the cake list -!>
        <h2 class="star">To check list of cake and infomation </h2>
        <ul class="ex_menu">
          <li><a href="Blackforest.php">Blackforest</a><br/>
            Click Here Show The Next Page<br/> </li>
          <li><a href="Buttercotch.php">Buttercotch</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="Raspberry.php">Raspberry</a><br/>
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
		  <li><a href="#">Pineapple</a><br/>
            Click Here Show The Next Page<br/></li>
        </ul>
 
 
<!-Ends the cake list -!>

<!-- END PAGE SOURCE -->

</body>
</html>