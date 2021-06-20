<?php 
mysql_connect("localhost","root","");
mysql_select_db("cakegift");
function sel_row()
{
$sel=mysql_query("select * from distributer");
	$i=0;
	while($row=mysql_fetch_array($sel))
	{
	$i++;
 echo " <tr>
        <td>$i</td>
        
        <td>".$row['Dname']."</td>
        <td>".$row['Mno']."</td>
		 <td>".$row['email']."</td>
        <td>".$row['qualification']."</td>
        <td>".$row['address']."</td>
		 <td>".$row['salary']."</td>
       
        <td><a href=\"view.php?id=".$row['Did']."\" >V</a></td>
        <td><a href=\"edit.php?id=".$row['Did']."\" >E</a></td>
        <td><a href=\"delete.php?id=".$row['Did']."\" >D</a></td>
      </tr>";
	  }

}
function del_row()
{
if(mysql_query("delete from distributer where id=".$_GET['Did']))
header("location:index.php");
else
echo mysql_error();

}
function viw_row()
{
	$sel=mysql_query("select * from distributer where id=".$_GET['Did']."");
 
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
<table width="38%" height="103" border="1">
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
      </tr><tr>
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
    </table>
<?php

}

?>