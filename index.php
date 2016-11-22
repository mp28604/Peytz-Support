<?php
session_start();
ini_set("session.gc_maxlifetime","300"); //an hour
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title> Peytz Support </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
    .rounded { border-radius: 5px; -moz-border-radius: 5px; border: 1px solid #b4b4b4; width: 170px; height: 24; font-size: 15px; }
    .member_login_user_and_pass { font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 17px; color: #ffffff; }
    .login { font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 23px; font-weight: bold; color: #ffffff; }
    .failedlogin { font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; color: #ff0000; }
    .forgot_password { font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 12px; font-weight: normal; color: #ffffff; text-decoration: none; }
</style>
</head>
<body>
<?
    if ($_COOKIE['username'])
    {
        header("Location: home.php");
    }
    elseif (!$_COOKIE['username'])
    {
        print ('<form action="checklogin.php" method="post">');
            print ('<table style="width:100%; height:100%;" border="0" cellpadding="0" cellspacing="0">');
                print ('<tr>');
                    print ('<td align="center" valign="middle">');
                        print ('<table cellpadding="0" cellspacing="0" border="0" style="background-image:url(images/bg_login2.jpg);">');
                            print ('<tr>');
                                print ('<td width="823" height="35" colspan="4">&nbsp;</td>');
                            print ('</tr>');
                            print ('<tr>');
                                print ('<td width="277" height="40"></td>');
                                print ('<td width="90" height="40" valign="top"><DIV CLASS="login">Login</DIV></td>');
                                print ('<td width="6"></td>');
                                if ($_GET[login] == "failure")
                                {
                                    print ('<td width="450" height="40" align="left" valign="bottom"><div class="failedlogin">Incorrect login</DIV></td>');
                                }
                                else
                                {
                                    print ('<td width="450" height="40"></td>');
                                }
                            print ('</tr>');
                            print ('<tr>');
                                print ('<td width="277" height="30"></td>');
                                print ('<td width="90" height="30" align="left"><div class="member_login_user_and_pass"><font color="#ffffff">Username</font></div></td>');
                                print ('<td width="6" align="left"><div class="member_login_user_and_pass"><font color="#ffffff">:</font></div></td>');
                                print ('<td width="450" height="30" align="left"><input class="rounded" name="myusername" type="text" id="myusername" /></td>');
                            print ('</tr>');
                            print ('<tr>');
                                print ('<td width="277" height="30"></td>');
                                print ('<td width="90" height="30" align="left"><div class="member_login_user_and_pass"><font color="#ffffff">Password</font></div></td>');
                                print ('<td align="left"><div class="member_login_user_and_pass"><font color="#ffffff">:</font></div></td>');
                                print ('<td width="450" height="30" align="left"><input class="rounded" type="password" name="mypassword" id="mypassword" /></td>');
                            print ('</tr>');
                            print ('<tr>');
                                print ('<td width="277" height="30"></td>');
                                print ('<td width="90" height="30">&nbsp;</td>');
                                print ('<td width="6">&nbsp;</td>');
                                print ('<td width="450" height="30" align="left" valign="bottom">');
                                    print ('<table cellspacing="0" cellpadding="0" border="0">');
                                        print ('<tr>');
                                            print ('<td>');
                                                print ('<input type="submit" name="submit" value="Login" />');
                                            print ('</td>');
                                        print ('</tr>');
                                    print ('</table>');
                                print ('</td>');
                            print ('</tr>');
                            print ('<tr>');
                                print ('<td width="823" height="148" colspan="4">&nbsp;</td>');
                            print ('</tr>');
                        print ('</table>');
                    print ('</td>');
                print ('</tr>');
            print ('</table>');
        print ('</form>');
    }
?>
</body>
</html>
