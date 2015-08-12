<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start(); 
if(!isset($_SESSION['user_name']))
{
	header("location:adminpanel.php");
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>edit</title>
<style>
body{
	background:#CCC;
}
#loginbutton{
	color:#CCC;
	font:"Lucida Console", Monaco, monospace;
	font-size:23px;
	border-radius:10px 10px 10px 10px;
	background-image:url(xbgdark_2.jpg);
	border-color:#666;
	border-bottom:#CCC;
}
</style>
</head>
<body>
<p><h1><center>welcome admin</center></p></h1>
<hr />
<p>here is detail of all booked rooms<p>
<?php
include("dbinclude.php");
$sql="SELECT * from roomdetail";
$result=mysql_query($sql);
?>
<table border='4' >
<tr>
<th> username</th>
<th>start_date</th>
<th>end_date</th>
<th>room_type</th>
<th>total_rooms</th>
<th>total_amount</th>
<th>update</th>
<th>delete</th> 
</tr>
<?php
while($x=mysql_fetch_array($result))
{
	$user_id=$x['id'];
	$username=$x['username'];
	$startdate=$x['checkin_date'];
	$end_date=$x['checkout_date'];
	$roomtype=$x['room_type'];
	$total_room=$x['no_of_room'];
	$amount=$x['amount'];
	?>
	<tr>
	<td>  <?php echo $username; ?>  </td>
	<td> <?php echo $startdate;  ?></td>
	<td> <?php echo $end_date;  ?></td>
	<td> <?php echo $roomtype;  ?></td>
	<td> <?php echo $total_room; ?> </td>
	<td> <?php echo $amount;  ?></td>
     <td> <a href="update.php?idd=<?php   echo $user_id; ?>">update</a></td>
     <td> <a href="delete.php?idd=<?php echo $user_id; ?>">delete</a></td>
     </tr>
<?php } ?>


</table><br /><br /><br /><br /><br /><br />
<a href="logout1.php"><input type="button" value="logout" style="width:150px; height:30px" id="loginbutton" ></a>
</body>
</html>