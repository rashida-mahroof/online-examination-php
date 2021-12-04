<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<center>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript">
function valid()
{
	if(document.getElementById("name").value=="")
	{
		alert("Enter Department!");
		document.getElementById("name").focus();
    	return false;
 	}
	if(/[^a-z]/gi.test(document.getElementById("name").value))
	{
		alert("Special characters are not allowed in name");
		document.getElementById("name").focus();
		return false;
	}
	return true;
}
</script>

</head>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
$idd=$_GET['id'];
include("college_menu.php");
$str="select * from department where d_id='$idd'";
$res=mysqli_query($con,$str);
if($res1=mysqli_fetch_array($res))
{
?>
<body>


<!-- CONTENT
================================================== -->
<div class="grid">
		<div class="shadowundertop">
		</div>
		<div class="row">
			<!-- SIDEBAR -->	
			<div class="c3">
				<div class="leftsidebar">
					<h2 class="title stresstitle">Add department</h2>
					<hr class="hrtitle">
					<p align="center"><img src="Department_100px.png" align="absmiddle"  /></p>
					Department registration is essential to access the overall functionalities.
					
					
				</div>
			</div><!-- end sidebar -->
			
			<!-- MAIN CONTENT -->
			<div class="c9">
				<h1 class="maintitle space-top">
				<span>Here</span>
				</h1>
				
		<div class="form" >
						<form id="form1" name="form1" method="post" action="">	
       
     				<input type="text" id="name" name="dname" value="<?php echo $res1[1] ?>" placeholder="Enter Department" />
          <?php } ?>
							
							<input name="Submit" type="submit" id="Submit" style="font-size:12px; style="background:" onclick="return valid();" value="Submit" size="45" width="60" height="25" />
						</div>
			</div><!-- end main content -->			
		</div>
		</div>
		</div>
</div><!-- end grid -->


</form>

</body>
</html>
<?php
if(isset($_POST['Submit']))
{
	
	$dname=$_POST['dname'];
	
	$a="update department set d_name='$dname' where d_id='$idd'";
	$i=mysqli_query($con,$a);
	if($i)
	{
	?>
	<script>alert("Do you want to continue ?");
	window.location="view_departments.php";
	</script>
	<?php
	}
}
include("footer.html");
?>
