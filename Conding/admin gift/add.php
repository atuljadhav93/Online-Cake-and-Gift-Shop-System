<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="" method="post">
<table width="100%" border="0">
  <tr>
    <td width="23%">&nbsp;</td>
    <td colspan="3" valign="middle" align="center">Add Record </td>
    <td width="20%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="18%" valign="middle" align="right">0.5 Kg Price</td>
    <td width="2%">:</td>
    <td width="37%"><input type="text" name="price1"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="middle" align="right">1 Kg Price</td>
    <td>:</td>
    <td><input type="text" name="price2"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="middle" align="right">Availability</td>
    <td>:</td>
    <td><input type="text" name="availability"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="middle" align="right">Gift Name</td>
    <td>:</td>
    <td><input type="text" name="name"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="sub" value="Add"> 
      <a href="index.php" style="text-decoration:none;">Back</a> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>


</form>
<?php
 
if(isset($_POST['sub']))
{
$con=mysql_connect("localhost","root","");
$db_selected=mysql_select_db("cakegift");
$mysql="INSERT INTO admingift(price1,price2,availability,name) values('".$_POST['price1']."','".$_POST['price2']."','".$_POST['availability']."','".$_POST['name']."')";
mysql_query($mysql,$con);
mysql_close($con);

} 
?>
</body>
</html>