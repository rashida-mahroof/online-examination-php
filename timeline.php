<!DOCTYPE HTML>
<html>
<head><meta name="viewport" content="width=device-width"/>
<title>Salique Theme Multipurpose Responsive </title>
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- Change skin color here -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<script src="js/jquery-1.9.0.min.js"></script><!-- scripts at the bottom of the document -->
<script src="js/jquerymig.js"></script>
</head>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
include("company_menu.php");
?>
<body>
<!-- HEADER
================================================== -->


<!-- CONTENT
================================================== -->
<div class="grid">
		<div class="shadowundertop">
		</div>
		<div class="row">
			<div class="c12">
				<h1 class="maintitle ">
				<span>EXAM HISTORY</span>
				</h1>
				<div id="timelineContainer">
					<div class="timelineToggle">
						
					</div>
					<br class="clear">
					
					 <?php
	  $i=1;
	  $str="select exam.*,vacancies.post from exam,vacancies where clogid='$lid' and exam.vid=vacancies.vid order by date asc";
	  $res=mysqli_query($con,$str);
	  //echo $res;
	  while($res1=mysqli_fetch_array($res))
	  {
	  ?>
					
					
					<!-- /.timelineMajor -->
					<div class="timelineMajor">
						<h2 class="timelineMajorMarker"><span><?php echo $res1['date'] ?><a href="delteexam.php?id=<?php echo $res1[0] ?> "><img src="Delete_20px.png" height="35" width="35" align="right"></a></span></h2>
						<dl class="timelineMinor">
							<dt id="19610504"><a><?php echo $res1['post'] ?></a></dt>
							<dd class="timelineEvent" id="19610504EX" style="display: none;">
							
						
							<br class="clear">
							</dd>
							<!-- /.timelineEvent -->
						</dl>
						<!-- /.timelineMinor -->
					</div>
					
					
					<?php $i++; }  ?>
<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- call timeline script -->
<script src="js/timeline.js"></script>

</body>
</html>

