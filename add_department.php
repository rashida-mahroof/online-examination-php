
<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
?>
<?php include("college_menu_form.php"); ?>
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
	
	return true;
}
</script>
</head>
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
				<span>HERE..</span>
				</h1>
				
		<div class="form" >
							 <form id="form1" name="form1" method="post" action="">
							 
							<input type="text" name="dname" id="name" placeholder="Enter Department" />
        
       
     
          
							
							<input name="Submit" type="submit" id="Submit"  onclick="return valid();" value="Submit" size="45" width="60" height="25" />
						</div>
			</div><!-- end main content -->			
		</div>
		</div>
		</div>
</div><!-- end grid -->


</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
if(isset($_POST['Submit']))
{
	
	$dname=$_POST['dname'];
	//echo "$dname";
	$x=mysqli_query($con,"select * from department where d_name='$dname' and c_logid='$lid'");
	 if(mysqli_num_rows($x)>0)
	  {
	  
	  ?>
	  	<script>alert("already added")</script>
		<?php
		}else{ 
		$a="insert into department (d_name,c_logid)values('$dname','$lid');";
	  
	
	
	$i=mysqli_query($con,$a);
	if($i)
	{
	?>
	<script>alert("Do you want to continue ?")</script>
	<?php
	}
	}
}
?>

<?php include("footer.html"); ?>
	 
