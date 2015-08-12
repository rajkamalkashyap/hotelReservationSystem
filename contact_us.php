<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>contact us</title>
<link rel="stylesheet" type="text/css" href="style2.css"/>
</head>
<?php include("inc.php"); ?>
<body>
<?php
include("dbinclude.php");
if(isset($_POST['sub']))
{
	$fullname=$_POST['text1'];
	$email=$_POST['email1'];
	$phone=$_POST['number1'];
	$msg=$_POST['text2'];
	$sql="INSERT INTO `reply`(`reply_id`, `name`, `email`, `phone`, `comment`) VALUES ('','$fullname','$email','$phone','$msg')";
	$result=mysql_query($sql);
	header("location:contact_us.php");
}
?>

<div class="main">

<div class="inside1">

</div>
<div class="inside2">
<h1><span class="cc">Contact us</span></h1>
</div>
<div class="inside3">
<p><b>Phone no</b>:9804647445</p><br />
<p><b>Email:</b><a href="#">rajkamalkashyap@gmail.com</a></p><br />
<p>
kali tirth,tarulia 2nd lane <br />
kestopur,kolkata,west bengal<br />
pin-700102<br />
</p>
<P><img src="apache_pb.png" width="400" height="281" ></P>
</div>
<div class="inside4">
<form action="contact_us.php" method="post">
<table
<tr>
<td> <b><span class="aa">Full name</span></b></td>
</tr>
<tr>
<td><input type="text" name="text1"  style="width:200px; height:27px"></td>
</tr>
<tr>
<td><span class="aa">Email Add</span></td>
</tr>
<tr>
<td><input type="email" name="email1" style="width:200px; height:27px" ></td>
</tr>
<tr>
<td><span class="aa">Telephone</span></td>
</tr>
<tr>
<td><input type="number" name="number1" style="width:200px; height:27px" ></td>
</tr>
<tr>
<td><span class="aa">Your msg</span></td>
</tr>
<tr>
<td><input type="text" name="text2" style="width:350px; height:150px"></td>
</tr>
<tr>
<td><input type="submit" name="sub" value="send" style="width:60px; height:25px; color:#00F;" ></td>
</tr>

</table>
</form>
</div>
</div>


</body>
<?php include("footer.php"); ?>
</html>