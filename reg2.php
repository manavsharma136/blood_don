<?php
include"conne.php";
extract($_REQUEST);
$sq="INSERT INTO `donor`( `dname`,`bg`, `mb`, `email`, `pass`, `city`, `dist`) VALUES ('$nm','$bg','$mno','$em','$pass','$city','$dst')";
$res=mysql_query($sq);
if($res)
{
echo"<h1>Registered</h1>";
echo"<img src=images/green.jpg>";;
}
else
{
echo"Failed";
echo"<img src=images/50.jpg>";
}
