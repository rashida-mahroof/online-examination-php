<?php
$con=mysqli_connect("localhost","root","","online_examination");
$requestid=$_GET['rid'];
$str="update requests set status='Rejected' where rqid='$requestid'";
$res=mysqli_query($con,$str);
if($res>0)
{
?>
<script>
alert("Success")
window.location="view_request.php";
</script>
<?php
	
}
?>