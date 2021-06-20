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
    <td width="18%" valign="middle" align="right">Distributer Name</td>
    <td width="2%">:</td>
    <td width="37%"><input type="text" name="Dname"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="middle" align="right">Mobile Number</td>
    <td>:</td>
    <td><input type="text" name="Mno"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="middle" align="right">E-mail</td>
    <td>:</td>
    <td><input type="text" name="email"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="middle" align="right">Qualification</td>
    <td>:</td>
    <td><input type="text" name="qualification"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="middle" align="right">Address</td>
    <td>:</td>
    <td><input type="text" name="address"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="middle" align="right">Salary</td>
    <td>:</td>
    <td><input type="text" name="salary"></td>
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
$mysql="INSERT INTO distributer(Dname,Mno,email,qualification,address,salary) values('".$_POST['Dname']."','".$_POST['Mno']."','".$_POST['email']."','".$_POST['qualification']."','".$_POST['address']."','".$_POST['salary']."')";
mysql_query($mysql,$con);
if(!$mysql)
{
echo "not".mysql_error();
}
mysql_close($con);
} 
?>
</body>
</html>