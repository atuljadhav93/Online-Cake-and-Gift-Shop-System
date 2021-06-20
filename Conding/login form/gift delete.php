<?php
mysql_connect("localhost","root","");
mysql_select_db("cakegift");
if(mysql_query("delete from gift where id=".$_GET['id'].""))
header("location:gift.php");
else
echo mysql_error();
?>