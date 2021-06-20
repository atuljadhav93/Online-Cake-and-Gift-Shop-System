<html>
<head>
<title>Jeli</title>
<link href="../css/style.css"  rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
  <div class="header">
    
    <div class="hbg"><img src="../images/jeli22.jpg" width="670" height="298" alt="" class="fr" />
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
        <h2>Price Of Jeli Cake </h2>
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
$sel=mysql_query("select * from admincake where `admincake`.`cid` = 12");
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
          
		      <h2>Full Information Of The Jeli Cake </h2>
		     <p id="myP" onmousedown="mouseDown()" onmouseup="mouseUp()">Type:- Gelatin desserts, puddings<br>
Course:- Dessert<br>
Place of origin:- United States<br>
Region or state:- LeRoy, New York<br>
Creator:- Pearle Wait<br>
Invented:- 1897<br>
Main ingredients:- Powdered gelatin, sugar or artificial sweetener, artificial flavors, food coloring
	
<br>Jell-O is a registered trademark of Kraft Foods for varieties of gelatin desserts, including fruit gels, puddings and no-bake cream pies.
<br><h2>History</h2>	

	
	Gelatin, a protein produced from collagen extracted from boiled bones, connective tissues, and other animal products, has been a component of food, particularly desserts, since the 15th century.

Gelatin was popularized in Bellows Falls in the Victorian era with spectacular and complex "jelly moulds". Gelatin was sold in sheets and had to be purified, which was time-consuming. Gelatin desserts were the province of royalty and the relatively well-to-do. In 1845, a patent for powdered gelatin was obtained by industrialist Peter Cooper, who built the first American steam-powered locomotive, the Tom Thumb. This powdered gelatin was easy to manufacture and easier to use in cooking.

In 1897, in LeRoy, New York, carpenter and cough syrup manufacturer, Pearle Bixby Wait trademarked a gelatin dessert, called Jell-O. He and his wife May added strawberry, raspberry, orange and lemon flavoring to granulated gelatin and sugar. Then in 1899, Jell-O was sold to Orator Francis Woodward (1856 to 1906), whose Genesee Pure Food Company produced the successful Grain-O health drink. Part of the legal agreement between Woodward and Wait dealt with the similar Jell-O name

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
		  <li><a href="#">Jeli</a><br/>
            Click Here Show The Next Page<br/></li>
		  <li><a href="Pineapple.php">Pineapple</a><br/>
            Click Here Show The Next Page<br/></li>
        </ul>
 
 
<!-Ends the cake list -!>

<!-- END PAGE SOURCE -->

</body>
</html>