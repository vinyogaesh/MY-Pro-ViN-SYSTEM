<?php
include_once('conf.vani');
//session_start();
session_start();

// Check, if username session is NOT set then this page will jump to login page
if(!isset($_SESSION['username']))
{
	 header('Location: index.php');
}
//checkadm();
/**
 * @author Vinoth K S
 * @copyright 2012
	$url=$_SERVER['search_userres.php'];
	header("Refresh: 5; URL=$url"); // redirect in 5 seconds
 */
//mysql_select_db("db", $con);
$messages = $_POST['message'];
$user =$_SESSION['username'];
//$pic =clean($_POST['name1']);
//$poster =clean($_POST['poster']);
$sql="INSERT INTO message (message, user, created)
VALUES
('$messages','$user',NOW())";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
  header("Location:search_userres.php");exit();
mysql_close($con)
?>