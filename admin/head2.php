<?php include"../conne.php";
$sq="select * from donor";
$res=mysql_query($sq);
while($row=mysql_fetch_array($res))
{
extract($row);
}
?>
<div class="row header">
<div class="size3">


<h1 class="row head" style="color:#d42027;">
<!--img src="../images/download.jpg" style="width:65px;height:65px;"-->
<span>
 WELCOME MANAV  

</span>
</h1>
</div>
<div class=" row size1">

</div>

</div>


<div class="row size1"style="background-color:#eee;border:2px solid #eee;width:300px;height:300px;">
<img src="../images/user1.png"style="width:200px;height:200px;padding:20px 20px 20px 20px;margin:30px 30px 30px 50px;">

</div>
<div class="row size1  left"style="background-color:#eee;border:2px solid #eee;width:300px;height:400px;">
<!--nav style="padding:20px 20px 10px 10px;margin:10px 10px 10px 10px;"-->


<nav>
<a href="?file=profile.php">BLOOD REQUESTS 	</a> <br>
<a href="?file=requestofdonor.php"> STATUS</a> <br>
<a href="?file=logout.php">Logout</a> <br>
<nav><!--/nav-->
</div>


