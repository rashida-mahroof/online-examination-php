<?php
$con=mysqli_connect("localhost","root","","online_examination");
$idd=$_GET['id'];
	
	$a="delete from notifications where nid='$idd'";
	$i=mysqli_query($con,$a);
	if($i)
	{
	?>
	<script>alert("Do you want to continue ?");
	window.location="view_notifications.php";
	</script>
	<?php
	}
?>