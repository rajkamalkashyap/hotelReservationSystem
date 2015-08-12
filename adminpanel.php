<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php session_start(); ?>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin panel</title>
<link href="adminpanel.css" rel="stylesheet" type="text/css" />

</head>

<body>
<?php include("inc.php"); ?>
<div class="header"></div>
<div class="full">
<div class="adminpanel">
<center><h1><span class="color">Admin login</span></h1></center>
<div class="mainform">
<form action="adminpanel.php" method="post" name="form1">
<table>
<tr>
<td><h2><span class="color">username</span></h2></td>
<td><input type="text" name="text1" pacleholder="abc" style="width:150px; height:30px" id="loginbutton" >
</tr>
<tr>
<td><h2><span class="color">password</span></h2></td>

<td><input type="password" name="pass" pacleholder="*******" style="width:150px; height:30px" id="loginbutton">
</tr>
<tr>
<td></td>

<td><input type="submit" name="sub" value="login" style="width:155px; height:30px" id="loginbutton" ></td>
</tr>

</table>
</form>
</div>
</div>
</div>

<?php
if(isset($_POST['text1']) && isset($_POST['pass']) && !empty($_POST['pass']) && !empty($_POST['text1']))
{
	$usern=$_POST['text1'];
	$passw=$_POST['pass'];
	if($usern=='raj' && $passw=='123' ||$usern=='rajdeep' && $passw=='123')
	{
		header("location:edit.php");
		$_SESSION['user_name']=$usern;
	}
	else
	{
      echo "incorrect username/password";
	}
}
?>


<div id="footer">
		<p>
        	Terms of Use |  Copyright &copy; imperial Hotel. Design by <a href="#">Raj kamal and rajdeep sarkar</a>
        </p>
	</div>

</body>
</html>