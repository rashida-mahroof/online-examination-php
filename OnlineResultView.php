<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

include("student menu.php"); 
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$logid=$_SESSION['studid'];
$onlineid=$_SESSION['onlineid'];
echo $logid;
$gtot=0;
$tot=0;
$per=0;

//mysqli_query($con,"update selected_students set temp_pass='Finished' where studid='$logid'");
mysqli_query($con,"delete from selected_students where studid='$logid'");

$a=mysqli_query($con,"select sum(questions.mark),count(*) from questions,vacancy_questions,student_list,exam where exam.examid=student_list.examid and exam.vid=vacancy_questions.vid and vacancy_questions.qid=questions.qid and student_list.onlineexamid='$onlineid'");
$b=mysqli_fetch_array($a);
$gtot=$b[0];
$totalqus=$b[1];
?>
<body>
<div class="grid">
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <h1>My Result
    </h1>
  </div>
  <table width="400" border="0" align="center" cellpadding="20" cellspacing="10">
   <tr>
      <td>Total Questions : </td>
      <td>
	  <?php echo $totalqus; ?></td>
    </tr>
    <tr>
	
      <td>Questions Attended : </td>
	  <?php
	  $a="select count(*) from answer where onlineexamid='$onlineid'"; 
	  $res=mysqli_query($con,$a);
	  $res1=mysqli_fetch_array($res)
	  ?>
      <td><?php echo $res1[0] ?> </td>
    </tr>
   
    <tr>
      <td>Correct Answers : </td>
	  <?php
	  $b="select count(*) from answer where mark!=0 and onlineexamid='$onlineid'";
	  $res=mysqli_query($con,$b);
	  $res1=mysqli_fetch_array($res);
	  ?>
      <td><?php echo $res1[0] ?></td>
    </tr>
    <tr>
      <td>Total Mark : </td>
	  <?php
	  $c="select sum(mark) from answer where onlineexamid='$onlineid'";
	  $res=mysqli_query($con,$c);
	  $res1=mysqli_fetch_array($res);
	  $tot=$res1[0];
	  ?>
      <td><?php echo $res1[0] ?></td>
    </tr>
    <tr>
      <td>Percentage : </td>
	  
      <td>
	  <?php
	  $per=($tot/$gtot)*100;
	  $per1=round($per);
	  echo round($per);
	  
?>%	  </td>
    </tr>
  </table>
  <?php
  mysqli_query($con,"update student_list set status='Finished',percentage='$per1' where onlineexamid='$onlineid'");
  ?>
  </div>
</form>
</body>
</html>

<?php include("footer.html"); ?>
