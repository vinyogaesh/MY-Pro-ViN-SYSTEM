<?php
//error_reporting(0);
include("conf.vani");

// get banner details based on ID
$sql = "SELECT * FROM banner_clicks WHERE id='".intval($_REQUEST["id"])."'";
$sql_result = mysql_query ($sql) or die ('request "Could not execute SQL query" '.$sql);

// check if banner ID exists
if (mysql_num_rows($sql_result)>0) {

	$banner = mysql_fetch_assoc($sql_result);
	
// increase clicks count by one
	$sql = "UPDATE banner_clicks SET clicks=clicks+1 WHERE id='".intval($_REQUEST["id"])."'";
	$sql_result = mysql_query ($sql ) or die ('request "Could not execute SQL query" '.$sql);
	
	header("Location: ".$banner["url"]);
		
} else {

	echo "Banner is missing.";
		
}

?>