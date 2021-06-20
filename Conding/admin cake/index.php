<!DOCTYPE html>
<html>
<head>
</head>
<body>
<a href="../login form/dashboard.php">
<img src="../images/ok.png" width="115" height="99" >
</a>
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table width="100%" border="1">
      <tr>
        <td colspan="6">&nbsp;</td>
        <td><a href="add.php">Add +</a></td>
       
      </tr>
      <tr>
        <td width="7%">Sr.No.</td>
        <td width="32%">0.5 Kg Price</td>
        <td width="25%">1 Kg Price</td>
        <td width="14%">Availability</td>
        <td width="5%">Flavor Name</td>
        <td width="5%">View</td>
        <td width="7%">Edit</td>
        
      </tr>
	  
	  <?php
mysql_connect("localhost","root","");
mysql_select_db("cakegift");
$sel=mysql_query("select * from admincake");
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
        <td><a href=\"view.php?id=".$row['cid']."\" >V</a></td>
        <td><a href=\"edit.php?id=".$row['cid']."\" >E</a></td>
        
      </tr>";
	  }
	  
	  ?>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="90%">&nbsp;</td>
    <td width="6%">&nbsp;</td>
  </tr>
</table>

</body>
</html>
