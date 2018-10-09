<?php
include"conne.php";
extract($_REQUEST);
$sq="INSERT INTO `request`( `name`, `mob`, `city`, `district`, `bg`) VALUES ('$nm','$mno','$city','$dst','$bg')";

$res=mysql_query($sq);
if($res)
{
echo"<h1>Request register</h1>";
echo"<img src=images/green.jpg>";
echo"<h1> YOU WILL BE INFORMED SOON <h1>";		
}
else
{
echo"<h1>  sorry failed contact admin  at 8054925330</h1>";
echo"<img src=images/50.jpg>";
}
?>
