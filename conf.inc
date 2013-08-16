<?php
$host="localhost";
$user="root";
$pass="admin";
$db="vani";
$con=mysql_connect($host,$user,$pass);
if($con==NULL)
 echo "Database server connection error";
 
$val=mysql_select_db($db,$con);
if($val==NULL)
 echo "Database connection error";
?>