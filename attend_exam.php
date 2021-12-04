<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php

$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$qscount=$_SESSION['qcount'];
$vid=$_SESSION['vid'];

$page = $_SERVER['PHP_SELF'];

$sec = "10";


$flag=$_SESSION['sflag'];




$qcount=$_SESSION['sqcount'];


$_SESSION['sqcount']=$qcount+1;

if($qcount>$qscount)
{
header("location:view_my_result.php");
}
else 
{



?>
<style type="text/css">
#form1 table tr td {
	font-family: Lucida Sans Unicode, Lucida Grande, sans-serif;
}
#form1 table tr td {
	font-family: Arial, Helvetica, sans-serif;
}
#form1 table tr td {
	font-family: Verdana, Geneva, sans-serif;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  
  <?php
  $qry="select questions.* from questions,vacancy_questions where questions.qid=vacancy_questions.qid and vacancy_questions.vid='$vid' and questions.qid>'$flag'";
		$result=mysqli_query($con,$qry);
	
     if($r=mysqli_fetch_array($result))
	 {
	
	
	$_SESSION['sflag']=$r[0];
	?>
  <meta http-equiv="refresh" content="<?php echo $r['time_duration']?>;URL='<?php echo $page?>'">

<p>Time Remaining  : <span id="counter"><font color="#FF0000"> <?php echo $r['time_duration']?> </span> second(s).</p></font>
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

  <table width="685" border="0" align="center" cellpadding="20" cellspacing="10">
    <tr>
      <td width="280">Question No : </td>
      <td width="295"><?php echo $qcount; ?></td>
    </tr>
    <tr>
      <td>Question : </td>
      <td><em><font color="#CC00CC" ><?php echo $r['questions']?> </font> </em></td>
    </tr>
    <tr>
      <td colspan="2">Answers :</td>
    </tr>
    <tr>
<font color="#43D892" >		      <td><p >
        
        <input name="radiobutton" type="radio" value="a" />
        a
        <?php echo $r['op_a']?></p></td>
      <td><p>
        
        <input name="radiobutton" type="radio" value="b" />
        b
      <?php echo $r['op_b']?>
      </p></td>
    </tr>
    <tr>
      <td>
        <input name="radiobutton" type="radio" value="c" />
        c <?php echo $r['op_c']?></td>
      <td>
        <input name="radiobutton" type="radio" value="d" />
	        d <?php echo $r['op_d']?></td>
            </font>
    </tr>
    <tr>
      <td><input type="hidden" name="answer" value="<?php echo $r['answer']?>" />
      <input type="hidden" name="mark" value="<?php echo $r['mark']?>" />
      <input type="hidden" name="qd" value="<?php echo $r['qid']?>" />
      <input type="submit" name="Submit2" value="Skip" /></td>
      <td><input type="submit" name="Submit" value="   Next   " />      </td>
    </tr>
  </table>
  <?php 
  }
  }
  ?>
</form>
</body>
</html>

<?php
if(isset($_POST['Submit2']))
{
  ?>
  <meta http-equiv="refresh" content="<?php echo $r['time_duration']?>;URL='<?php echo $page?>'">
  <?php
}


if(isset($_POST['Submit']))
{
	 $choosedopt=$_POST["radiobutton"];
	 $ans=$_POST["answer"];
	 $mark=$_POST["mark"];
	 $lid=$_POST['s_logid'];
	 $qd=$_POST["qd"];
	 $exid=$_SESSION['studid'];
	 
	 if($choosedopt==$ans)
        {
    		$qry2="insert into answer(onlineexamid,qid,s_logid,answer,mark)values('$exid','$qd','$lid','$choosedopt','$mark')";
	/*		echo $qry2;  */
			mysqli_query($con,$qry2);
         }
	else
        {
		$qry3="insert into answer(onlineexamid,qid,s_logid,answer,mark) values('$exid','$qd','$lid','$choosedopt',0)";
		mysqli_query($con,$qry3);
	/*	echo $qry3;  */
		 }
     if($qcount>$qscount)
	{
	
		header("location:view_my_result.php");
	}
      }
	  
?>
