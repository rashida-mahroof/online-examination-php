<?php
session_start();
include("student menu.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script type="text/javascript">
function valid()
{
	if(document.getElementById("user").value=="")
	{
		alert("Enter User Name!");
		document.getElementById("user").focus();
    	return false;
 	}
	if(document.getElementById("pwd").value=="")
	{
		alert("Enter your exam password");
		document.getElementById("pwd").focus();
		return false;
	}
	return true;
}
</script> 

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div class="grid">
<form id="form1" name="form1" method="post" action="">
  <font color="#003300">
  <h1 align="center">Exam Login</h1>
  </font>
  <table width="448" height="194" align="center" cellpadding="15" cellspacing="1" type="box">
    <tr>
      <td>Email Id : </td>
      <td><label>
        <input type="text" id="user" name="username" />
      </label></td>
    </tr>
    <tr>
      <td>Password : </td>
      <td><label>
        <input type="password" id="pwd" name="password" />
      </label></td>
    </tr>
    <tr>
      <td></td>
      <td><label>
        <input type="submit" name="Submit" value="   Login   " onclick="return valid();" />
      </label></td>
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
	$username=$_POST['username'];
	$password=$_POST['password'];
	$a=mysqli_query($con,"select exam.*,selected_students.* from selected_students,login,exam where login.logid=selected_students.s_logid and login.user_name='$username' and selected_students.temp_pass='$password' and exam.examid=selected_students.examid");
	if(mysqli_num_rows($a)>0)
	{
		$b=mysqli_fetch_array($a);
		$examid=$b[0];
		$vid=$b[1];
		$stulogid=$b['s_logid'];
		$studid=$b['studid'];
		
		
		$_SESSION['sflag']=0;
		$_SESSION['sqcount']=1;
		$_SESSION['examid']=$examid;
		$_SESSION['studid']=$studid;
		$_SESSION['vid']=$vid;
		$_SESSION['s_logid']=$stulogid;
		
		$qscount=mysqli_query($con,"select count(*) from vacancy_questions where vid='$vid'");
		$qscount1=mysqli_fetch_array($qscount);
		$qcount=$qscount1[0];
		$_SESSION['qcount']=$qcount;
		mysqli_query($con,"insert into student_list(examid,studid,status,percentage) values('$examid','$stulogid','Start','0')");
		$onlineid=mysqli_insert_id($con);
		$_SESSION['onlineid']=$onlineid;
		echo $qcount,$vid;
		header("location:profile_view.php");

	}else
	{
		echo "no data";
	}
	
}
?>
<?php //include("footer.html"); ?>