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
    <td>
	
	<table width="96%" border="1" height="120">
      <tr>
        <td colspan="7">&nbsp;</td>
        <td colspan="3"><a href="add.php">Add +</a></td>
        </tr>
      <tr>
        <td width="6%">Sr.No.</td>
        <td width="20%">Distributer Name</td>
        <td width="18%">Mobile Number</td>
        <td width="12%">E-mail</td>
        <td width="10%">Qualification</td>
		<td width="13%">Address</td>
		<td width="5%">Salary</td>
		
        <td width="4%">View</td>
        <td width="5%">Edit</td>
        <td width="7%">Delete</td>
      </tr>
	  
	  <?php
mysql_connect("localhost","root","");
mysql_select_db("cakegift");
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
	  
	  ?>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="2%">&nbsp;</td>
    <td width="98%">&nbsp;</td>
    <td width="0%">&nbsp;</td>
  </tr>
</table>

</body>
</html>
