<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];

 include("admin_menu.html");

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$con=mysqli_connect("localhost","root","","online_examination");

?>
<body>
 
<!-- CONTENT
================================================== -->
<div class="grid">
		<div class="shadowundertop">
		</div>
		<div class="row">
			<div class="c12">
				<h1 class="maintitle ">
				<span>What clients say</span>
				</h1>
				<div id="content">
				 <?php
   $str="select feedback.*,students.email,companies.company_name,students.first_name,students.last_name,students.Photo from feedback,students,companies where feedback.logid=students.logid and feedback.company_lid=companies.logid";
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
							<img src="pics/<?php echo $res1['Photo']?>" class="avatarspic" alt="">
							<h6><?php echo $res1[6] ?></h6><br />
							<?php echo $res1[3] ?>
							 <?php echo $res1[2] ?>
						</div>
						<div class="author-wrapper">
							<div class="arrow">
							</div>
							<div class="testimonial-name">
								 <?php echo $res1['first_name'] ?> <?php echo $res1['last_name'] ?><br /><span><?php echo $res1[5] ?></span>
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