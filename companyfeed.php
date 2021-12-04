
<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
   $lid=$_SESSION['lid'];
    include("company_menu.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center><b>
<div class="grid">
<h1>View Feedback</h1></b>
<div class="shadowundertop"></div>
<form id="form1" name="form1" method="post" action="">
 <?php
   $str="select feedback.*,students.email from feedback,students where feedback.logid=students.logid and feedback.company_lid='$lid'";
	$res=mysqli_query($con,$str);
	if(mysqli_num_rows($res)>0)
	{
	?>
  <table width="486" border="1" cellspacing="1" cellpadding="10">
    <tr>
      <th width="41"><strong>Sl_No</strong></td>
      <th width="38"><strong>Email</strong></td>
    
      <th width="65"><strong>Feedback</strong></td>
      <th width="103"><strong>Date</strong></td>
    </tr>
	
   
  
	<?php
	$i=1;
	while($res1=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $res1[5] ?></td>
    
      <td><?php echo $res1[2] ?></td>
	  <td><?php echo $res1[3] ?></td>
    </tr>
	<?php $i++; } }else{  echo"No feedbacks for you.."; } ?>
  </table>
</form>
</div>
</center>
</body>
</html>
<?php include("footer.html"); ?>
