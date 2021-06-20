<html>
<head>
<title>Strawberry</title>
<link href="../css/style.css"  rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
  <div class="header">
     <div class="hbg"><img src="../images/strawberry cake.jpg" width="670" height="298" alt="" class="fr" />
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
        <h2>Price Of Strawberry Cake </h2>
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
$sel=mysql_query("select * from admincake where `admincake`.`cid` =8");
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
       
<h2>Full Information Of The Strawberry Cake </h2>
<p id="myP" onmousedown="mouseDown()" onmouseup="mouseUp()">Created by :- Muriel Fahrion<br>
Country of origin :- United States<br>
Strawberry Shortcake is a licensed character owned by Iconix Brand Group, originally used in greeting cards and expanded to include dolls, posters, and other products. The Strawberry Shortcake properties also include a toy line of the character's friends and pets.
<br><h2>History</h2> 
The original design of Strawberry Shortcake and her cat, Custard was done in 1979 by Muriel Fahrion during her time as a greeting card illustrator at American Greetings Juvenile Humorous card department. Fahrion then designed a subsequent 32 characters for Those Characters From Cleveland (American Greetings toy licensing design division).

In 1979, toy manufacturer, Kenner Products, licensed the character and released the first Strawberry Shortcake doll. At the time, Strawberry Shortcake resembled a typical rag doll, complete with freckles, a mop of red yarn curls, and a bonnet with strawberry prints on it. Cindy Mayer Patton and Janet Jones designed the other later characters of the classic Strawberry Shortcake line. Lynn Edwards was the editor of the line and developed the personality profiles as well as the story line and philosophy. The first doll was a rag doll designed by Muriel Fahrion and created by Susan Trentel, Fahrions sister.

The Strawberry Shortcake line of characters each had their own fruit or dessert-themed name with clothing to match, and they each had a dessert- or fruit-named pet. Like the Strawberry Shortcake doll, all the other characters dolls had hair scented to match their dessert theme. The characters lived and played in a magical world known as Strawberryland.

During the 1980s, Strawberry Shortcake became a huge fad for young girls throughout the United States. At the time, there were many related products, such as sticker albums, clothing, a video game by Parker Bros. entitled Strawberry Shortcake Musical Match-Ups for the Atari 2600, and numerous other products. Several TV specials were made featuring the characters, one each year between 1980 and 1985, when the fad had waned. Kenner produced no new dolls or toys thereafter.

In 1991, THQ tried reviving the franchise by producing an updated line of Strawberry Shortcake dolls. Strawberry and five of her classic friends each got a makeover with new clothes, hair, and eyes. However, the line enjoyed at best a modest success, lasting just the one year.

In 2002, the franchise was revived again, this time with a revamped look by a different designer. Many strong licensing deals were made. A television series with new DVDs and VHSs (and in some markets, particularly those in Asia, Video CDs) were released. Soundtracks for the episodes were also released on CD at various intervals. DiC Entertainment was granted rights for producing the TV series. The company sublicensed the production of videos, DVDs and Video CDs of the Strawberry Shortcake series to 20th Century Fox Home Videos. 20th Century Fox subsequently licensed the production of these videos outside of the U.S. to various other licensees.

Bandai (along with KellyToy) was granted the manufacturing rights of the Strawberry Shortcake dolls and toys. For the first time in almost two decades, new videogames were launched, produced by The Game Factory for Nintendo's Game Boy Advance and Nintendo DS. Educational CD-ROMs for the PC were also produced.

In 2006, Playmates Toys picked up the rights to manufacture and sell Strawberry Shortcake figurines. The line they produced was named "A World of Friends" and the doll "Frosty Puff" debuted in this new product line. Although a good deal of shuffling and redistribution took place concerning the pets of the re-launched Strawberry Shortcake characters, very few of the new dolls were actually merchandised with their respective pets.

A full-length feature film, Strawberry Shortcake: The Sweet Dreams Movie, premiered in 2006 and was released on DVD in February 2007.

The Playmates' new product line was met with mixed reactions from the series fans; however, the line's public reception was generally negative. As a result, Playmates Toys lost the manufacturing rights to Hasbro, who began releasing new Strawberry Shortcake themed toys beginning in the fall of 2009, after American Greetings rebooted the franchise.

Hasbro eventually lost the manufacturing rights to The Bridge Direct in early 2014.

In February 2015, Iconix Brand Group acquired the rights to Strawberry Shortcake from American Greetings for $105 million.


</p>

<script>
function mouseDown() {
    document.getElementById("myP").style.color = "red";
}

function mouseUp() {
    document.getElementById("myP").style.color = "blue";
}
</script>	   
		
		
        <div class="clr"></div>
      
	  
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
          <li><a href="Choclate.php">Choclate</a><br/>
            Click Here Show The Next Page<br/></li>
          <li><a href="#">Strawberry</a><br/>
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