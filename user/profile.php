<?php
include "../conne.php";
?>
<div class=regform style="border:2px solid red;">
<form method="post" action="">
<h2></h2>
<?php
$sq="select * from donor";
$res=mysql_query($sq);
while($row=mysql_fetch_array($res))
{
extract($row);
}
?>

<div class="row"><label class="size1">Name</label><input type="text" value="<?php echo $dname;?>" class="size2"></div>
<div class="row">
<label class="size1">Gender</label>
<select name="gen" class="size2">
<option>Male</option>
<option>Female</option>
</select>
</div>
<div class="row"><label class="size1">Mobile</label><input type="text" name="mo" value="<?php echo $mb;?>" class="size2" required></div>
<div class="row"><label class="size1">Email</label><input type="text" name="em" value="<?php echo $email;?>"class="size2" ></div>

<div class="row"><label class="size1">City</label><input type="text" name="city" value="<?php echo $city;?>"class="size2" required></div>
<div class="row"><label class="size1">District</label><input type="text" name="dst" value="<?php echo $dist;?>"class="size2" required ></div>
<div class="row"><label class="size1">Blood Group</label>
<select  name="bg" class="size2" required >
<option>O+</option>
<option>O-</option>
<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>AB-</option>
<option>AB+</option>
</select>
</div>
<div class="row"><button type="submit">update</button></div>
</form>
</div>