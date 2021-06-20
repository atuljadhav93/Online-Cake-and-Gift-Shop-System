<?php
mysql_connect("localhost","root","");
mysql_select_db("cakegift");

	$sel=mysql_query("select * from cake where id=".$_GET['id']."");
 
	while($row=mysql_fetch_array($sel))
	{
	   $a=$row['name3'];
       $b=$row['name4'];
       $c=$row['emailcake'];
        $d=$row['cmno'];
        $e=$row['shape'];
        $f=$row['flavor'];
      $g=$row['size'];
       $h=$row['cno'];
		$i=$row['pname'];
       $j=$row['Addresscake'];
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
    <td align="center" valign="top"><table width="38%" height="103" border="0">
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
        <td>1 Kg Price</td>
        <td>:</td>
        <td><?php echo $e; ?></td>
      </tr>
	  <tr>
        <td>Availability</td>
        <td>:</td>
        <td><?php echo $f; ?></td>
      </tr>
	  <tr>
        <td>Flavor Name</td>
        <td>:</td>
        <td><?php echo $g; ?></td>
      </tr>
	  <tr>
        <td>Availability</td>
        <td>:</td>
        <td><?php echo $h; ?></td>
      </tr>
	  <tr>
        <td>Flavor Name</td>
        <td>:</td>
        <td><?php echo $i; ?></td>
      </tr>
	  <tr>
        <td>Flavor Name</td>
        <td>:</td>
        <td><?php echo $j; ?></td>
      </tr>
	  <tr>
        <td>Distributer List</td>
        <td>:</td>
        <td><select name="dis" >
                <option value="">Select Distributer</option>
                <option value="dis">Vijay despande</option>
                <option value="dis">Rahul Jaykar</option>
				<option value="dis">Square</option>
              </select>		  </td>
      </tr>
	  </table>	
       <input type="Submit" name="submit" value="submit" align="center"/>
	       <a href="cake.php">
		   <input type="Submit" name="submit" value="Back" align="center"/>
		   </a>
	   </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
