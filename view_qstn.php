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
<div align="center">
<div class="grid">
  <form id="form1" name="form1" method="post" action="">
    <h1>View Questions</h1>
	
  <div style="width:180"> <strong>Select Category </strong><select name="category" id="category">
            <option value="-1">Select</option>
            <option value="GK">GK</option>
            <option value="Computer">Computer</option>
            <option value="English">English</option>
            <option value="Maths">Maths</option>
            <option value="Other">Other</option>
        </select><input type="submit" name="Submit" value="Submit"  onclick="return valid1();">
	<?php
	  if(isset($_POST['Submit']))
	  {
	  $category=$_POST['category'];
	  $str="select * from questions where c_logid='$lid' and category='$category'";
	  $res=mysqli_query($con,$str);
	  if($res)
	  {
	  ?>
    <p>&nbsp;</p>
	</div>
    <table width="886" border="1" cellspacing="2" cellpadding="20">
      <tr>
        <th width="38"><strong>SI No </strong></td>
        <th width="206"><strong>Question</strong></td>
        <th width="22"><strong>A</strong></td>
        <th width="28"><strong>B</strong></td>
        <th width="23"><strong>C</strong></td>
        <th width="17"><strong>D</strong></td>
        <th width="50"><strong>Answer</strong></td>
        <th width="43"><strong>Mark</strong></td>
        <th width="59"><strong>Duration</strong></td>
        <th width="59">Edit        
        
        <th width="59">Delete        
      </tr>
	  
	  <?php
	  $i=1;
	  while($res1=mysqli_fetch_array($res))
	  {
	  ?>
      <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $res1['questions'] ?></td>
        <td><?php echo $res1['op_a'] ?></td>
        <td><?php echo $res1['op_b'] ?></td>
        <td><?php echo $res1['op_c'] ?></td>
        <td><?php echo $res1['op_d'] ?></td>
        <td><?php $ans=$res1['answer'];
			if($ans=="a")
			{ echo $res1['op_a']; }
			elseif($ans=="b")
			{ echo $res1['op_b']; }
			elseif($ans=="c")
			{ echo $res1['op_c']; }
			else 
			{ echo $res1['op_d']; }
		 	?></td>
        <td><?php echo $res1['mark'] ?></td>
        <td><?php echo $res1['time_duration'] ?></td>
        <td><a href="editqstn.php?id=<?php echo $res1[0] ?>"><span class="shadowundertop"><img src="Edit_35px.png" alt="edit" width="35" height="35" /></span></a></td>
        <td><a href="deleteqstn.php?id=<?php echo $res1[0] ?>"><img src="Delete_35px.png" alt="delete" width="35" height="35" /></a></td>
      </tr>
	  <?php
	  }
	  }else{ ?> <h2 align="center">No Data</h2> <?php }
	  }
	  ?>
    </table>
    <p></p>
  </form>
  <p>&nbsp; </p>
</div>
</div>
</body>
</html>
<?php include("footer.html"); ?>

