<?php
$db=mysql_connect("localhost","root","");
$er=mysql_select_db("cakegift");
//$query="insert into rname(Names,Address1,Address2,E-mail id) values('$name','$add1','$add1','$mail')";
//$result=mysql_query($query);

$result1=mysql_query("select * from cake");
?><html>
<head>
</head>
<body>
<table height="189" width="1339" border="1">
  <tr>
    <td height="82">
	<marquee style="background-color:#85C1E9;" scrollamount="7" loop="infinite">
	 <img src="../images/cupcakes.jpg" width="943" height="194">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <img src="../images/20.jpg" width="943" height="194">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <img src="../images/food_cakes_flowers_sweet_dessert_hd_wallpaper-1440x900.jpg" width="943" height="194">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="../images/fresh_flowers_and_gifts_highdefinition_picture_01.jpg" width="943" height="194">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 </marquee>
	
	</td>
  </tr>
  <tr>
    <td height="42"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="dashboard.php">
	<input name="button" type="button" value="Home" size="50">
	</a>
	<a href="Cake.php"><input name="button" type="button" value="Cake" size="50"></a>&nbsp;&nbsp;&nbsp;
	<a href="feedback.php"><input name="button" type="button" value="Feedback" size="50"></a>&nbsp;&nbsp;
	<a href="Gift.php"><input name="button2" type="button" value="Gift" size="50"></a>&nbsp;&nbsp;
	<a href="logout.php"><input name="button22" type="button" value="Logout" size="50"></a>
	
	</td>
  </tr>
  <tr>
<td height="55" style="background-color:#ffbf80">
<p> 
<h2>
<marquee style="color:#0000FF"  scrollamount="7" loop="infinite"  id='scroll'>
<div onMouseOver="document.getElementById('scroll').stop();" onMouseOut="document.getElementById('scroll').start();">
Welcome To Adminstration Panel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List of the buy cake User's...
</div>
</marquee>
</h2>
</p>
</td>  
</tr> 
   
   
   
</table>


<form method="post" action="searchcake.php">
     <table> 
	    <tr>
	     <td>
        <select name="cbosearch">
          <option>ID</option>
          <option>Mobile Number</option>
          <option>E-mail</option>
        </select>
		</td>
		<td>
        <input type="text" name="txtsearch" placeholder="Type to Search" />
		</td>
		<td>
        <input type="submit" name="cmdsearch" value="Search" />
		</td>
      	
		</tr>
	  </table>					
					<table width="1335" border="2">
							<tr>
									<th>id</th>
									<th>name3</th>
									<th>name4</th>
									<th>emailcake</th>
									<th>cmno</th>
									<th>shape</th>
									<th>flavor</th>
									<th>size</th>
									<th>cno</th>
									<th>pname</th>
									<th>Addresscake</th>
									<th>Send</th>
									<th>Delete</th>
                            </tr>
<?php
$i=0;
while($row=mysql_fetch_array($result1))
{	  
$i++;
     echo " <tr>
        <td>$i</td>
        <td>".$row['name3']."</td>
        <td>".$row['name4']."</td>
        <td>".$row['emailcake']."</td>
        <td>".$row['cmno']."</td>
        <td>".$row['shape']."</td>
        <td>".$row['flavor']."</td>
        <td>".$row['size']."</td>
        <td>".$row['cno']."</td>
		<td>".$row['pname']."</td>
        <td>".$row['Addresscake']."</td>
		<td><a href=\"send.php?id=".$row['id']."\" style='color:#ff0000;'>Send</a></td>
        <td><a href=\"delete.php?id=".$row['id']."\" style='color:#ff0000;'>Delete</a></td>
        </tr>";
	  }
	  
?>