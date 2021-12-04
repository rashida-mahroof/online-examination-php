
<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
 include("admin_menu.html"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
?>
<body>
<div class="grid">
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <h1>View Notifications
    </h1>
	 <div class="shadowundertop"></div>
		<div class="row"> 
    <table width="684" border="1" align="center" cellpadding="15" cellspacing="2">
      <tr>
        <th width="24"><strong>SI No </strong></td>
        <th width="206"><strong>Notification</strong></td>
        <th width="84"><strong>Publish Date</strong></td>
        <th width="78">Last date         
        <th width="39">Edit
        <th width="45">Delete</th>
      </tr>
      <tr>
        <?php
   $str="select * from notifications order by n_date desc ";
	$res=mysqli_query($con,$str);
	$i=1;
	while($res1=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $res1[1] ?></td>
      <td><?php echo $res1[2] ?></td>
      <td><?php echo $res1['last_date'] ?></td>
      <td><a href="edit_notification.php?id=<?php echo $res1[0] ?>"><img src="Edit_35px.png"  /></a></td>
      <td><p><a href="deletentfn.php?id=<?php echo $res1[0] ?>"><img src="Delete_35px.png" alt="delete" width="35" height="35" /><a href="deletentfn.php?id=<?php echo $res1[0] ?>"></a></p>        </td>
    </tr>
	<?php $i++; } ?>
    </table>
  </div>
</div>
</div>
</form>
</body>
</html>
<?php include("footer.html"); ?>