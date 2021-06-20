<?php
mysql_connect("localhost","root","");
mysql_select_db("cakegift");
//select record
$result=mysql_query("SELECT * FROM distributer where Did=".$_GET['id']."");
while($row=mysql_fetch_array($result))
{
echo "<br>";
$a=$row['Dname'];
$b=$row['Mno'];
$c=$row['email'];
$d=$row['qualification'];
$e=$row['address'];
$f=$row['salary'];

echo "<br>";
}
?>
<html>
<head>
</head>

<body>
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
  <tr>
    <td align="center" valign="middle">Edit Record </td>
    </tr>
</table>
</td>
  </tr>
  <tr>
    <td>
          <form name="form1" method="post" action="" >
	
        <table width="100%" border="0">
  <tr>
    <td width="20%">&nbsp;</td>
    <td width="20%">&nbsp;
	
		</td>
    <td width="2%">&nbsp;</td>
    <td width="38%">&nbsp;</td>
    <td width="20%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Distributer Name</td>
    <td>:</td>
    <td><input type="text" name="Dname" value="<?php  echo $a;?>" ></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Mobile Number</td>
    <td>:</td>
    <td><input type="text" name="Mno" value="<?php  echo $b;?>" ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>E-mail</td>
    <td>:</td>
    <td><input type="text" name="email" value="<?php  echo $c;?>" ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Qualification</td>
    <td>:</td>
    <td><input type="text" name="qualification" value="<?php  echo $d;?>" ></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Address</td>
    <td>:</td>
    <td><input type="text" name="address" value="<?php  echo $e;?>" ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Salary</td>
    <td>:</td>
    <td><input type="text" name="salary" value="<?php  echo $f;?>" ?></td>
    <td>&nbsp;</td>
  </tr>
  
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="sub" value="Add">
      <a href="index.php" style="text-decoration:none;">User List</a></td>
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
        </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
 if(isset($_POST['sub']))
{
$sql=("update distributer set Dname='".$_POST['Dname']."',Mno='".$_POST['Mno']."',email='".$_POST['email']."',qualification='".$_POST['qualification']."',address='".$_POST['address']."',salary='".$_POST['salary']."' where Did=".$_GET['id']."");
if(!mysql_query($sql))
{
die ('<br> Error:<br>'.mysql_error());
}
else
echo "<br> Record Updated <br>";
}
?>