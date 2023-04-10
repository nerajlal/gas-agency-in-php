<?php 
error_reporting(0);
SESSION_START();
$connect=mysqli_connect('localhost','root','','gas	');
if($connect=='')
{
	echo "connection is failed";
}
?>