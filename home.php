<html>
<?php session_start(); ?>
<head>
<title>home page</title>
<link rel="stylesheet" type="text/css" href="style.css"/>

<script>
function check(){
var a=document.getElementById("password1").value;
var b=document.getElementById("password2").value;
if(a!=b)
{
	alert("password didnt match");
	return false;
}
return true;
}
</script>
</head>
<body>
<?php include("inc.php"); ?>
<div class="header"> </div>
<div class="login">

<form action="home.php" name="n1" method="post">
<div class="innerlogin">
<table>
<tr>
<th><span class="xx">username</span></th>
<th><span class="xx">password</span></th>
</tr>

<tr>
<td><input type="text" name="text1" size="20" style="width:150px; height:30px" id="loginbutton"></td>
<td><input type="password" name="password1" size="20" style="width:150px; height:30px" id="loginbutton"></td>
<td><input type="submit" name="submit1" value="login"  id="loginbutton"></td>
</tr>
</th>
</table>
</div>
</form>
</div>
<div class="lowerbar">
<div class="leftbar">
<h1><b>Welcome to imperial hotel </b></h1>
</div>
<div class="rightbar">

<form action="home.php" name="signup1" method="post" onSubmit="return check()" >
<table cellspacing="10">
<tr>
<th><h1>sign up</h1></th>
</tr>
<tr>
<td><h3>first name</h3></td>
<td><input type="text" name="textfirstname" style="width:150px; height:30px" id="loginbutton"></td>
</tr>

<tr>
<td><h3>last name</h3></td>
<td><input type="text" name="textlastname" style="width:150px; height:30px" id="loginbutton"></td>
</tr>

<tr>
<td><h3>phone</h3></td>
<td><input type="number" name="number1" style="width:150px; height:30px" id="loginbutton"></td>
</tr>

<tr>
<td><h3>Email</h3></td>
<td><input type="email" name="email1" style="width:150px; height:30px" id="loginbutton"></td>
</tr>

<tr>
<td><h3>password</h3></td>
<td><input type="password" name="password1" id="password1" style="width:150px; height:30px; color:#CCC;
	font:Lucida Console, Monaco, monospace;
	font-size:23px;
	border-radius:10px 10px 10px 10px;
	background-image:url(xbgdark_2.jpg);
	border-color:#666;
	border-bottom:#CCC;" ></td>
</tr>

<tr>
<td><h3>confirm password</h3></td>
<td><input type="password" name="password2" id="password2" style="width:150px; height:30px; color:#CCC;
	font:Lucida Console, Monaco, monospace;
	font-size:23px;
	border-radius:10px 10px 10px 10px;
	background-image:url(xbgdark_2.jpg);
	border-color:#666;
	border-bottom:#CCC;"></td>
</tr>

<tr>
<td><h3>city/state</h3></td>
<td><input type="text" name="textcity" style="width:150px; height:30px" id="loginbutton"></td>
</tr>

<tr>
<td><h3>country</h3></td>
<td><input type="text" name="textcountry" style="width:150px; height:30px" id="loginbutton"></td>
</tr>

<tr>
<td><h3>payment type</h3></td>
<td>cash<input type="radio" name="button1"  ></td>
<td> credit card<input type="radio" name="button1" ></td>
</tr>

<tr>
<td><input type="submit" name="sub" value="sumit" style="width:150px; height:30px" id="loginbutton"></td>
<td><input type="reset" name="res" value="reset" style="width:150px; height:30px" id="loginbutton"></td>
</tr>



</table>

</form>
</div>
</div>


<?php
include("dbinclude.php");
if(isset($_POST['sub']))
{
	  echo "<h1><center>successfully signed up</center></h1>"; 
$first_name=$_POST['textfirstname'];
$last_name=$_POST['textlastname'];
$phone=$_POST['number1'];
$email=$_POST['email1'];
$password=$_POST['password1'];
$city=$_POST['textcity'];
$country=$_POST['textcountry'];
$pay=$_POST['button1'];
$sql="insert into users values('','$first_name','$last_name','$phone','$email','$password','$city','$country','$pay')";
mysql_query($sql);
// header("location:home.php");
}
?>

<?php
if(isset($_POST['submit1']))
{
include("dbinclude.php");
$a=$_POST['text1'];
//$_SESSION['usern']=$a;
$b=$_POST['password1'];
$sql="select * from users where first_name='$a' and pass='$b' ";
$result=mysql_query($sql);
$num=mysql_num_rows($result);
if($num==1)
{
	header("location:register.php");
	$_SESSION['usern']=$a;
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