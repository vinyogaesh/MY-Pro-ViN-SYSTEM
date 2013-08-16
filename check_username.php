<?php
include_once('conf.vani');

//check we have username post var
if(isset($_POST["username"]))
{
	//check if its ajax request, exit script if its not
	if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		die();
	}
	
	
	//trim and lowercase username
	$username =  strtolower(trim($_POST["username"])); 
	
	//sanitize username
	$username = filter_var($username, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	//check username in db
	$results = mysql_query("SELECT uname FROM user WHERE uname='$username'");
	
	//return total count
	$username_exist = mysql_fetch_rows($results); //total records
	
	if($username==$username_exist['uname']) 
	{
		die('<img src="imgs/not-available.png" />');
	
	}
	else
	{
		die('<img src="imgs/available.png" />');
	}	
	
	//close db connection
	mysql_close($connecDB);
}
?>