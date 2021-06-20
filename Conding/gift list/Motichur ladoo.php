<html>
<head>
<title>Motichur ladoo</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- START PAGE SOURCE -->
<div class="main">
  <div class="header">
    <div class="hbg"><img src="../images/mothichur ladoo.png" width="670" height="298" alt="" class="fr" />
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
        <h2>Price Of Motichur ladoo</h2>
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
$sel=mysql_query("select * from admingift where `admingift`.`gid` = 1");
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
		
        <h2>Full Information Of The Motichur ladoo</h2>
		  <p id="myP" onmousedown="mouseDown()" onmouseup="mouseUp()">Place of origin:- India<br>
Main ingredients:- Flour, milk, sugar<br>
Variations:- Gram flour, rava<br>
Other information:- Served on festive or religious occasions<br>

Laddu or laddoo are ball-shaped sweets popular in the Indian Subcontinent. Laddus are made of flour, minced dough and sugar with other ingredients that vary by recipe. They are often served at festive or religious occasions.
Boondi laddu.
Common flours used for laddu include besan (chickpea flour), rava (wheat semolina) and ground coconut. These are combined with sugar and other flavorings, cooked in ghee and molded into a ball shape.
Mithai (Sweets) is the traditional dessert or choice of sweets in countries like Pakistan, India Bangladesh.
is a Rajasthani snack food made from sweetened, fried chickpea flour. Being very sweet, it can be stored for a week or so. Due to the need for preserving food in arid regions of Rajasthan, boondi laddu are preferred. There is also a savory version, called Khara or Tikha.
Boondi laddu or Bundiar Laddu is made from boondi. It is often served in occasions like marriages, or festivals such as Raksha bandhan and Diwali. Motichoor laddu is made from fine boondi where the balls are tiny and is cooked with ghee or oil. Originally this laddu was a north indian sweet, but it is now popular throughout South Asia.
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
          <li><a href="#">Motichur Ladoo</a><br/>
            Click Here Show The Next Page<br/> </li>
          <li><a href="Milk peda.php">Milk Peda</a><br/>
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