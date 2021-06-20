<?php 
mysql_connect("localhost","root","");
mysql_select_db("cakegift");
function sel_row()
{
$sel=mysql_query("select * from admingift");
	$i=0;
	while($row=mysql_fetch_array($sel))
	{
	$i++;
 echo " <tr>
        <td>$i</td>
        <td>".$row['price1']."</td>
        <td>".$row['price2']."</td>
        <td>".$row['availability']."</td>
		<td>".$row['name']."</td>
        <td><a href=\"index.php?page=viw&rid=".$row['gid']."\">V</a></td>
        <td><a href=\"index.php?page=edt&rid=".$row['gid']."\">E</a></td>
        
      </tr>";
	  }

}
function del_row()
{
if(mysql_query("delete from admingiftwhere id=".$_GET['gid']))
header("location:index.php");
else
echo mysql_error();

}
function viw_row()
{
	$sel=mysql_query("select * from admingift where id=".$_GET['gid']."");
 
	while($row=mysql_fetch_array($sel))
	{
	$a=$row['price1'];
	$b=$row['price2'];
	$c=$row['availability'];
	$d=$row['name'];
	
	}
?>
<table width="38%" height="103" border="1">
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
    </table>
<?php

}

?>