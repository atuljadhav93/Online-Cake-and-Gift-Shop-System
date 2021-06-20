<html>
<head>
<title>Ice cake</title>
<link href="../css/style.css"  rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
  <div class="header">
    <div class="hbg"><img src="../images/ice 1.jpg" width="670" height="298" alt="" class="fr" />
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
        <h2>Cake Of Ice Cake</h2>
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
$sel=mysql_query("select * from admincake where `admincake`.`cid` = 10");
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
        
<h2>Full Information Of The Ice Cake</h2>
<p id="myP" onmousedown="mouseDown()" onmouseup="mouseUp()">Type:- Cake<br>
Course:- Dessert<br>
Creator:- Loyal Linton, Russell Hattal, Leon Huggins, Conner Wilson<br>


An ice cream cake is a cake that incorporates ice cream. A popular form is a three-layer cake, with a layer of ice cream between two layers of cake, although not all versions contain cake.

In a typical assembly, the cake component is baked in the normal way, cut to shape if necessary, and then frozen. Ice cream is shaped in a mold as appropriate, and these components are then assembled while frozen. Whipped cream is often used for frosting, as a compliment to the two other textures, and because many typical frostings will not adhere successfully to frozen cake. The whole cake is then kept frozen until prior to serving, when it is allowed to thaw until it can be easily sliced but not so much as to melt the ice cream.

It is related to a Baked Alaska in that it incorporates ice cream. Unlike a Baked Alaska, however, the ice cream never goes into the oven.

Ice cream cake is a popular party food, often eaten at birthdays and weddings, particularly in North America and Australia. It is not as well known in Europe.

Ice cream cake was originally made from biscuits and cream. Victorian era desserts called bombes consisted of ice cream and fruit in decorative molds. Sometimes these desserts were lined with cake or biscuits. Ice cream cake recipes dating to the 1870s have also been found.

<br><h2>History</h2>
Ice cream cake was originally made from biscuits and cream. Victorian era desserts called bombes consisted of ice cream and fruit in decorative molds. Sometimes these desserts were lined with cake or biscuits. Ice cream cake recipes dating to the 1870s have also been found.

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
		  <li><a href="#">Ice Cake </a><br/>
            Click Here Show The Next Page<br/></li>
		  <li><a href="Bluebarry.php">Bluebarry</a><br/>
            Click Here Show The Next Page<br/></li>
		  <li><a href="Jeli.html">Jeli</a><br/>
            Click Here Show The Next Page<br/></li>
		  <li><a href="Pineapple.php">Pineapple</a><br/>
            Click Here Show The Next Page<br/></li>
        </ul>
 
 
<!-Ends the cake list -!>

<!-- END PAGE SOURCE -->

</body>
</html>