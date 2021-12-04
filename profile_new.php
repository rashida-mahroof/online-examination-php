<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['s_logid'];

?>
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
</head>
<body>
<div id="pricing-table" class="clear">
					<div class="plan">
					
					 <?php
	  $str="select * from students where logid=$lid";
	  $res=mysqli_query($con,$str);
	  if($res1=mysqli_fetch_array($res))
	  {
	  ?>
	  
	  <h3><?php echo $res1['first_name'] ?> <?php echo $res1['last_name'] ?><span><img src="pics/<?php echo $res1[13]?>" width="100" height="150"/></span></h3>
	  <a class="signup" href="">Sign up</a>
						<ul>
							
							<li><b>>Email Id :</b> <?php echo $res1['email'] ?></li>
							<li><b>Address :</b> <?php echo $res1['place'] ?><br><?php echo $res1['city'] ?><br><?php echo $res1['post'] ?><br><?php echo $res1['pin'] ?></li>
							<li><b>Gender :</b> <?php echo $res1['gender'] ?></li>
							<li><b>Mobile :</b> <?php echo $res1['mobile'] ?></li>
						</ul>
						</div>
						</div>
 <?php } ?>
<table width="400" border="1" align="center" cellpadding="6" cellspacing="2">
      <tr>
        <td>Company Name </td>
        <td>Post</td>
        <td>&nbsp;</td>
      </tr>
	  <?php
	  $onlineid=$_SESSION['onlineid'];
	  $a=mysqli_query($con,"select companies.company_name,vacancies.post from vacancies,companies,student_list,exam where exam.examid=student_list.examid and student_list.onlineexamid='$onlineid' and exam.vid=vacancies.vid and vacancies.clogid=companies.logid");
	  while($b=mysqli_fetch_array($a))
	  {
	  ?>
      <tr>
        <td><?php echo $b['company_name']; ?></td>
        <td><?php echo $b['post']; ?></td>
        <td><a href="OnlineAttendExam.php">Start Exam</a></td>
      </tr>
	  <?php } ?>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
</body>
</html>
