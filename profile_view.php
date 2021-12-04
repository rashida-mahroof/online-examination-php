<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['s_logid'];
include("student menu.php"); 
//include("Student_Home.php"); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

</head>

<body>
<div class="grid">
<form id="form1" name="form1" method="post" action="">
  <div align="center" class="style1">
    <h2>Profile View </h2>
    <table width="400" border="0" cellspacing="2" cellpadding="10">
      <tr>
	  <?php
	  $str="select * from students where logid=$lid";
	  $res=mysqli_query($con,$str);
	  if($res1=mysqli_fetch_array($res))
	  {
	  ?>
        <td width="143">Name : </td>
        <td width="96"><?php echo $res1['first_name'] ?> <?php echo $res1['last_name'] ?></td>
        <td width="117" rowspan="2"><img src="pics/<?php echo $res1[13]?>" width="100" height="150"/></td>
      </tr>
      <tr>
        <td>Email Id : </td>
        <td><?php echo $res1['email'] ?></td>
      </tr>
      <tr>
        <td>Address : </td>
        <td colspan="2"><?php echo $res1['place'] ?><br><?php echo $res1['city'] ?><br><?php echo $res1['post'] ?><br><?php echo $res1['pin'] ?></td>
      </tr>
      <tr>
        <td>Gender : </td>
        <td colspan="2"><?php echo $res1['gender'] ?></td>
      </tr>
      <tr>
        <td>Mobile : </td>
        <td colspan="2"><?php echo $res1['mobile'] ?></td>
      </tr>
     <?php } ?>
    </table>
    <p>&nbsp;</p>
	
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
  </divO>
</form>
</body>
</html>
<?php //include("footer.html"); ?>