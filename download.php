<?php
if(isset($_GET['id'])) 
{
// if id is set then get the file with the id from database

include 'conf.vani';
//include 'library/opendb.php';
$id    = $_GET['id'];
$query = "SELECT name, type, size, content " .
         "FROM upload WHERE id = '$id'";

$result = mysql_query($query) or die('Error, query failed');
list($name, $type, $size, $content) = mysql_fetch_array($result);

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo $content;

//include 'library/closedb.php'; 
exit;
}

?>