<?php
session_start();
include "connect.php";

// username and password sent from form
$myusername=$_POST[myusername];
$mypassword=$_POST[mypassword];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM site_login WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql, $connection);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);$row = mysql_fetch_array($result);

// If result matched $myusername and $mypassword, table row must be 1 row
$cookie_expire=time()+60*60*24*14;
setcookie("username", "$myusername", $cookie_expire);
if($row[id]=="3")
{
    header("Location: home.php");
}
else
{
    print ('<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=index.php?login=failure">');
}
?>
