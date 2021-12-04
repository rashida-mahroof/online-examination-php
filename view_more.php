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
$eid=$_GET['id'];
$name=$_GET['name'];
include("company_menu.php");
?>
<body>
<div class="grid">
<div class="row">
<div class="shadowundertop"> </div>
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <p>&nbsp;</p>
    <p align="left"><label><b><?php echo $name; ?></b></label></p><br />
    <p>
      <?php
	  $str="select questions.*,answer.* from answer,questions where questions.qid=answer.qid and answer.onlineexamid='$eid'";
	  $res=mysqli_query($con,$str);
	  if($res)
	  {
	  ?>
      
    </p>
    <table width="400" border="1" cellspacing="1" cellpadding="20">
      <tr>
        <th scope="col">Qn No </th>
        <th scope="col">Category</th>
        <th scope="col">Question</th>
        <th scope="col">A</th>
        <th scope="col">B</th>
        <th scope="col">C</th>
        <th scope="col">D</th>
        <th scope="col">Answer</th>
        <th scope="col"> Mark</th>
        <th scope="col">Time duration </th>
        <th scope="col">Correct answer </th>
        <th scope="col">Mark attained </th>
      </tr>
	   <?php
	  $i=1;
	  while($res1=mysqli_fetch_array($res))
	  {
	  ?>
	 
       <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $res1['category'] ?></td>
		<td><?php echo $res1['questions'] ?></td>
        <td><?php echo $res1['op_a'] ?></td>
        <td><?php echo $res1['op_b'] ?></td>
        <td><?php echo $res1['op_c'] ?></td>
        <td><?php echo $res1['op_d'] ?></td>
        <td><?php $ans=$res1[14];
			if($ans=="a")
			{ echo $res1['op_a']; }
			elseif($ans=="b")
			{ echo $res1['op_b']; }
			elseif($ans=="c")
			{ echo $res1['op_c']; }
			else 
			{ echo $res1['op_d']; }
		 	?></td>
        <td><?php echo $res1[9] ?></td>
        <td><?php echo $res1['time_duration'] ?></td>
        <td><?php  $ans=$res1[8];
			if($ans=="a")
			{ echo $res1['op_a']; }
			elseif($ans=="b")
			{ echo $res1['op_b']; }
			elseif($ans=="c")
			{ echo $res1['op_c']; }
			else 
			{ echo $res1['op_d']; }
		 	?> </td>
        <td><?php echo $res1[15] ?></td>
      </tr>
	   <?php
	  }
	  }else{ ?> <h2 align="center">No Data</h2> <?php }
	  
	  ?>
    </table>
  </div>
	</div>
  </div>
</form>
</body>
</html>

<?php include "footer.html" ?>