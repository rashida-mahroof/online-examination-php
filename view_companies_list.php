<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
$type=$_SESSION['type']; 
?>
<?php
if ($type=="admin")
{
	 include("admin_menu.html"); 
}else if($type=="college")
{
	 include("college_menu.php");
}else{
	include ("student menu.php");
} 
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body><form id="form1" name="form1" method="post" action="">
<div class="grid">

  
  <h1 align="center">View Companies </h1>
   <div class="shadowundertop"></div>
		<div class="row"> 
        <p align="center">
          <?php
	if($type=="admin")
	{
		$str="select * from companies order by cid desc";
	
		
	$res=mysqli_query($con,$str);
	if(mysqli_num_rows($res)>0)
	{
	?>
  </p>
        <div align="center">
          <table width="703" border="0" cellspacing="10" cellpadding="20">
            <tr>
              <td width="554"><div align="right"><a href="add_company.php"><img src="Plus_50px.png" alt="add" width="50" height="50" border="0" align="top" usemap="#Map" />Add Company </a><a href="add_company.php">
              <map name="Map" id="Map">
                <area shape="circle" coords="145,146,121" href="#" />
              </map>
              </a></div></td>
            </tr>
          </table>
        </div>
        <table width="699" border="1" align="center" cellpadding="20" cellspacing="1">
    <tr>
      <th width="39" height="61"><strong>SI.No</strong></td>
      <th width="119"><strong>Company Name</strong></td>
      <th width="103"><strong>Address</strong></td>
      <th width="114"><strong>Contact Deatails  </strong></td>
      <th width="114">Exam details       
      <th width="24">&nbsp;</td>
        Vacancy
      <th width="24">&nbsp;</td>
      <th width="39">&nbsp;</td>    </tr>
	
	<?php
	$i=1;
	while($res1=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td height="114"><?php echo $i ?></td>
      <td><?php echo $res1[1] ?></td>
      <td><?php echo $res1[2] ?><br><?php echo $res1[3] ?><br><?php echo $res1[4] ?><br><?php echo $res1[5] ?></td>
      <td><?php echo $res1[6] ?><br><?php echo $res1[7] ?><br><?php echo $res1[8] ?></td>
	  
	  <?php  if($type=="admin"){ ?>
      <td><a href="view_exams_admin.php?id=<?php echo $res1["logid"] ?>">Exam details</a></td>
	 
	  <?php } ?>
      <td><a href="view_vacancy.php?id=<?php echo $res1[10]?>">View Vacancy</a><a href="#"></a></td>
      <td><a href="editcomp.php?id=<?php echo $res1[0] ?>"><span class="shadowundertop"><img src="Edit_35px.png" alt="edit" width="35" height="35" /></span></a><a href="editcomp.php?id=<?php echo $res1[0] ?>">Edit</a></td>
      <td><a href="deletecomp.php?id=<?php echo $res1[0] ?>"><img src="Delete_35px.png" alt="delete" width="35" height="35" /></a><a href="deletecomp.php?id=<?php echo $res1[0] ?>">Delete</a></td>
    </tr>
	<?php $i++; } }else{ echo "No Registered Colleges "; } ?>
  </table>
  <?php
  }else{
  	$str="select * from companies order by cid desc";
	
		
	$res=mysqli_query($con,$str);
	if(mysqli_num_rows($res)>0)
	{
	?>
  <table width="723" border="1" align="center" cellpadding="20" cellspacing="1">
    <tr>
      <th width="39" height="61"><strong>SI.No</strong></td>
      <th width="119"><strong>Company Name</strong></td>
      <th width="103"><strong>Address</strong></td>
      <th width="114"><strong>Contact Deatails  </strong></td>
	  <th width="130"></th>
      
    </tr>
	
	<?php
	$i=1;
	while($res1=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td height="114"><?php echo $i ?></td>
      <td><?php echo $res1[1] ?></td>
      <td><?php echo $res1[2] ?><br><?php echo $res1[3] ?><br><?php echo $res1[4] ?><br><?php echo $res1[5] ?></td>
      <td><?php echo $res1[6] ?><br><?php echo $res1[7] ?><br><?php echo $res1[8] ?></td>
      <td><a href="view_vacancy.php?id=<?php echo $res1[10]?>">View Vacancy</a><a href="#"></a></td>
      
    </tr>
	<?php $i++; } }else{ echo "No Registered Colleges "; } ?>
  </table>
  <?php  } ?>

</form>
</div>
</div>
</body>
</html>
<?php include("footer.html"); ?>





