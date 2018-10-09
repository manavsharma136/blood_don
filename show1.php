
<div class="show" style="background-color:#FFEAE6;padding:10px 10px 10px 10px;border:8px solid #AA120A;">
<h1> Recents Requests!</h1>
<?php
include"conne.php";


echo"<table class=d border=1 width=100%>";
$sq="select * from request";
$res=mysql_query($sq);//ask this line;
echo"<tr><td>SNO</td><td>Name</td><td>Mobile</td><td>City</td> <td>District</a><td>Blood Group </td></tr>";
while($row=mysql_fetch_array($res))
{
extract($row);
echo"<tr><td>$rid</td><td>$name</td><td>$mob</td><td>$city</td> <td>District</a><td>$bg</td></tr>";
}
echo"</table>";

?>
</div> 