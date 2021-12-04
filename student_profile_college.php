
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$id=$_GET["id"];
$type=$_SESSION['type'];
if($type=="admin")
{
	include ("admin_menu.html");
}
else
{
	include"college_menu.php";
}
?>
<?php  ?>
<body>
<form id="form1" name="form1" method="post" action="">
<div class="grid">
  <div align="center" class="style1">
    <h2>Profile View </h2>
   
	<?php
	$str="select * from students Where sid='$id'";
	$res=mysqli_query($con,$str);
	$i=1;
	if($res1=mysqli_fetch_array($res))
	{
	?>
    
    <p>&nbsp;</p>
    <table width="400" border="1" cellspacing="2" cellpadding="10">
      <tr>
        <th>SI No </td>
        <th>First Name </td>
        <th>Last Name </td>
        <th>Photo</td>
        <th>Gender</td>
        <th>Address</td>
        <th>Contact Details </td>
		<?php if($type=="college"){ ?>
        <th>&nbsp;</td>
        <th>&nbsp;</td>
		<?php }?>
      </tr>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $res1[1] ?></td>
        <td><?php echo $res1[2] ?></td>
        <td><img src="pics/<?php echo $res1['Photo'];?>" width="100" height="150"/></td>
        <td><?php echo $res1[8] ?></td>
        <td><?php echo $res1['address'] ?><br />
		<?php echo $res1[4] ?><br />
          <?php echo $res1[5] ?><br />
          <?php echo $res1[6] ?><br />
        <?php echo $res1[7] ?></td>
        <td><?php echo $res1[3] ?>
          <p><?php echo $res1[9] ?></p>
        </td>
		<?php if($type=="college"){ ?>
        <td><a href="editstud.php?id=<?php echo $res1[0] ?>"><img src="Edit_35px.png" alt="edit" width="35" height="35" />Edit</a></td>
        <td><a href="dltstud.php?id=<?php echo $res1[0] ?>"><img src="Delete_35px.png" alt="delete" width="35" height="35" />Delete</a></td>
      </tr>
	  
	  <?php } } ?>
    </table>
    <p>&nbsp;</p>
  </div>
</form>
</div>
</body>
</html>

<?php include"footer.html" ?>