<?php $con=mysqli_connect("localhost","root","","online_examination"); 
session_start();
include("company_menu_form.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>


<script type="text/javascript">
function valid()
{
	if(document.getElementById("pst").value=="")
	{
		alert("Enter post!");
		document.getElementById("pst").focus();
    	return false;
 	}
	

	if(document.getElementById("mn").value=="")
   	{
     	alert("Enter number of vacancies!");
     	document.getElementById("mn").focus();
     	return false;
 	}
	if(/[^0-9]/gi.test(document.getElementById("mn").value))
	{
		alert("Special characters not allowed in number of vacancies");
		document.getElementById("mn").focus();
		return false;
	}
	
	
	if(document.getElementById("quali").value=="")
	{
		alert("Enter qualification!");
		document.getElementById("quali").focus();
    	return false;
 	}
	if(/[^a-z ]/gi.test(document.getElementById("quali").value))
	{
		alert("Special characters not allowed in this field");
		document.getElementById("quali").focus();
		return false;
	}
	if(document.getElementById("bp").value=="")
   	{
     	alert("Enter basic pay!");
     	document.getElementById("bp").focus();
     	return false;
 	}
	if(/[^0-9]/gi.test(document.getElementById("bp").value))
	{
		alert("Special characters not allowed in basic pay");
		document.getElementById("bp").focus();
		return false;
	}
	if(document.getElementById("file").value=="")
	{
		alert("Please upload file!");
		document.getElementById("file").focus();
    	return false;
 	}
	
	if(document.getElementById("date").value=="")
	{
		alert("Enter date!");
		document.getElementById("date").focus();
    	return false;
 	}
	
	return (true);
}

	</script>
<link href="css/styleform.css" rel="stylesheet" type="text/css" />
</head>
<?php
$idd=$_GET['id'];
$str="select * from vacancies where vid='$idd'";


$res=mysqli_query($con,$str);
if($res1=mysqli_fetch_array($res))
{
?>
<body>
<center><font color="#003300"></font>
<h1><font color="#003300">Add Vacancy</font></h1>
 <div  class="grid">
		<div class="shadowundertop">
		</div>
		<div class="row">
		<div class="vuzz-pricing-content">
<form action="" method="post" enctype="multipart/form-data" name="login" id="login">
  <table width="528" height="194" border="0" type="box" cellpadding="15" cellspacing="10">
    <tr>
      <td width="178">Post : </td>
      <td width="260"><label>
        <input type="text" name="post" value="<?php echo $res1['post']?>" id="pst" />
      </label></td>
    </tr>
    <tr>
      <td>Number of vacancies  : </td>
      <td><label>
        <input type="text" name="nov" id="mn" value="<?php echo $res1[2]?>" />
      </label></td>
    </tr>
	 <tr>
      <td>Qualification : </td>
      <td><label>
        <input type="text" name="qual" value="<?php echo $res1[3]?>" id="quali"/>
      </label></td>
    </tr>
	 <tr>
	   <td>Basic Pay: </td>
	   <td><input type="text" name="bp" value="<?php echo $res1['basic_pay']?>" id="bp"/></td>
      </tr>
	 <tr>
	   <td>Upload File:</td>
	   <td><input type="file" name="file" id="file" value="<?php echo $res1['file']?>" /></td>
      </tr>
	 <tr>
	   <td> Last Date :</td>
	   <td><input type="date" name="date" value="<?php echo $res1['vdate']?>" id="date" /></td>
      </tr>
  <tr>
      <td></td>
      <td><label>
        <input type="submit" class="button" name="Submit" value="   submit   " onclick="return valid();"/>
      </label></td>
    </tr>
	<?php } ?>
	</table>
	</div>
	</div>
  <label></label>
</form>
</center>
</body>
</html>

<?php
if(isset($_POST['Submit']))
{
	$post=$_POST['post'];
	$nov=$_POST['nov'];
	$qual=$_POST['qual'];
	$date=$_POST['date'];
	$bp=$_POST['bp'];
	$file=$_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'],"files/".$file);
	//echo "$post, $nov,$qual,$bp,$file";

	$a="update vacancies set post='$post',no_vacancies='$nov',qualification='$qual',vdate='$date',basic_pay='$bp',file='$file' where vid='$idd';";
	//echo $a;
	$i=mysqli_query($con,$a);
	if($i)
	{
	?>
	<script>
	alert("Do you want to continue ?");
	window.location="view_vacancies_cmpny.php";
	</script>
	<?php
	}
if($i)
	{
	?>
	<script>
	alert("Do you want to continue ?");
	window.location="view_vacancies_cmpny.php";
	</script>
	<?php
	}
}
include("footer.html");
?>