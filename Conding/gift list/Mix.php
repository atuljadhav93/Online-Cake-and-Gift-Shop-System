<html>
<head>
<title>Mix</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- START PAGE SOURCE -->
<div class="main">
  <div class="header">
    <div class="hbg"><img src="../images/gift wrap.jpg" width="670" height="298" alt="" class="fr" />
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
        <h2>Full Information Of The Mix</h2>
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
$sel=mysql_query("select * from admingift where `admingift`.`gid` = 5");
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
	   
	       
	   <h2>Full Information Of The Mix</h2>
	   <p id="myP" onmousedown="mouseDown()" onmouseup="mouseUp()">Health Benefits of Sweets + Fats<br>
Because oils contain the essential fatty acids linoleic acid and alpha-linolenic acid, there is an allowance for oils in the MyPlate food guide.

Oils are the major source of fatty acids that are necessary for health—called essential fatty acids.

While consuming some oil is needed for health, oils still contain calories. In fact, oils and solid fats both contain about 120 calories per tablespoon. Therefore, the amount of oil consumed needs to be limited to balance total calorie intake. To find out how many calories you need every day, take the Healthy Eating My Way quiz.

In addition to vegetable oils, such as olive, canola and soybean oils, a number of foods are naturally high in fats, like:

<br>1)nuts<br>
<br>2)olives<br>
<br>3)oily fish<br>
<br>4)avocados<br>
   <h2>Good News About Sweets</h2><br>
Chocolate is a favorite sweet treat that also has health benefits. It contains flavonoids, which act as antioxidants. Antioxidants protect the body from aging caused by free radicals, which can cause damage that leads to heart disease.

While chocolate contains ingredients beneficial to health, it does not mean you should overeat chocolate. Chocolate bars and candies are often high in fat, sugar and calories. Moderation is always the key and dark chocolate conveys more benefits than milk chocolate!

Sweets and fats can contribute to optimum health due to the health promoting phytochemicals they may contain many of which are still being identified.   
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
          <li><a href="Motichur ladoo.phpl">Motichur Ladoo</a><br/>
            Click Here Show The Next Page<br/> </li>
          <li><a href="Milk peda.php">Milk Peda</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="Kesar peda.php">Kesar Peda</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="Wedding delights.php">Wedding Delights</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="#">Mix</a><br/>
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