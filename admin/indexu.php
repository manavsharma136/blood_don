<?php
if(isset($_REQUEST['file'])){$m=$_REQUEST['file'];}else{$m="main.php";}

if(isset($_REQUEST['file']))
{
	$file=$_REQUEST['file'];
}
else
{
	$file="main.php";
}if(isset($_REQUEST['file'])
{
	$file=$_req
?>


<html>
<head>
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet"  href="css/box1.css">
</head>
<body>
<?php include "headeruser.php"?>
<div class="row">
<div class=" size2">
<?php 
include "head2.php";
?>
</div> 
<div class="size3">
<?php
include"$file"; 
?>
</div>
</div>





</body>
</html>
