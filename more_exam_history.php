<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$idd=$_GET['id'];
include("college_menu.php"); ?>
<body>
<div class="grid">
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <p>&nbsp;</p>
	<?php
		 
		  $str="select students.*,department.*,student_list.* from student_list,students,department,exam,colleges,vacancies where students.logid=student_list.studid and students.d_id=department.d_id and exam.clid='2' and exam.clid=colleges.colid and exam.vid=vacancies.vid and  students.c_logid=colleges.logid;";
	$res=mysqli_query($con,$str);
	if(mysqli_num_rows($res)>0){
	?>
    <table width="400" border="0" cellspacing="10" cellpadding="20">
      <tr>
        <th scope="col">SI No </th>
        <th scope="col">Students</th>
        <th scope="col">Department</th>
        <th scope="col">Semester</th>
        <th scope="col">Percentage</th>
		 <th scope="col">Status</th>
      </tr>
	   <?php
	  $i=1;
	while($res1=mysqli_fetch_array($res))
	{
		  ?>
      <tr>
        <td><?php echo $i++ ?></td>
        <td><a href="student_profile_college.php?id=<?php echo $res1['sid'] ?>"><?php echo $res1['first_name'] ?> <?php echo $res1['last_name'] ?></a></td>
        <td><?php echo $res1['d_name'] ?></td>
        <td><?php echo $res1['semester'] ?></td>
        <td><?php echo $res1['percentage'] ?></td>
		 <td><?php echo $res1['status'] ?></td>
      </tr>
	  <?php }} ?>
    </table>
  </div></div>
</form>
</body>
</html>
<?php include("footer.html") ?> 