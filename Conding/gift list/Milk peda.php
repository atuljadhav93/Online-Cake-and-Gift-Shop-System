<html>
<head>
<title>Milk peda</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- START PAGE SOURCE -->
<div class="main">
  <div class="header">
    <div class="hbg"><img src="../images/milk-peda.jpg" width="670" height="298" alt="" class="fr" />
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
        <h2>Price Of Milk peda</h2>
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
$sel=mysql_query("select * from admingift where `admingift`.`gid` =2");
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
        
		<div class="clr"></div><h2>Full Information Of The Milk peda</h2>
        <p id="myP" onmousedown="mouseDown()" onmouseup="mouseUp()">Milk Peda Recipe without Condensed Milk: Peda or pedhe are like soft milk fudge which has a slight grainy  texture. The word peda or pedha usually means round balls made from khoa or any dough. We say make peda out of anything. However the word peda is synonymous with traditional Indian milk fudge sweet. I guess peda might even be the oldest traditional sweet in India dating back for centuries.

The history of peda predates most of Indian sweets. According to wikipedia, peda were originated in the state of Uttar pradesh and the variety available in the city of Mathura is considered to be the best one. And to my pleasant surprise peda where also prepared during the same time in the state of Saurashtra which is now a province in Gujarat state (Peda are called Penda in Gujarati language). I guess thats why Peda from city of Rajkot and Bhavnagar are so delightful and popular in India. During later part of century the recipe spread out across India and now you cannot find a town where peda is not made.

Traditional peda is made from sugar and khoa or khoya. Khoa is prepared by drying out milk in an open iron pan by heating the milk. The dry milk solids are then combined with different flavoring agent like cardamom, saffron etc. It give distinct flavor to peda. Peda can also be made using milk as I have shown in this recipe. Although it takes longer time compared to peda made from khoa but the result is more or less similar.

Being considered as an auspicious sweet, milk pedhe are also served as prasaad or prasadum in religious services.
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
          <li><a href="#">Milk Peda</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="Kesar peda.php">Kesar Peda</a><br/>
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