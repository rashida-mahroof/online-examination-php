<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
?>
<?php include("college_menu.php"); ?>
<body>
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <h1>View Departments
    </h1>
	<div class="shadowundertop">
		</div>
  </div>
   <?php
	$str="select * from department where c_logid='$lid'";
	$res=mysqli_query($con,$str);
	if(mysqli_num_rows($res)>0){
	?>
	
	
		<div class="grid">
  <table width="400" border="1" align="center" cellpadding="5" cellspacing="1">
    <tr>
      <th>Sl no </th>
      <th><p>Departments</p>      </th>
	  <th></th>
    </tr>
 
	<?php
	$i=1;
	while($res1=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $res1[1] ?></td>
	   <td><a href="editdept.php?id=<?php echo $res1[0]?>"><img src="Edit_35px.png" alt="edit"  width="35" height="35" />Edit</a></td>
    </tr>
	<?php $i++; } } ?>
  </table>
</form>
</div>
</body>
</html>
<?php include("footer.html"); ?>