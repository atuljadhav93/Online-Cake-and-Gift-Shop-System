<?php
include("conn.php");
	$sel=mysql_query("select * from admingift where gid=".$_GET['id']."");
 
	while($row=mysql_fetch_array($sel))
	{
	$a=$row['price1'];
	$b=$row['price2'];
	$c=$row['availability'];
	$d=$row['name'];
	}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="38%" height="103" border="1">
      <tr>
        <td colspan="3" align="center">Cake Information </td>
        </tr>
      <tr>
        <td width="47%">0.5 Kg Price</td>
        <td width="3%">:</td>
        <td width="50%"><?php echo $a; ?></td>
      </tr>
      <tr>
        <td>1 Kg Price</td>
        <td>:</td>
        <td><?php echo $b; ?></td>
      </tr>
	  <tr>
        <td>Availability</td>
        <td>:</td>
        <td><?php echo $c; ?></td>
      </tr>
	  <tr>
        <td>Flavor Name</td>
        <td>:</td>
        <td><?php echo $d; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><a href="index.php">Back</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
