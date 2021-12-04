<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
$type=$_SESSION['type'];
if ($type=="company")
{
	 include("company_menu.php"); 
}else if($type=="college")
{
	 include("college_menu.php");
}else
{
 include ("student menu.php");
}

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
 
<!-- CONTENT
================================================== -->
<div class="grid">
		<div class="shadowundertop">
		</div>
		<div class="row">
			<div class="c12">
				<h1 class="maintitle ">
				<span>Admin notifications</span>
				</h1>
				<div id="content">
				 <?php
   $str="select * from notifications";
	$res=mysqli_query($con,$str);
	if(mysqli_num_rows($res)>0)
	{
	
	?>
	 <?php
	$i=1;
	while($res1=mysqli_fetch_array($res))
	{
	?>
					<!-- box -->
					<div class="boxfourcolumns fw">
						<div class="testimonial">
							
							<?php echo $res1[1] ?>
							
						</div>
						<div class="author-wrapper">
							<div class="arrow">
							</div>
							<div class="testimonial-name">
								 <?php echo $res1[2] ?></span>
							</div>
						</div>
					</div>
					 <?php $i++; }   }else{ ?> <h6>No feedbacks to view </h6> <?php } ?>
				</div>
			</div>
		</div>
</div><!-- end grid -->

     
 
</body>
</html>
<?php include("footer.html"); ?>