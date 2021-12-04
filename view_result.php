<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
$type=$_SESSION['type'];
?>
<?php
if($type=="admin")
{
	 include("admin_menu.html");
}
else
{
 include("college_menu.php"); 
}
?>
 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title></head>

<body>
<center>
<div class="grid">



		<div class="row">
		<h1 align="center">View Result</h1>
			<div class="shadowundertop"> </div>
  <form id="p_student" name="p_student" method="post" action="">
   <?php
	  $str="select student_list.*,companies.company_name,vacancies.post,students.first_name,last_name from student_list,students,companies,vacancies,exam where companies.logid=vacancies.clogid and vacancies.vid=exam.vid and exam.examid=student_list.examid and students.c_logid='$lid' and student_list.studid=students.logid order by percentage desc ";
	  $res=mysqli_query($con,$str);
	  if(mysqli_num_rows($res)>0)
	  {
	 
	  ?>
   
    <div align="center">
      <table width="400" border="1" cellspacing="2" cellpadding="10">
        <tr>
          <th scope="col">Stud.Id</th>
            <th scope="col">Name</th>
            <th scope="col">Post</th>
            <th scope="col">Company</th>
            <th scope="col">Percentage</th>
            <th scope="col">Status</th>
          </tr>
		  <?php
        $i=1;
	  while($res1=mysqli_fetch_array($res))
	  {
	 ?>
        <tr>
          <td><?php echo $i++; ?></td>
            <td><?php echo $res1['first_name'] ?> <?php $res1['last_name'] ?></td>
            <td><?php echo $res1['post'] ?></td>
            <td><?php echo $res1['company_name'] ?></td>
            <td><?php echo $res1['percentage'] ?><img src="Percentage_48px_1.png" width="17" height="13" align="absmiddle" /></td>
            <td><?php echo $res1['status'] ?></td>
          </tr>
        <?php } }else{ echo "Result is empty"; } ?>
      </table>
    </div>
  </form>
</center>
</div>
</div>
</div>
</div>
</body>
</html>
<?php include("footer.html"); ?>