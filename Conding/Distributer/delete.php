<?php
mysql_connect("localhost","root","");
mysql_select_db("cakegift");
if(mysql_query("delete from distributer where Did=".$_GET['id'].""))
header("location:index.php");
else
echo mysql_error();
?>