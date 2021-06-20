<?php
session_start();
?>
<html>
<head>
<title>Wel come to homekarjat login</title>


<script type="text/javascript">
function login()
{
 alert("login successfully");
}
 </script></head>
 <body bgcolor="#e1f3f5">
 

<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from ureg where email='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION['email']=$loginid;
	}
}
if (isset($_SESSION['email']))
{
echo "<h1 class='style8' align=center></h1>";
		echo '<br><br><a href="home.php" class="style4">
		<img src="images/p038_1_00.jpg" height=250 width=250>
		</a>';
 
		exit;
		

}

?>
<table width="100%" border="0" align="right">
  <tr>
    <td width="8%" height="63">&nbsp;</td>
   
    <td width="92%"><div align="center"><font size="6" face="Times New Roman, Times, serif">User Login </font></div></td>
  </tr>
  <tr>
    <td height="372">
	  	
    <td valign="top"><form name="form1" method="post" action="">
      <table width="543" border="0">
        <tr>
          <td width="242" height="75"><div align="center"><span class="style2">Email ID </span></div></td>
          <td width="291"><input name="loginid" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td height="57"><div align="center"><span class="style2">Password</span></div></td>
          <td><input name="pass" type="password" id="pass2"></td>
        </tr>
        <tr>
          <td height="27" colspan="2"><div align="center"><span class="errors">
              <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></div></td>
        </tr>
        <tr>
          <td height="56" colspan=2 align=center class="errors"><input name="submit" type="submit" id="submit" value="Login"  onClick="login()">          </td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>

</body>
</html>
