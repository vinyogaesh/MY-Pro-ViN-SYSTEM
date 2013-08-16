<?php


function chkadm()
{
	if($_SESSION['utype']=='10')
{
		header('Location: search_userres.php');
}
	
}
function checkadm()
{
	if($_SESSION['utype']=='10')
{
		header('Location: search_userres.php');
}
	
}
?>