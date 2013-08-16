<?php

// Inialize session
session_start();

// Include database connection settings
include('conf.vani');

$user=mysql_escape_string($_POST['username']);
$passwd=mysql_escape_string(md5($_POST['password']));
$logi=$_POST['log'];

if($logi=='admLogin')
{
	$ut='2';
//echo $ut;
}
else if($logi=='usrLogin')
{
	$ut='10';
//echo $ut;
}
else
{
//	echo "Select Any One................";
}
if(!$logi)
{
	echo "Please Select Any One...............";?>
    
    <a href="index.php"></a>
    <?php
	
}
else
	{

// Retrieve username and password from database according to user's input
$login = mysql_query("SELECT * FROM USER WHERE uname='$user' AND pass='$passwd' AND utype='$ut'AND deleted='N' AND block='N'");
// Check username and password match
if (mysql_num_rows($login) == 1) {
        // Set username session variable
        $_SESSION['username'] = $user;
		$_SESSION['utype']=$ut;
		//$_SESSION['inv_prefix'] = $_POST['inv_prefix'];
        // Jump to secured page
        
		if($ut=='2')
		{

		header('Location: user_landing.php');
		}
		elseif($ut=='10')
		{
			header('Location: search_userres.php');
		}
		
}
else {
        // Jump to login page
        
	header('Location: index.php');
 }
 }

?>
