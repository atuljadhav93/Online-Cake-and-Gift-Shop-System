<?php
mysql_connect("localhost","root","");
mysql_select_db("cakegift");
//select record
$result=mysql_query("SELECT * FROM admincake where cid=".$_GET['id']."");
while($row=mysql_fetch_array($result))
{
echo "<br>";
$a=$row['price1'];
	$b=$row['price2'];
	$c=$row['availability'];
	$d=$row['name'];
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
    <td>0.5 Kg Price</td>
    <td>:</td>
    <td><input type="text" name="price1" value="<?php  echo $a;?>" ></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>1 Kg Price</td>
    <td>:</td>
    <td><input type="text" name="price2" value="<?php  echo $b;?>" ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Availability</td>
    <td>:</td>
    <td><input type="text" name="availability" value="<?php  echo $c;?>" ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Flavor Name</td>
    <td>:</td>
    <td><input type="text" name="name" value="<?php  echo $d;?>" ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="sub" value="Add">
      <a href="index.php" style="text-decoration:none;">Cake List</a></td>
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
//Update Query
 if(isset($_POST['sub']))
{
$sql=("update admincake set price1='".$_POST['price1']."',price2='".$_POST['price2']."',availability='".$_POST['availability']."',name='".$_POST['name']."' where cid=".$_GET['id']."");
if(!mysql_query($sql))
{
die ('<br> Error:<br>'.mysql_error());
}
else
echo "<br> Record Updated <br>";
}
?>