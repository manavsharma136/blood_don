<?php
if(isset($_REQUEST['file'])){$file=$_REQUEST['file'];}else{$file="home.php";}
?>


<html>
<head>
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet"  href="css/box1.css">
</head>
<body>
<?php 
include "header1.php"; 
include"$file"; 
?>





</body>
</html>
