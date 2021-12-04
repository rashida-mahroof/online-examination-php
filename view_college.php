
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

<body>
  <div class="grid">
  
<form id="form1" name="form1" method="post" action="">
  <h1 align="center">View Colleges
    <?php
	$con=mysqli_connect("localhost","root","","online_examination");
	
	$str="select * from colleges order by colid desc ";
	$res=mysqli_query($con,$str);
	if(mysqli_num_rows($res)>0)
	{
	?>
    </h1>
  <div class="shadowundertop"></div>
		<div class="row"> 
  
          <div align="center">
            <table width="525" border="0" cellspacing="10" cellpadding="20" id="myTabl">
              <tr>
                <td width="648"><div align="right"><a href="add_college.php"><img src="Plus_50px.png" alt="add" width="50" height="50" border="0" align="top" usemap="#Map" />Add College </a><a href="add_college.php">
                <map name="Map" id="Map">
                  <area shape="circle" coords="145,146,121" href="#" />
                </map>
                </a></div></td>
        </tr>
                  </table>
          </div>
	</div>
 
		<div align="center">
		  <table width="522" border="1" align="center" cellpadding="20" cellspacing="1" id="myTabl">
		    <tr><thead>
		      <th width="25"><strong>SI No</strong></td>
	          <th width="77"><strong>College</strong></td>
              <th width="99"><strong>Address</strong></td>
              <th width="89"><strong>Contact Details </strong></td>
			   <th width="89"><strong> Departments </strong></td>
              <th width="14">&nbsp;</td>
            <th width="14"><a href="add_college.php"></a></td>     </thead>         </tr><tbody>
		    
		    <?php
	$i=1;
	
	while($res1=mysqli_fetch_array($res))
	{
	$colid=$res1['logid'];
	?>
		   
		    <tr>
		      <td><?php echo $i ?></td>
        <td><?php echo $res1[1] ?></td>
        <td><?php echo $res1[2] ?><br><?php echo $res1[3] ?><br><?php echo $res1[4] ?><br><?php echo $res1[5] ?></td>
        <td><?php echo $res1[6] ?><br><?php echo $res1[7] ?></td>
		<td><?php
		
		$d="select * from department where c_logid=$colid";	
	$dep=mysqli_query($con,$d);
	$j=0;
	while($res2=mysqli_fetch_array($dep))
	{
		
		 echo $res2['d_name'];?><br /><?php 
	$j++; }	?></td>
        <td><div align="right"><a href="editclg.php?id=<?php echo $res1[0] ?>"></a><a href="editclg.php?id=<?php echo $res1[0] ?>"><span class="shadowundertop"><img src="Edit_35px.png" alt="edit" width="35" height="35" /></span>Edit</a></div></td>
        <td><a href="deleteclg.php?id=<?php echo $res1[0] ?>"><img src="Delete_35px.png" alt="delete" width="35" height="35" /></a>
		<a href="deleteclg.php?id=<?php echo $res1[0] ?>">Delete</a></td>
      </tr>
		    <?php $i++; } }else{ echo "No Registered Colleges "; } ?>
	           </tbody> </table>
    </div>
		<div align="right"><a href="add_college.php"></a>  </div>
  <div align="right"></div>
  <div align="center"></div>
  <p align="center">
    
  </p>
</form>
</div>
</div>

</body>
</html>
<?php include("footer.html"); ?>