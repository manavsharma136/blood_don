<?php
include"../conn.php";
if(!isset($_SESSION['did']))
{
header("location../index.php")
}
else
{
$did=$_SESSION['did];
$sq="select * from donors where did='$did'";
$res=mysql_query($sq)
while($row=mysql_fetch_array($res))
{
extract($row)
}
}
?>