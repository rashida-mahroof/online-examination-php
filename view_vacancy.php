<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$idd=$_GET['id'];
$type=$_SESSION['type'];
if ($type=="admin")
{
	 include("admin_menu.html"); 
}else if($type=="college")
{
	 include("college_menu.php");
}else
{
 include ("student menu.php");
}
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="">
<div class="grid">
  <div align="center">
   <h1>View Vacancies    </h1>
  <div class="shadowundertop"></div>
		<div class="row"> 
 
  </div>
    <?php
	if($type=="admin")
	{
		$str="select * from vacancies where clogid='$idd' order by vdate desc";
	}else
	{
	$str="select * from vacancies where clogid='$idd' and vdate>=curdate()";
	}
	
	$res=mysqli_query($con,$str);
	if(mysqli_num_rows($res)>0)
	{
	?>
  <table width="848" border="1" align="center" cellpadding="20" cellspacing="2">
    <tr>
      <th width="41"><strong>Sl_no </strong></td>
     
     
	   <th width="74"><strong>No_of post</strong></td>
        <th width="152"><strong>Vacancy</strong></td>
	    <th width="74"><strong>Qualification</strong></td>
      <th width="48"><strong>Basic Pay </strong></td>
      <th width="52"><strong>Last Date</strong></td>
      <th width="103"><p><strong>File</strong></p></td>
	  <th width="66">Download</th>
    </tr>
	
    <tr>
	
	<?php
	$i=1;
	while($res1=mysqli_fetch_array($res))
	{
	?>
      <td><?php echo $i ?></td>
      <td><?php echo $res1['no_vacancies'] ?></td>
      <td><?php echo $res1['post'] ?></td>
	   <td><?php echo $res1['qualification'] ?></td>
      <td><?php echo $res1['basic_pay'] ?></td>
	  <td><?php echo $res1['vdate'] ?></td>
      <td><?php echo $res1['file'] ?></td>
      <td><a href="files/<?php echo $res1['file']?>"><img src="Download_48px_1.png" width="48" height="48" align="middle" /></a></td>
    </tr>
	<?php $i++ ?>
	<?php }  }else{  echo "No vacancies ";  } ?>
  </table>
  </div></div></div></div>
</form>
</div>
</body>
</html>
<?php include("footer.html"); ?>