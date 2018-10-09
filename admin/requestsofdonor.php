
<div class="show" style="background-color:#FFEAE6;padding:10px 10px 10px 10px;">
<h1 style="color:#d42027;"> RECENT DONORS!</h1>
<?php
include"conne2.php";


echo"<table class=d border=1 width=100%>";
$sq="select * from donor";
$res=mysql_query($sq);//ask this line;
echo"<tr><td>SNO</td><td>Name</td><td>Blood Group</td><td>Mobile</td> <td>Email</td><td>City </td><td>District</td></tr>";
while($row=mysql_fetch_array($res))
{
extract($row);
echo"<tr><td>$did</td><td>$dname</td><td>$bg</td><td>$mb</td><td>$email</td> <td>$city</td><td>$dist</td</tr>";
}
echo"</table>";

?>
</div> 