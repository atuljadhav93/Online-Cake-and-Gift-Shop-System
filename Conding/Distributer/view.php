<?php
include("conn.php");
	$sel=mysql_query("select * from distributer where Did=".$_GET['id']."");
 
	while($row=mysql_fetch_array($sel))
	{
	$a=$row['Dname'];
$b=$row['Mno'];
$c=$row['email'];
$d=$row['qualification'];
$e=$row['address'];
$f=$row['salary'];

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
        <td colspan="3" align="center">User Information </td>
        </tr>
      <tr>
        <td width="47%">Distributer Name</td>
        <td width="3%">:</td>
        <td width="50%"><?php echo $a; ?></td>
      </tr>
      <tr>
        <td>Mobile Number</td>
        <td>:</td>
        <td><?php echo $b; ?></td>
      </tr>
	  <tr>
        <td>E-mail</td>
        <td>:</td>
        <td><?php echo $c; ?></td>
      </tr>
	  
	  <tr>
        <td>Qualification</td>
        <td>:</td>
        <td><?php echo $d; ?></td>
      </tr>
	  
	  <tr>
        <td>Address</td>
        <td>:</td>
        <td><?php echo $e; ?></td>
      </tr>
	  
	  <tr>
        <td>Salary</td>
        <td>:</td>
        <td><?php echo $f; ?></td>
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
