<?php 

session_start();
include("conf.vani"); 
// Check, if username session is NOT set then this page will jump to login page
if(!isset($_SESSION['username']))
{
	 header('Location: index.php');
}
//checkadm();
/**
 * @author Vinoth K S
 * @copyright 2013
 */

$username = $_SESSION['username'];
$password =mysql_real_escape_string(md5($_POST['password']));
$newpassword = mysql_escape_string(md5($_POST['newpassword']));
$confirmnewpassword = mysql_real_escape_string(md5($_POST['confirmnewpassword']));
$result = mysql_query("SELECT pass FROM user WHERE uname='$username'");
if(!$result) 
{ 
echo "The username you entered does not exist. <script type='text/javascript'>
                    window.setTimeout(function() {
                        window.close()
                    }, 1000);
        </script><a href='JavaScript:window.close()'>Try Again</a>";
} 
elseif($password!= mysql_result($result, 0)) 
{ 
echo "You entered an incorrect password. <script type='text/javascript'>
                    window.setTimeout(function() {
                        window.close()
                    }, 1000);
        </script><a href='JavaScript:window.close()'>Try Again</a>";
} 
elseif($newpassword==$confirmnewpassword) 
{
    $sql=mysql_query("UPDATE user SET pass='$newpassword' where uname='$username'"); 
    if($sql) 
    { 
		echo "Congratulations! You have successfully changed your password. <script type='text/javascript'>
                    window.setTimeout(function() {
                        window.close()
                    }, 1000);
        </script><a href='JavaScript:window.close()'>Continue</a>";
		exit; 
    }
}
else
{ 
echo "The new password and confirm new password fields must be the same. <script type='text/javascript'>
                    window.setTimeout(function() {
                        window.close()
                    }, 1000);
        </script><a href='JavaScript:window.close()'>Try Again</a>"; 
}  
?>