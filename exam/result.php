
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
session_start();
$logid=$_SESSION['slogid'];
$con=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($con,"onlineexam");
	

$qry="select count(mark) from exam where logid='$logid' and mark=1";
$result=mysqli_query($con,$qry);
  if($r=mysqli_fetch_array($result))
	{
	echo "Correct Answers =".$r[0]."<br>";
	}
	
	$qry2="select count(mark) from exam where logid='$logid' and mark=0";
$result2=mysqli_query($con,$qry2);
  if($r2=mysqli_fetch_array($result2))
	{
	echo "Wrong answers=".$r2[0]."<br>";
	}
	

$qry3="select exam.examid,questions.quest,questions.ans,exam.selectedopt,exam.mark from exam,questions where exam.quid=questions.quid and exam.logid='$logid'";
$result3=mysqli_query($con,$qry3);

?>

<body>
<form id="form1" name="form1" method="post" action="">
  <div align="right"><a href="login.php">Logout</a>
  </div>
</form>



<form id="form2" name="form2" method="post" action="">
<div align="center">
<table align="center" border="1">

<tr><td><font color="#0033FF"><i>Question Number</i></font>	</td><td><font color="#0033FF"><i>Qusetion</i></font></td><td><font color="#0033FF"><i>Correct Answer</i></font></td><td><font color="#0033FF"><i>Choosed Option</i></font> </td><td><font color="#0033FF"><i>Mark</i></font></td></tr>

<?php
 while($r3=mysqli_fetch_array($result3))
	{
	/*	$ansid=$r3[2];
	$questid=$r3[0];
	$qry4="select '$ansid' from question where quid='$questid'";	
	$result4=mysqli_query($con,$qry4);
	
	while($r4=mysqli_fetch_array($result4))
	{
		
	
	
	
	/*
	

	
	echo $r3[2]."<br>";
	echo $r3[0]."<br>";

 while()
 {
 */
?>
<tr><td> <a href="view qusetionsbyuser.php?id=<?php echo $r3[0] ?>"> <?php echo $r3[0]?> </a></td><td><?php echo $r3[1]?></td><td><?php echo $r3[2]?></td><td><?php echo $r3[3]?></td><td><?php echo $r3[4]?></td>
<td><a href="view qusetionsbyuser.php?id=<?php echo $r3[0] ?>">View</a></td>
</tr>

<?php

}
/*
}
*/
?>
</table>
</div>
</form>
</body>
</html>








