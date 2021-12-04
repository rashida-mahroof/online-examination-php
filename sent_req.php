<?php
$con=mysqli_connect("localhost","root","","online_examination");
$companyid=$_GET['cid'];
session_start();
$lid=$_SESSION['lid'];
$str="insert into requests(colid,c_logid,date)values('$lid','$companyid',curdate());";
$res=mysqli_query($con,$str);
if ($res>0)
{
	header("location:send_request.php");
}
?>