<?php 
session_start();
$connect=mysqli_connect('localhost','root','','gas');
if($connect=='')
{
	echo "connection is failed";
}
?>