<?php
include"chk.php";
SESSION_start();
include"../conne.php";
extract($_REQUEST);
//$sq="select * from donor where(mb='$user'or email='$user')and pass='$pass'";
//$res=mysql_query($sq);
//$n=mysql_num_rows($res);
//if($n>0)
//{
//while($row=mysql_fetch_array($res))
//{
//extract($row);
//$_SESSION['did']=$did;
//$_SESSION['em']=$email;
//header("location:/blood_don/user/indexu.php");

//}
//}
//else
//{
//echo"user doesnot exist";
//}
if('$user'=="admin"&&'$pass'=="123")
{
	echo"welcome login";
}
else
{
	echo"you failed";
}

?>
																																	