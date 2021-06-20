<html>
<head>
<title>Vanilla bean</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
  <div class="header">
     <div class="hbg"><img src="../images/vanilla bean.jpg" width="670" height="298" alt="" class="fr" />
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
	  <h2>Price Of Vanilla bean Cake </h2>
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
$sel=mysql_query("select * from admincake where `admincake`.`cid` =9");
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
        
		<h2>Full Information Of The Vanilla bean Cake </h2>
		  <p id="myP" onmousedown="mouseDown()" onmouseup="mouseUp()">Vanilla is a flavoring derived from orchids of the genus Vanilla, primarily from the Mexican species, flat-leaved vanilla (V. planifolia). The word vanilla, derived from the diminutive of the Spanish word vaina (vaina itself meaning sheath or pod), is translated simply as "little pod". Pre-Columbian Mesoamerican people cultivated the vine of the vanilla orchid, called tlilxochitl by the Aztecs. Spanish conquistador Hernan Cortes is credited with introducing both vanilla and chocolate to Europe in the 1520s.

Initial attempts to cultivate vanilla outside Mexico and Central America proved futile because of the symbiotic relationship between the vanilla orchid and its natural pollinator, the local species of Melipona bee. Pollination is required to set the fruit from which the flavoring is derived. In 1837, Belgian botanist Charles Francois Antoine Morren discovered this fact and pioneered a method of artificially pollinating the plant. The method proved financially unworkable and was not deployed commercially. In 1841, Edmond Albius, a slave who lived on the French island of Reunion in the Indian Ocean, discovered at the age of 12 that the plant could be handpollinated. Handpollination allowed global cultivation of the plant.

Three major species of vanilla currently are grown globally, all of which derive from a species originally found in Mesoamerica, including parts of modern-day Mexico. They are V. planifolia (syn. V. fragrans), grown on Madagascar, Reunion, and other tropical areas along the Indian Ocean; V. tahitensis, grown in the South Pacific; and V. pompona, found in the West Indies, and Central and South America. The majority of the world's vanilla is the V. planifolia species, more commonly known as Bourbon vanilla (after the former name of Reunion, Ile Bourbon) or Madagascar vanilla, which is produced in Madagascar and neighboring islands in the southwestern Indian Ocean, and in Indonesia.

Vanilla is the secondmost expensive spice after saffron, because growing the vanilla seed pods is laborintensive. Despite the expense, vanilla is highly valued for its flavor. As a result, vanilla is widely used in both commercial and domestic baking, perfume manufacture, and aromatherapy.
		
		<br><h2>History</h2>
		
		The Totonac people, who inhabit the East Coast of Mexico in the present day state of Veracruz, were the first to cultivate vanilla. According to Totonac mythology, the tropical orchid was born when Princess Xanat, forbidden by her father from marrying a mortal, fled to the forest with her lover. The lovers were captured and beheaded. Where their blood touched the ground, the vine of the tropical orchid grew. In the 15th century, Aztecs invading from the central highlands of Mexico conquered the Totonacs, and soon developed a taste for the vanilla pods. They named the fruit tlilxochitl, or "black flower", after the matured fruit, which shrivels and turns black shortly after it is picked. Subjugated by the Aztecs, the Totonacs paid tribute by sending vanilla fruit to the Aztec capital, Tenochtitlan.

Until the mid-19th century, Mexico was the chief producer of vanilla. In 1819, however, French entrepreneurs shipped vanilla fruits to the islands of Reunion and Mauritius in hopes of producing vanilla there. After Edmond Albius discovered how to pollinate the flowers quickly by hand, the pods began to thrive. Soon, the tropical orchids were sent from Reunion Island to the Comoros Islands, Seychelles, and Madagascar, along with instructions for pollinating them. By 1898, Madagascar, Reunion, and the Comoros Islands produced 200 metric tons of vanilla beans, about 80% of world production. According to the United Nations Food and Agriculture Organisation, Indonesia is currently responsible for the vast majority of the world's Bourbon vanilla production and 58% of the world total vanilla fruit productio
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
          <li><a href="#">Vanilla bean</a><br/>
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