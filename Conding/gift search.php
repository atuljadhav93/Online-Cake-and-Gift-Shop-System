<html>
<head>
<title>Search</title>
</head>
<body>
<a href="gift wrap.php">
<img src="images/ok.png" width="115" height="99" >
</a>
<center>
<h1>Search Result</h1>
</center>
<table border="1" height="150" width="900" >
    	<tr style='color:#5b91a2; font-size:23px;'>
									<th>Id</th>
									<th>0.5 Kg Price </th>
									<th>1 Kg Price</th>
									<th>Availability</th>
									<th>Gift Name</th>
									
                            </tr>
    <?php
		$a = $_POST['txtsearch'];
		if($a=="txtsearch")
		{
			echo "No Data....Please Try Again!!!";
		  }
	?>
    <?php
	mysql_connect("localhost","root","") or die (mysql_error());
		mysql_select_db ("cakegift");
		$cbo = $_POST['cbosearch'];
		$search = $_POST['txtsearch'];
		
	?>
      <?php
		
		 if($cbo=="Name")
		{
			$na = mysql_query("SELECT * FROM admingift WHERE name like '".$search."%'");
	?>
    <?php
	$i=0;
		while($an=mysql_fetch_array($na))
		{
	              $i++;
			echo " <tr>
        <td>$i</td>
        <td style='color:#ff0000; font-size:25px;'>".$an['price1']."</td>
        <td style='color:#ff0000; font-size:25px;'>".$an['price2']."</td>
        <td style='color:#ff0000; font-size:25px;'>".$an['availability']."</td>
        <td style='color:#ff0000; font-size:25px;'>".$an['name']."</td>
        </tr>";?>
            <?php
				}
				}
			?>  
    
			
</table>
</body>
</html>