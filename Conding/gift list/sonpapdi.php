<html>
<head>
<title>Sonpapdi</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- START PAGE SOURCE -->
<div class="main">
  <div class="header">
    <div class="hbg"><img src="../images/sonpapdi.jpg" width="670" height="298" alt="" class="fr" />
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
        <h2>Price Of Sonpapdi</h2>
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
$sel=mysql_query("select * from admingift where `admingift`.`gid` = 7");
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
		
          <h2>Full Information Of The Sonpapdi</h2>
	 <p id="myP" onmousedown="mouseDown()" onmouseup="mouseUp()">Alternative names:- Soam papdi, patisa, shonpapri<br>
Place of origin:- India and Pakistan<br>
Region or state:- India and Pakistan<br>
Main ingredients:- Gram flour, sugar, flour, ghee, milk, cardamom<br>
	 
Soan papdi (also known as patisa, son papri, sohan papdi or shonpapri) is a popular North Indian dessert. It is usually cube-shaped or served as flakes, and has a crisp and flaky texture.
</P>
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