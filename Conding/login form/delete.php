



<?php
mysql_connect("localhost","root","");
mysql_select_db("cakegift");
if(mysql_query("delete from cake where id=".$_GET['id'].""))
header("location:cake.php");
else
echo mysql_error();
?>


