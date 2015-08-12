<?php session_start(); ?>
<html>
<head>
<title>update now</title>
<link rel="stylesheet" type="text/css" href="style2.css"/>
</head>
<body>

<?php 
include("dbinclude.php");
if(isset($_GET['idd']))
 $id=$_GET['idd'];
 
 echo $id;
//echo $user=$_GET['user'];
if(isset($_POST['hidval']))
{
	echo "hiii";	
$username=$_SESSION['usern'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$roomtype=isset($_POST['field_1'])?$_POST['field_1']:"";
$room_nos=$_POST['room_nos'];
$amount=$_POST['roomprice'];	


$checkroom= "select count(*) from roomdetail where room_type='".$roomtype."' ";
$check=mysql_query($checkroom) ;
$roomcount=mysql_fetch_array($check);
 $checkcount=$roomcount[0];
if($checkcount>=10)
{
?> <script>alert("Sorry Rooms Are not Available :( please try another Option !!");</script>
<?php } 
else{
	echo "hello";
$s1="UPDATE roomdetail SET username='$username',checkin_date='$startdate',checkout_date='$enddate',room_type='$roomtype',no_of_room='$room_nos,amount='$amount' where id=$id";
mysql_query($s1);
header("location:success.php");
}
}
?>

<h1> welcome <?php echo "##";?> </h1>
<div class="mainbar">
	
<form action="update.php?idd=<?php echo $id;?>" name="form1" method="post">
<table>
<tr>
            <td width="113">Check in Date</td>
            <td width="215">
              <input name="startdate1" type="date"  value="<?php if(isset($_POST['startdate1'])){ echo $_POST['startdate1']; }?>" /></td>
          </tr>
          <tr>
            <td>Check out Date</td>
            <td>
              <input name="enddate1" type="date" value="<?php if(isset($_POST['enddate1'])){ echo $_POST['enddate1']; }?>" onchange='this.form.submit()' /><input type="hidden" name="hidval" value="1"></td>
          </tr>
</table>
</form>




<form action="update.php" name="from2" method="post">
<table>
<tr>
            <td width="113"></td>
            <td width="215">
              <input name="startdate" type="hidden" value=" <?php if(isset($_POST['startdate1'])){ echo $_POST['startdate1']; }?> " /></td>
          </tr>
          <tr>
            <td></td>
            <td><input name="username" type="hidden" value="<?php  if(isset($_SESSION['usern'])){ echo $_SESSION['username']; } ?>"  />
              <input name="enddate" type="hidden" value=" <?php if(isset($_POST['enddate1'])){ echo $_POST['enddate1']; }?> "  /></td>
          </tr>

<tr>
<td>room type</td>
<td><select class="text_select" id="field_1" name="field_1">
<option value="select">-select-</option>
<?php
include("dbinclude.php"); 
if(isset($_POST['startdate1'])){
 echo $paymentDate = $_POST['startdate1'];
$contractDateBegin = '2013-12-20';
$contractDateEnd ='2014-03-25';

if(($paymentDate >= $contractDateBegin) && ($paymentDate <= $contractDateEnd))
{
 $s2="select * from roomtype where room_season ='high season' ";
$s3=mysql_query($s2);
}
else
{
$s2="select * from roomtype where room_season='low season' ";
$s3=mysql_query($s2);
} 
?>
<?php while($catdata=mysql_fetch_assoc($s3)) { ?>  <option value="<?php echo $catdata['room_price']; ?>"><?php echo $catdata['room_type']; ?></option>
           <?php } ?>
		   <?php } ?>
</select></td>
</tr>
</tr>
		  <tr>
            <td>Price per Room</td>
            <td>
             <span id="a1"  ></span>$
           </td>
          </tr>
		   <tr>
            <td>No. of Guest per Room</td>
            <td>
              <input name="guest" type="text " size="10"/></td>
          </tr>
		  <tr>
            <td>No. of Rooms </td>
            <td>
              <input name="room_nos" id="room_nos" type="text " size="10" onChange="gettotal1()" /></td>
          </tr>
		  <tr>
            <td>Total Amount To Pay</td>
            <td>
             <input type="text" name="roomprice" id="total1"  size="10px" readonly />
           </td>
          </tr>
		  
          <tr>
            <td colspan="2" align="center">
			<input type="submit" name="sub" value="Pay & Book" /></td>
            </tr>
</table>
</form>
<script language="javascript" type="text/javascript">
function notEmpty(){

var e = document.getElementById("field_1");
var strUser = e.options[e.selectedIndex].value;
 var strUser=document.getElementById('a1').innerHTML=strUser;


}
notEmpty()
    
    document.getElementById("field_1").onchange = notEmpty;


   function gettotal1(){
      var gender1=document.getElementById('a1').innerHTML;
      var gender2=document.getElementById('room_nos').value;
      var gender3=parseFloat(gender1)* parseFloat(gender2);
			
      document.getElementById('total1').value=gender3;
	
   }
			</script>
 





</div>



</body>
</html>