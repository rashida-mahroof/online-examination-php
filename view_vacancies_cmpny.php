
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
</head>

<body>
<div class="grid">
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <h1>View Vacancies </h1>
	 <?php
	$str="select * from vacancies where clogid='$lid' order by vdate desc ";
	
	$res=mysqli_query($con,$str);
	 if(mysqli_num_rows($res)>0)
	{
	?>
    <table width="629" border="1" align="center" cellpadding="10" cellspacing="2">
      <tr>
        <th width="41"><strong>Sl_no </strong></td>
        <th width="45"><strong>No_of post</strong></td>
        <th width="68"><strong>Vacancies</strong></td>
        <th width="67"><strong>Basic Pay </strong></td>
        <th width="64"><p><strong>Date</strong>
            </td>
            </td>
        </p>
          <th width="88"><strong>File</strong>
        <th>Download</th>    
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>
     
	
	<?php
	$i=1;
	while($res1=mysqli_fetch_array($res))
	{
	?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $res1['no_vacancies'] ?></td>
        <td><?php echo $res1['post'] ?></td>
        <td><?php echo $res1['basic_pay'] ?></td>
        <td><?php echo $res1['vdate'] ?></td>
        <td><?php echo $res1['file'] ?></td>
        <td width="84"><a href="files/<?php echo $res1['file']?>"><img src="Download_48px_1.png" width="48" height="48" align="middle" /></a><a href="files/<?php echo $res1['file']?>"></a></td>
        <td width="84"></a><a href="editvac.php?id=<?php echo $res1[0] ?>"><img src="Edit_35px.png" alt="edit" width="35" height="35" /></span></a><a href="#">Edit</a></td>
        <td width="84"><a href="deletevac.php?id=<?php echo $res1[0] ?>"><img src="Delete_35px.png" alt="delete" width="35" height="35" /></a><a href="deldetevac.php">Delete</a></td>
      </tr>
      <?php $i++ ?>
      <?php } }else{ echo "No vacancies yet.."; } ?>
    </table>
    <p>&nbsp;</p>
  </div>
</form>
</div>
</body>
</html>
<?php include("footer.html"); ?>