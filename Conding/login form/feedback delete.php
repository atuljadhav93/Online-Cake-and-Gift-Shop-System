<?php
mysql_connect("localhost","root","");
mysql_select_db("cakegift");
if(mysql_query("delete from feedback where id=".$_GET['id'].""))
header("location:dashboard.php");
else
echo mysql_error();
?>
