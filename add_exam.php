<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
$cid=$_GET['id'];
include("company_menu.php");
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript">
function valid()
{
if(document.getElementById("vacancy").value=="-1")
	{
		alert("Select vacancy!");
		document.getElementById("vacancy").focus();
    	return false;
	}
		if(document.getElementById("date").value=="")
	{
		alert("Enter date!");
		document.getElementById("date").focus();
    	return false;
 	}
	
	//return true;
}
</script>
</head>

<body>
<div class="grid">
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <h1>Add Exam
    </h1>
  </div>
  <table width="400" border="0" align="center" cellpadding="20" cellspacing="10">
    <tr>
      <td>Vacancy</td>
      <td><select name="vacancy" id="vacancy">
        <option value="-1">Select</option>
		<?php
		$str="select * from vacancies where clogid='$lid'";
		$res=mysqli_query($con,$str);
	
		while($res1=mysqli_fetch_array($res))
		{
		?>
            <option value="<?php echo $res1[0] ?>"><?php echo $res1[1] ?></option><?php }?>
		
            </select></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><input type="date" name="date" id="date" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit" onclick="return valid();" /></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","online_examination");
if(isset($_POST['Submit']))
{
	$vacancy=$_POST['vacancy'];
	$date=$_POST['date'];
	$str="insert into exam(vid,date,clid)values('$vacancy','$date','$cid')";
	$res=mysqli_query($con,$str);
	if($res>0)
	{
	?>
	<script>alert("Do You want to continue ? ")</script>
	<?php	
	}
}
?>
<?php include("footer.html"); ?>