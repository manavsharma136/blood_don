<?php
$c=mysql_connect("localhost","root","");
if($c)
{
$db=mysql_select_db("back",$c);
if(!$db)
{
echo"data selection failed";
}
}
else
{
echo"Connection failed up check xammp panel";
}
?>
