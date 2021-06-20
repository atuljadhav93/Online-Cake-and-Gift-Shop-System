<html>
<head>
<title>Buttercotch</title>
<link href="../css/style.css"  rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
  <div class="header">
     <div class="hbg"><img src="../images/BUTTER SCOTCH PASTRIES.png" width="670" height="298" alt="" class="fr" />
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
$sel=mysql_query("select * from admincake where `admincake`.`cid` =6");
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
       <h2>Full Information Of The Buttercotch Cake </h2> 
		<p id="myP" onmousedown="mouseDown()" onmouseup="mouseUp()">
		   Type :- confectionery <br> Place of origin :- England <br> Main ingredients :-  brown sugar and butter<br>For the singer/beatboxer who appeared on America's Got Talent, see Butterscotch (performer). For the similarly named South Park character, see Butters Stotch.Butterscotch is a type of confectionery whose primary ingredients are brown sugar and butter, although other ingredients are part of some recipes, such as corn syrup, cream, vanilla, and salt. The earliest known recipes in the middle 19th century used treacle in place of or in addition to sugar.

Butterscotch is similar to toffee, but for butterscotch the sugar is boiled to the soft crack stage, and not hard crack as with toffee. Butterscotch sauce, made of butterscotch and cream, is used as a topping for ice cream (particularly sundaes).

The term butterscotch is also often used more specifically of the flavour of brown sugar and butter together, even where the actual confection butterscotch is not involved, such as in butterscotch pudding.<br><h2>History</h2>Early mentions of butterscotch associate the confection with Doncaster in Yorkshire. An 1848 issue of the Liverpool Mercury gave a recipe for Doncaster butterscotch as one pound of butter, one pound of sugar and a quarter of a pound of treacle, boiled together (450 g each of butter and sugar and 110 g treacle).
By 1851, Doncaster butterscotch was sold commercially by rival confectioners S. Parkinson Sons (still trading as Parkinsons), Henry Hall, and Booth's, all of Doncaster, via agents elsewhere in Yorkshire. Internationally, Parkinson's was recognised as the inventor but others tried to claim the product for themselves, Parkinson's started to use and advertise the Doncaster Church as their trademark.

It was advertised as Royal Doncaster Butterscotch, or The Queen's Sweetmeat, and said to be the best emollient for the chest in the winter season. Parkinson's Butterscotch was by appointment to the royal household and was presented to the Princess Elizabeth, then the Duchess of Edinburgh, in 1948 and to Anne, Princess Royal in 2007.

In 1855, F. K. Robinson's Glossary of Yorkshire Words explained Butterscotch as a treacle ball with an amalgamation of butter in it.
		
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
          <li><a href="Blackforest.php">Blackforest</a><br/>
            Click Here Show The Next Page<br/> </li>
          <li><a href="#">Buttercotch</a><br/>
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