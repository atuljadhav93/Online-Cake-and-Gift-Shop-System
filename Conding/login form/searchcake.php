<html>
<head>
<title>Search </title>
</head>
<body>
<center>
<h1>Search Result</h1>
</center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a class="addnew" href="cake.php" style="font-face:Khmer OS Battambang; font-size:16px;">Back</a></font>
<table border="1" height="150" width="900">
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
			$id = mysql_query("SELECT * FROM cake WHERE id='$search'");
	?>

    <?php
		$i=0;
while($row=mysql_fetch_array($id))
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
		<td><a href=\"delete.php?id=".$row['id']."\" style='color:#ff0000;'>Delete</a></td>
        </tr>";
	  
		?>
            <?php
		}
		}else if($cbo=="E-mail")
		{
			$na = mysql_query("SELECT * FROM cake WHERE emailcake like '".$search."%'");
	?>
    <?php
	$i=0;
		while($an=mysql_fetch_array($na))
		{
	              $i++;
			echo " <tr>
        <td>$i</td>
        <td>".$an['name3']."</td>
        <td>".$an['name4']."</td>
        <td>".$an['emailcake']."</td>
        <td>".$an['cmno']."</td>
        <td>".$an['shape']."</td>
        <td>".$an['flavor']."</td>
        <td>".$an['size']."</td>
        <td>".$an['cno']."</td>
		<td>".$an['pname']."</td>
        <td>".$an['Addresscake']."</td>
		<td><a href=\"delete.php?id=".$an['id']."\" style='color:#ff0000;'>Delete</a></td>
        </tr>";?>
            <?php
				}
			?>  
     <?php
		}else if($cbo=="Mobile Number")
				{
        $add = mysql_query("SELECT * FROM cake WHERE cmno like '".$search."%'");
     ?>
		<?php
		     $i=0;
		while($dda=mysql_fetch_array($add))
		{
		    $i++;
			echo " <tr>
                 <td>$i</td>
        <td>".$dda['name3']."</td>
        <td>".$dda['name4']."</td>
        <td>".$dda['emailcake']."</td>
        <td>".$dda['cmno']."</td>
        <td>".$dda['shape']."</td>
        <td>".$dda['flavor']."</td>
        <td>".$dda['size']."</td>
        <td>".$dda['cno']."</td>
		<td>".$dda['pname']."</td>
        <td>".$dda['Addresscake']."</td>
		<td><a href=\"delete.php?id=".$dda['id']."\" style='color:#ff0000;'>Delete</a></td>
        </tr>";
		?>
            <?php
				}
			}
			
			?>  
			
</table>
</body>
</html>