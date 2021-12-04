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
<div class="grid">
  <div align="center">

		<div class="row">
			<div class="c12">
				<h1 class="maintitle ">
				<span>Sent Request</span>
				</h1>
				
    <h1>
    </h1>
  </div>
  <table width="513" border="1" align="center" cellpadding="10" cellspacing="1">
    <tr>
      <th width="51">Sl_No</td>
      <th width="73">Company</td>
      <th width="64">Address</td>
      <th width="43">Email</td>
      <th width="49">Phone</td>
      <th width="92">&nbsp;</td>
    </tr>
    <tr>
	<?php
	$str="select * from companies";
	$res=mysqli_query($con,$str);
	$i=1;
	while($res1=mysqli_fetch_array($res))
	{
	$compid=$res1['logid'];
	?>
      <td><?php echo $i ?></td>
      <td><?php echo $res1[1] ?></td>
      <td><?php echo $res1[2] ?><br><?php echo $res1[3] ?><br><?php echo $res1[4] ?><br><?php echo $res1[5] ?></td>
      <td><?php echo $res1[6] ?></td>
      <td ><?php  echo $res1[7] ?></td>
      <td>
	  <?php
	  $x=mysqli_query($con,"select * from requests where colid='$lid' and c_logid='$compid' and (status='Accepted' or status='Pending')");
	  if(mysqli_num_rows($x)>0)
	  {
	  	$y=mysqli_fetch_array($x);
		echo $y['status'];
		
	  }else{
	  ?>
	  <a href="sent_req.php ?cid=<?php echo $res1['logid']?>">Send Request</a>
	  <?php } ?>
	  </td>
    </tr>
	<?php $i++; } ?>
  </table>
</form>
</div>
</div></div>
</body>
</html>
<?php include("footer.html"); ?>