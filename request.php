<div class=regform style="border:2px solid red;">
<form method="post" action="?file=req2.php">
<h2>Raise A Request</h2>
<div class="row"><label class="size1">Name</label><input type="text" name="nm" class="size2" required></div>
<div class="row">
<label class="size1">Gender</label>
<select name="gen" class="size2">
<option>Male</option>
<option>Female</option>
</select>
</div>
<div class="row"><label class="size1">Mobile</label><input type="text" name="mno" class="size2" required></div>

<div class="row"><label class="size1">City</label><input type="text" name="city" class="size2" required></div>
<div class="row"><label class="size1">District</label><input type="text" name="dst" class="size2" required ></div>
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
<div class="row"><button type="submit">Generate Request</button></div>
</form>
</div>