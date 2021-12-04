
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
<script type="text/javascript">
function valid1()
{
if(document.getElementById("category").value=="-1")
	{
		alert("Select category!");
		document.getElementById("category").focus();
    	return false;
	}
	//return true;
}
function valid2()
{
if(document.getElementById("post").value=="-1")
	{
		alert("Select post!");
		document.getElementById("post").focus();
    	return false;
	}
	//return true;
	
}
</script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="grid">
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <h1>Assign Questions
    </h1>
  </div>
  
  <p>&nbsp;</p>
  <div align="center">
  <div style="width:180px" ><strong>Select Category </strong>
    <select name="category" class="neutralbutton" id="category">
        <option value="-1">Select</option>
        <option value="GK">GK</option>
        <option value="Computer">Computer</option>
        <option value="English">English</option>
        <option value="Maths">Maths</option>
        <option value="Other">Other</option>
        <option value="C">C</option>
        <option value="Java">Java</option>
      </select>
    </div>
	  <br />
      <input name="Submit" type="submit"   onclick="return valid1();" value="Submit"  />
  <br />
  <br />
 
	 <?php
	
	 if(isset($_POST['Submit']))
	{
		
		$cat=$_POST['category'];
		$str="select * from questions where category='$cat' and c_logid='$lid'";
		$res=mysqli_query($con,$str);
		?>
		 <table width="433" border="1" align="center" cellpadding="20" cellspacing="1">
    <tr>
      <th width="180"><strong>Question</strong></td>
      <th width="143"><strong>Selection</strong></td>
    </tr>
  <tr>
		<?php
		//echo $res;
		while($res1=mysqli_fetch_array($res))
	{
		  ?>
      
		
          <td><?php echo $res1[3] ?></td>
          <td><input type="checkbox" width="10" name="qsn[]" value="<?php echo $res1[0] ?>" /></td>
    </tr><?php } } ?>
  </table>

  <p>&nbsp;</p>
 <div style="width:180px"> <strong>Post</strong><select name="post" class="neutralbutton" id="post">
	  <option value="-1">Select</option>
        <?php
		$a="select * from vacancies where clogid='$lid'";
		$res=mysqli_query($con,$a);
		while($res1=mysqli_fetch_array($res))
		{
		?>
			<option value="<?php echo $res1[0] ?>"><?php echo $res1[1] ?></option>
		<?php } ?>
      </select>
     <input type="submit" name="Submit2" value="Submit"  onclick="return valid2();"/>
  <p align="center">&nbsp;</p>
</form>
</div>
</div>
</div>
</div>
</body>
</html>

<?php
$flag=0;
$con=mysqli_connect("localhost","root","","online_examination");
if(isset($_POST['Submit2']))
{
$flag=1;
	$question=$_POST['qsn'];
	
	$post=$_POST['post'];
	//echo "$question,$post,$cat";
	foreach($question as $q)
	{
		$str="insert into vacancy_questions(vid,qid)values('$post','$q')";
	$res=mysqli_query($con,$str);
	
	
	
	}
	
}
if($flag==1)
{
?>
<script>alert("successfully inserted");</script><?php } ?>
<?php include("footer.html"); ?>
