<?php
$con=mysqli_connect("localhost","root","","online_examination");
$idd=$_GET['id'];
	
	$a="delete from questions where qid='$idd'";
	$i=mysqli_query($con,$a);
	if($i)
	{
	?>
	<script>alert("Do you want to continue ?");
	window.location="view_qstn.php";
	</script>
	<?php
	}
?>