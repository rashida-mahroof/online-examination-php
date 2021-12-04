<?php
session_start();
include("Student_Home.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <font color="#003300">
  <h1 align="center">Exam Login</h1>
  </font>
  <table width="448" height="194" align="center" cellpadding="15" cellspacing="1" type="box">
    <tr>
      <td>Email Id : </td>
      <td><label>
        <input type="text" name="username" />
      </label></td>
    </tr>
    <tr>
      <td>Password : </td>
      <td><label>
        <input type="password" name="password" />
      </label></td>
    </tr>
    <tr>
      <td></td>
      <td><label>
        <input type="submit" name="Submit" value="   Login   " />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","online_examination");
if(isset($_POST['Submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$a=mysqli_query($con,"select selected_students.* from selected_students,login where login.logid=selected_students.s_logid and login.user_name='$username' and selected_students.temp_pass='$password'");
	if(mysqli_num_rows($a)>0)
	{
		$b=mysqli_fetch_array($a);
		$lid=$b[0];
		$vid=$b['vid'];
		$stulogid=$b['s_logid'];
		
		
		$_SESSION['sflag']=0;
		$_SESSION['sqcount']=1;
		$_SESSION['studid']=$lid;
		$_SESSION['vid']=$vid;
		$_SESSION['s_logid']=$stulogid;
		
		$qscount=mysqli_query($con,"select count(*) from vacancy_questions where vid='$vid'");
		$qscount1=mysqli_fetch_array($qscount);
		$qcount=$qscount1[0];
		$_SESSION['qcount']=$qcount;
		
		header("location:profile_view.php");

	}else
	{
		echo "no data";
	}
	
}
?>
<?php include("footer.html"); ?>