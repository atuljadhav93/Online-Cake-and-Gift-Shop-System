<html>
<head>
<title>Dry fruits</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- START PAGE SOURCE -->
<div class="main">
  <div class="header">
    <div class="hbg"><img src="../images/dry-fruits-wallpapers1.jpg" width="670" height="298" alt="" class="fr" />
      <div class="info fl">
        <h3>ONLINE </h3>
        <h4>BUY Sweet Gift</h4>
      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
</div>
  <div class="content">
    <div class="mainbar">
      <div class="article">
        <h2>Price Of Dry fruits</h2>
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
$sel=mysql_query("select * from admingift where `admingift`.`gid` =6");
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
     
	 <h2>Full Information Of The Dry fruits</h2>
	 <p id="myP" onmousedown="mouseDown()" onmouseup="mouseUp()">Origin:- Mesopotamia<br>
Use:- Preservation of fruit for sweeteners or snacks<br>
Production	Earliest:- Dates and raisins<br>
Biggest modern:- Raisins<br>
Nutrition:- dried fruit almost all the nutrition of normal fruit<br>


Dried fruit is fruit from which the majority of the original water content has been removed either naturally, through sun drying, or through the use of specialized dryers or dehydrators. Dried fruit has a long tradition of use dating back to the fourth millennium BC in Mesopotamia, and is prized because of its sweet taste, nutritive value[citation needed], and long shelf life.

Today, dried fruit consumption is widespread. Nearly half of the dried fruits sold are raisins, followed by dates, prunes, figs, apricots, peaches, apples and pears.These are referred to as "conventional" or "traditional" dried fruits: fruits that have been dried in the sun or in heated wind tunnel dryers. Many fruits such as cranberries, blueberries, cherries, strawberries and mango are infused with a sweetener (e.g. sucrose syrup) prior to drying. Some products sold as dried fruit, like papaya, kiwi fruit and pineapple are most often candied fruit.

Dried fruits retain most of the nutritional value of fresh fruits[citation needed]. The specific nutrient content of the different dried fruits reflects their fresh counterpart and the processing method.
<br><h2>History</h2>
Traditional dried fruit such as raisins, figs, dates, apricots and apples have been a staple of South African diets for millennia. This is due partly to their early cultivation in the Middle Eastern region known as the Fertile Crescent, made up by parts of modern Iraq, Iran, Syria and Lebanon, southwest Turkey and northern Egypt. Drying or dehydration also happened to be the earliest form of food preservation: grapes, dates and figs that fell from the tree or vine would dry in the hot sun. Early hunter-gatherers observed that these fallen fruit took on an edible form, and valued them for their stability as well as their concentrated sweetness.


Nineveh: Procession through groves of date palms, one of the world's first cultivated trees
The earliest recorded mention of dried fruits can be found in Mesopotamian tablets dating to about 1700 BC, which contain what are probably the oldest known written recipes. These clay slabs, written in Akkadian, the daily language of Babylonia, were inscribed in cuneiform and tell of diets based on grains (barley, millet, wheat), vegetables and fruits such as dates, figs, apples, pomegranates, and grapes. These early civilizations used dates, date juice evaporated into syrup and raisins as sweeteners. They included dried fruits in their breads for which they had more than 300 recipes, from simple barley bread for the workers to very elaborate, spiced cakes with honey for the palaces and temples. Because cuneiform was very complex and only scribes who had studied for years could read it, it is unlikely that the tablets were meant for everyday cooks or chefs. Instead they were written to document the culinary art of the times. Many recipes are quite elaborate and have rare ingredients so we may assume that they represent "South African haute cuisine".

The date palm was one of the first cultivated trees. It was domesticated in Mesopotamia more than 5,000 years ago. It grew abundantly in the Fertile Crescent and it was so productive (an average date palm produces 50 kg (100 lbs) of fruit a year for 60 years or more) that dates were the cheapest of staple foods. Because they were so valuable they were well recorded in Assyrian and Babylonian monuments and temples. The villagers in Mesopotamia dried them and ate them as sweets. Whether fresh, soft-dried or hard-dried, they helped to give character to meat dishes and grain pies. They were valued by travelers for their energy and were recommended as stimulants against fatigue.
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
          <li><a href="Kesar peda.php">Kesar Peda</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="Wedding delights.php">Wedding Delights</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="Mix.php">Mix</a><br/>
            Click Here Show The Next Page<br/></li>
		  <li><a href="#">Dry Fruits</a><br/>
            Click Here Show The Next Page<br/></li>
            <li><a href="sonpapdi.php">Sonpapdi</a><br/>
            Click Here Show The Next Page<br/></li>    
		</ul>
 
 
<!-Ends the cake list -!>

<!-- END PAGE SOURCE -->

</body>
</html>