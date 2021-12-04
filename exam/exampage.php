
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
$page = $_SERVER['PHP_SELF'];

$sec = "10";
?>



<?php 
	session_start();
$flag=$_SESSION['sflag'];

$logid=$_SESSION['slogid'];


$qcount=$_SESSION['sqcount'];
echo "Question No : ".$qcount;

$_SESSION['sqcount']=$qcount+1;

if($qcount>11)
{
header("location:view_my_result.php");
}
else 
{


?>
<head>

<title>Untitled Document</title>
</head>

<body>

 

<form id="form1" name="form1" method="post" action="">
<div align="center">
<table align="center" border="1">
  <?php
	$con=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($con,"onlineexam");
	

	$qry="select*from questions where quid>'$flag'";
		$result=mysqli_query($con,$qry);
	
     if($r=mysqli_fetch_array($result))
	{
	
	
	$_SESSION['sflag']=$r[0];
	?>


<meta http-equiv="refresh" content="<?php echo $r[7]?>;URL='<?php echo $page?>'">

<p>Time Remaining  : <span id="counter"> <?php echo $r[7]?> </span> second(s).</p>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'login.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>



<tr><td colspan="4"><font color="#CC00CC" ><?php echo $r[1]?> </font></td>

<input type="hidden" name="qd" value="<?php echo $r[0] ?>"/>
</tr>
<tr><td><p><font color="#0000FF" >Option 1 :</font>
  <label>
  <input name="radiobutton" type="radio" value="opt1" />
  </label>
</p>
  <p><?php echo $r[2]?>  </p></td>
  <td><p><font color="#0000FF" >Option 2 :</font>
    <label>
    <input name="radiobutton" type="radio" value="opt2" />
    </label>
  </p>
    <p><?php echo $r[3]?></p></td>
  <td><p><font color="#0000FF" >Option 3 :</font>
    <label>
    <input name="radiobutton" type="radio" value="opt3" />
    </label>
  </p>
    <p><?php echo $r[4]?></p></td>
  <td ><p><font color="#0000FF" >Option 4 :
    <label>
    <input name="radiobutton" type="radio" value="opt4" />
    </label>
  </font></p>
    <p><?php echo $r[5]?></p></td></tr>
    
  <tr><td colspan="3" align="center">
   <label></label>
   <label></label>
    <div align="left">
      <input type="submit" name="Submit2" value="Skip" />
      <label></label>
    </div>
    </label></td>
    <td align="center"><input type="submit" name="Submit" value="Submit"/></td>
  </tr>
  <tr>
    <td colspan="4"><label>
      <input type="hidden" name="ans" value="<?php echo $r[6]?>" />
    </label></td>
  </tr>
  <?php
  

}	
}


?>
</table>
<label></label>
</div>
</form>
</body>
</html>
<?php

if(isset($_POST['Submit2']))
{
  ?>
  <meta http-equiv="refresh" content="<?php echo $r[7]?>;URL='<?php echo $page?>'">
  <?php
}

if(isset($_POST['Submit']))
   {
     $choosedopt=$_POST["radiobutton"];
	 $ans=$_POST["ans"];

	$qd=$_POST["qd"];
     if($choosedopt==$ans)
        {
    		$qry2="insert into exam(logid,quid,selectedopt,mark)values('$logid','$qd','$choosedopt',1)";
	/*		echo $qry2;  */
			mysqli_query($con,$qry2);
         }
	else
        {
		$qry3="insert into exam(logid,quid,selectedopt,mark)values('$logid','$qd','$choosedopt',0)";
		mysqli_query($con,$qry3);
	/*	echo $qry3;  */
		 }
     if($qcount>=11)
	{
	
		header("location:view_my_result.php");
	}
      }
		?>
