<html>
<head>
<title>Search </title>
</head>
<body>
<center>
<h1>Search Result</h1>
</center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a class="addnew" href="feedback.php" style="font-face:Khmer OS Battambang; font-size:16px;">Back</a></font>
<table border="1" height="150" width="900">
    	<tr>
		    <th>id</th>
			<th>Fnames</th>
			<th>Lnames</th>
			<th>Email</th>
			<th>message</th>
			
		</tr>
    <?php
		$text = $_POST['txtsearch'];
		if($text=="txtsearch")
		{
			echo "No Data....Please Try Again!!!"."<br>";
			//echo '<a href="ViewTable.php"><img src="Images/Users_Group.png" title="Go Back"></a>';
		}
	?>
    <?php
	mysql_connect("localhost","root","") or die (mysql_error());
		mysql_select_db ("cakegift");
		$cbo = $_POST['cbosearch'];
		$search = $_POST['txtsearch'];
		
	?>
    <?php
		if($cbo=="ID")
		{
			$id = mysql_query("SELECT * FROM feedback WHERE id='$search'");
	?>

    <?php
		while($di=mysql_fetch_array($id))
		{
	
			echo " <tr>
        
        <td>".$di['Fname']."</td>
        <td>".$di['Lname']."</td>
        <td>".$di['email']."</td>
        <td>".$di['message']."</td>
        <td><a href=\"feedback delete.php?id=".$di['id']."\" style='color:#ff0000;'>Delete</a></td>
        </tr>";?>
            <?php
		}
		}else if($cbo=="First Name")
		{
			$na = mysql_query("SELECT * FROM feedback WHERE Lname like '".$search."%'");
	?>
    <?php
	$i=0;
		while($an=mysql_fetch_array($na))
		{
		$i++;
	
			echo " <tr>
        <td>$i</td>
        <td>".$an['Fname']."</td>
        <td>".$an['Lname']."</td>
        <td>".$an['email']."</td>
        <td>".$an['message']."</td>
        <td><a href=\"feedback delete.php?id=".$an['id']."\" style='color:#ff0000;'>Delete</a></td>
        </tr>";?>
            <?php
				}
			?>  
     <?php
		}else if($cbo=="Email")
				{
        $add = mysql_query("SELECT * FROM feedback WHERE email like '".$search."%'");
     ?>
		<?php
		$i=0;
		while($dda=mysql_fetch_array($add))
		{
		$i++;
			echo " <tr>
        <td>$i</td>
        <td>".$dda['Fname']."</td>
        <td>".$dda['Lname']."</td>
        <td>".$dda['email']."</td>
        <td>".$dda['message']."</td>
        <td><a href=\"feedback delete.php?id=".$dda['id']."\" style='color:#ff0000;'>Delete</a></td>
        </tr>";
		?>
            <?php
				}
			}
			
			?>  
			
</table>
</body>
</html>