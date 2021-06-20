<html>
<head>
<title>Search </title>
</head>
<body>
<center>
<h1>Search Result</h1>
</center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a class="addnew" href="gift.php" style="font-face:Khmer OS Battambang; font-size:16px;">Back</a></font>
<table border="1" height="150" width="900">
    	<tr>
									<th>id</th>
									<th>name1</th>
									<th>name2</th>
									<th>email</th>
									<th>mno</th>
									<th>Package</th>
									<th>Type</th>
									<th>Address</th>
									<th>Delete</th>
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
			$id = mysql_query("SELECT * FROM gift WHERE id='$search'");
	?>

    <?php
		$i=0;
while($row=mysql_fetch_array($id))
{	  
$i++;
     echo " <tr>
        <td>$i</td>
        <td>".$row['name1']."</td>
        <td>".$row['name2']."</td>
        <td>".$row['email']."</td>
       
		<td>".$row['mno']."</td>
		<td>".$row['Package']."</td>
		<td>".$row['Type']."</td>
		<td>".$row['Address']."</td>
        <td><a href=\"gift delete.php?id=".$row['id']."\" style='color:#ff0000;'>Delete</a></td>
        </tr>";
	  ?>
            <?php
		}
		}else if($cbo=="Mobile Number")
		{
			$na = mysql_query("SELECT * FROM gift WHERE mno like '".$search."%'");
	?>
    <?php
		$i=0;
while($ro=mysql_fetch_array($na))
{	  
$i++;
     echo " <tr>
        <td>$i</td>
        <td>".$ro['name1']."</td>
        <td>".$ro['name2']."</td>
        <td>".$ro['email']."</td>
       
		<td>".$ro['mno']."</td>
		<td>".$ro['Package']."</td>
		<td>".$ro['Type']."</td>
		<td>".$ro['Address']."</td>
        <td><a href=\"gift delete.php?id=".$ro['id']."\" style='color:#ff0000;'>Delete</a></td>
        </tr>";
	  ?>
            <?php
				}
			?>  
     <?php
		}else if($cbo=="E-mail")
				{
        $add = mysql_query("SELECT * FROM gift WHERE email like '".$search."%'");
     ?>
		<?php
		$i=0;
while($r=mysql_fetch_array($add))
{	  
$i++;
     echo " <tr>
        <td>$i</td>
        <td>".$r['name1']."</td>
        <td>".$r['name2']."</td>
        <td>".$r['email']."</td>
       
		<td>".$r['mno']."</td>
		<td>".$r['Package']."</td>
		<td>".$r['Type']."</td>
		<td>".$r['Address']."</td>
        <td><a href=\"gift delete.php?id=".$r['id']."\" style='color:#ff0000;'>Delete</a></td>
        </tr>";
	  
		?>
            <?php
				}
			}
			
			?>  
			
</table>
</body>
</html>