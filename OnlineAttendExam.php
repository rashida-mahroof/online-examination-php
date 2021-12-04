<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php


include("student menu.php"); 

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
header("location:OnlineResultView.php");
}
else 
{



?>
</head>

<body>
<div class="grid">
<form id="form1" name="form1" method="post" action="">
  <h1 align="center">Attend Exam  </h1>
  <?php
  $qry="select questions.* from questions,vacancy_questions where questions.qid=vacancy_questions.qid and vacancy_questions.vid='$vid' and questions.qid>'$flag' order by qid";
		$result=mysqli_query($con,$qry);
	
     if($r=mysqli_fetch_array($result))
	 {
	
	
	$_SESSION['sflag']=$r[0];
	?>
  <meta http-equiv="refresh" content="<?php echo $r['time_duration']?>;URL='<?php echo $page?>'">

<p>Time Remaining  : <span id="counter"> <?php echo $r['time_duration']?> </span> second(s).</p>
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
      <td><font color="#CC00CC" ><?php echo $r['questions']?> </font>     </td>
    </tr>
    <tr>
      <td><p>Answers :</p>
          a
          <input name="radiobutton" type="radio" value="a" />
        <?php echo $r['op_a']?></td>
      <td><p>&nbsp;</p>
      <p>
        
        b
          <input name="radiobutton" type="radio" value="b" />
        <?php echo $r['op_b']?></p></td>
    </tr>
    <tr>
      <td> c
        <input name="radiobutton" type="radio" value="c" />        <?php echo $r['op_c']?></td>
      <td> d
        <input name="radiobutton" type="radio" value="d" />        <?php echo $r['op_d']?></td>
    </tr>
    <tr>
      <td><input type="hidden" name="answer" value="<?php echo $r['answer']?>" />
      <input type="hidden" name="mark" value="<?php echo $r['mark']?>" />
      <input type="hidden" name="qd" value="<?php echo $r['qid']?>" />
      <input type="submit" name="Submit2" value="SKIP" /></td>
      <td><input type="submit" name="Submit" value="   NEXT   " />      </td>
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
	// $lid=$_POST['s_logid'];
	 $qd=$_POST["qd"];
	 $exid=$_SESSION['onlineid'];
	 
	 if($choosedopt==$ans)
        {
    		$qry2="insert into answer(onlineexamid,qid,answer,mark)values('$exid','$qd','$choosedopt','$mark')";
	/*		echo $qry2;  */
			mysqli_query($con,$qry2);
         }
	else
        {
		$qry3="insert into answer(onlineexamid,qid,answer,mark) values('$exid','$qd','$choosedopt',0)";
		mysqli_query($con,$qry3);
	/*	echo $qry3;  */
		 }
     if($qcount>$qscount)
	{
	
		header("location:OnlineResultView.php");
	}
      }
	  
?>
</div>
<?php include("footer.html"); ?>
