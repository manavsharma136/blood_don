<?php
if(isset($_REQUEST['m'])){$k=$_REQUEST['m'];}else{$k="main.php";}
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
include"$k"; 
?>
</div>
</div>





</body>
</html>
