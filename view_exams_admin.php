<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
	 
	 $con=mysqli_connect("localhost","root","","online_examination");
$idd=$_GET['id'];

include("admin_menu.html");
?>
<body>
<div class="grid">
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <p>&nbsp;</p>
    <h1>Exam details</h1>
    <p>&nbsp;</p>
	 
<?php 
	 
	 
	  $i=1;
	 // $str="select colleges.college_name,exam.*,vacancies.post from companies,colleges,exam,vacancies where exam.vid=vacancies.vid and vacancies.clogid='$idd' and companies.logid=vacancies.clogid and exam.clid=colleges.logid";
	 
	 $str="select colleges.college_name,exam.date,vacancies.post from vacancies,exam,colleges,companies where colleges.logid=exam.clid and exam.vid=vacancies.vid and companies.logid='$idd' and companies.logid=vacancies.clogid order by date desc";
	  $res=mysqli_query($con,$str);
	  if(mysqli_num_rows($res)>0)
	  {
	  ?>
	 
 
    
    <table width="400" border="1" cellspacing="1" cellpadding="20">
      <tr>
        <th scope="col">SI No </th>
        <th scope="col">Exam</th>
        <th scope="col">Date</th>
        <th scope="col">College</th>
      </tr>
	   <?php
	   $i=0;
	  while($res1=mysqli_fetch_array($res))
	  {
	  $i++;
	  ?>
      <tr>
        <td><?php echo $i?> </td>
        <td><?php echo $res1['post'] ?></td>
        <td><?php echo $res1['date'] ?></td>
        <td><?php echo $res1['college_name'] ?></td>
      </tr>
	  <?php  } } 
	  else { 
	  echo "no exams";
	 
	   }  ?>
    </table>
  </div>
  </div>
</form>
</body>
</html>
<?php  include"footer.html" ?>