<html>
<head>
<title>Choclate</title>
<link href="../css/style.css"  rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
  <div class="header">
    <div class="hbg"><img src="../images/choclate.jpg" width="670" height="298" alt="" class="fr" />
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
        <h2>Price Of Choclate Cake </h2>
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
$sel=mysql_query("select * from admincake where `admincake`.`cid` = 7");
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
       <h2>Full Information Of The Choclate Cake </h2>
	  <p id="myP" onmousedown="mouseDown()" onmouseup="mouseUp()">Chocolate most commonly comes in dark, milk, and white varieties, with cocoa solids contributing to the brown color.
	  Chocolate is a typically sweet, usually brown food preparation of Theobroma cacao seeds, roasted and ground, and often flavored with vanilla. It is made in the form of a liquid, paste, or in a block, or used as a flavoring ingredient in other foods. Cacao has been cultivated by many cultures for at least three millennia in Mesoamerica. The earliest evidence of use traces to the Mokaya (Mexico and Guatemala), with evidence of chocolate beverages dating back to 1900 BCE. In fact, the majority of Mesoamerican people made chocolate beverages, including the Maya and Aztecs, who made it into a beverage known as xocolatl Nahuatl pronunciation: Nahuatl word meaning "bitter water". The seeds of the cacao tree have an intense bitter taste and must be fermented to develop the flavor. 
	   
	  <br><h2>History</h2> 
	   
	   Chocolate cake is made with chocolate; it can be made with other ingredients, as well. These ingredients include fudge, vanilla creme, and other sweeteners. The history of chocolate cake goes back to 1764, when Dr. James Baker discovered how to make chocolate by grinding cocoa beans between two massive circular millstones.


Choco rose cake
In 1828, Conrad Van Houten of the Netherlands developed a mechanical extraction method for extracting the fat from cacao liquor resulting in cacao butter and the partly defatted cacao, a compacted mass of solids that could be sold as it was "rock cacao" or ground into powder. The processes transformed chocolate from an exclusive luxury to an inexpensive daily snack. A process for making silkier and smoother chocolate called conching was developed in 1879 by Rodolphe Lindt and made it easier to bake with chocolate as it amalgamates smoothly and completely with cake batters. Until 1890 to 1900, chocolate recipes were mostly for drinks.

The Duff Company of Pittsburgh, a molasses manufacturer, introduced Devil's food chocolate cake mixes in the mid-1930s, but introduction was put on hold during World War II. Duncan Hines introduced a "Three Star Special" (so called because a white, yellow or chocolate cake could be made from the same mix) was introduced three years after cake mixes from General Mills and Duncan Hines, and took over 48 percent of the market.
In the U.S., "chocolate decadence" cakes were popular in the 1980s; in the 1990s, single-serving molten chocolate cakes with liquid chocolate centers and infused chocolates with exotic flavors such as tea, curry, red pepper, passion fruit, and champagne were popular. Chocolate lounges and artisanal chocolate makers were popular in the 2000s. Rich, flourless, all-but-flourless chocolate cakes are "now standard in the modern patisserie," according to The New Taste of Chocolate.
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
          <li><a href="Blackforest.php">Blackforest</a><br/>
            Click Here Show The Next Page<br/> </li>
          <li><a href="Buttercotch.php">Buttercotch</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="Raspberry.php">Raspberry</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="#">Choclate</a><br/>
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