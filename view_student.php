<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
?>
<?php include("college_menu.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>


<script language="javascript" type="text/javascript">
function valid()
	{
		if(document.getElementById("dpt").value=="-1")
		{
			alert("Select Department!");
			document.getElementById("dpt").focus();
			return false;
		}
		if(document.getElementById("sem").value=="-1")
		{
			alert("Select Semester!");
			document.getElementById("sem").focus();
			return false;
		}
		return true;
	}	
</script>
<body>
<div class="grid">

<form id="form1" name="form1" method="post" action="">
<h1 align="center">View Students</h1>


 
    <div style="width:180" align="center"> Department : <select name="department" id="dpt" style="width:180">
        <option value="-1">Select</option>
		<?php
		$str="select * from department where c_logid='$lid'";
		$res=mysqli_query($con,$str);
	
		while($res1=mysqli_fetch_array($res))
		{
		?>
            <option value="<?php echo $res1[0] ?>"><?php echo $res1[1] ?></option><?php }?>
      </select>Semester : <select name="sem" id="sem">
        <option value="-1">Select</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select><input type="submit" name="Submit1" value="Submit" onclick="return valid();" />
  </div>
		<?php
		 if(isset($_POST['Submit1']))
		{
			$department=$_POST['department'];
			$sem=$_POST['sem'];
			
				  $str="select * from students where d_id='$department' and semester='$sem'";
			$res=mysqli_query($con,$str);
			if(mysqli_num_rows($res)>0)
			{
		?>
	<p>&nbsp;</p>
	
      <td  colspan="2"><table width="400" border="1" align="center" cellpadding="10" cellspacing="2">
        <tr>
          <th><strong> SI No</strong></td>
          <th><strong>Name</strong></td>
          <th><strong>Photo</strong></td>
		  <th></th>
        </tr>
		  
	<?php
	$i=1;
	while($res1=mysqli_fetch_array($res))
	{
		  ?>
        <tr>
		  <td><?php echo $i ?></td> 
          <td><?php echo $res1[1] ?> <?php echo $res1[2] ?></td>
		  <td><img src="pics/<?php echo $res1[13]?>" width="100" height="50"/></td>
		  <td><a href="student_profile_college.php?id=<?php echo $res1[0]?>">Profile</a>        </tr>
		  <?php $i++ ?>
		  <?php } } } ?>
    
  </table>
 
</form>
</div>
</div>
</div>
</div>
</body>
</html>
<?php include("footer.html"); ?>