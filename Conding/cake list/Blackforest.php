<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title>Blackforest</title>

<link href="../css/style.css"  rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
  <div class="header">
    <div class="hbg"><img src="../images/black-forest-1024x683.jpg" width="670" height="298" alt="" class="fr" />
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
        <h2> Price of Blackforest Cake </h2>
            <h2 style="color:#bf00ff;">Looking for delivery less than 5 hours.</h2>		
		</h2>
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
$sel=mysql_query("select * from admincake where `admincake`.`cid` = 5");
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
       
		<h2>Full Information Of The Blackforest Cake </h2>
	        <p id="myP" onmousedown="mouseDown()" onmouseup="mouseUp()" >  Alternative names:- Black Forest <br> Cake Place of origin:- Germany<br>Creator:- Josef Keller <br> Main Ingredients:- Chocolate cake, cherries, whipped cream, kirschwasser <br>
Black Forest gateau (British English) and Black Forest cake (American English) are the English names for the German desser, literally "Black Forest cherry-torte", where it originated. Typically, Black Forest gateau consists of several layers of chocolate sponge cake<br>
sandwiched with whipped cream and cherries. It is decorated with additional whipped cream, maraschino cherries, and chocolate shavings. In some European traditions, sour cherries are3 used both between the layers and for decoating the top. Traditionally, kirschwasser, a cleaar spirit made from sour cherries, is added to the cake.
Other spirits are sometimes used, such as rum, which is common in Austrian recipes. In India, Black Forest Cake is generally prepared without alcohol,  German law mandates that kirschwasser must be present in the cake for it to be labelled. 
<br></p>
<p>
<h2>History</h2>
The dessert is named not directly after the Black Forest mountain range in southwestern Germany but rather from the specialty liquour of that region, known as wasser and distilled from tart cherries. This is the ingredient, with its distnctive cherry pit flavor and alcoholic content, that gives the dessert its flavor. cherries, cream, and kirschwasser were first combined in the form of adessert in which cooked cherries were served with cream and kirschwasser, while acke combining cherries, cookies and cream probably originated in 
Germany. The confectioner <h2>Josef Keller (1887-1981)</h2> claimed to have invented Schwarzwalder Kirschtorte in its present fo Schwarzwalder Kirschtorte was first mentioned in writing in 1934.[dubious discuss] At the time it was particularly associated with Berlin but was also available from high class confectioners in other German, Austrian, and Swiss cities. In 1949 it took 13th place in a list of best-known German cakes[citation needed], and since that time Schwarzwalder Kirschtorte has become world-renowned.
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
          <li><a href="#">Blackforest</a><br/>
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
		  <li><a href="Pineapple.php">Pineapple</a><br/>
            Click Here Show The Next Page<br/></li>
        </ul>
 
 
<!-Ends the cake list -!>

<!-- END PAGE SOURCE -->

</body>
</html>