<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'connect.php';
session_start();
if(count($_POST)>0) 
{
	$result = mysqli_query($con,"SELECT * FROM users WHERE name='" . $_POST["name"] . "' and password = '". $_POST["password"]."'") or die(mysqli_error($con));				 
	$row_cnt = $result->num_rows;
	if($row_cnt > 0)
	{
		$user  = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$_SESSION['id'] = $user['id'];
		$_SESSION['name'] = $user['name'];
		header("Location:index.php");
	}
	else 
	{
		header("Location:loginPage.php?message=WRONG PASSWORD");
	}
}
else
	header("Location:loginPage.php?message=WRONG USERNAME OR PASSWORD");
?>