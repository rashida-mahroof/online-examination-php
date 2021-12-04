<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
$type=$_SESSION['type'];
?>
<?php
if($type=="college")
{
	 include("college_menu.php");
}else
{
 include("company_menu.php"); 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript">
function valid()
{
	if(document.getElementById("clg").value=="")
	{
		alert("Select college!");
		document.getElementById("clg").focus();
    	return false;
 	}

	
	if(document.getElementById("post").value=="")
	{
		alert("select post!");
		document.getElementById("post").focus();
    	return false;
 	}
	return true;
}
</script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<center>
<div class="grid">
<div class="form">

  <form id="form1" name="form1" method="post" class="form" action="">
    <h1>Selected Students    </h1>
     <p>Select College : 
      <select name="college" id="clg">
        <option value="-1">Select</option>
		<?php
		if($type=="company")
		{
		$str="select colleges.* from colleges,requests where requests.colid=colleges.logid and requests.c_logid=$lid and requests.status='Accepted'";
		$str1="select * from vacancies where clogid='$lid'";
		
		}else{
		$str="select * from colleges where logid='$lid'";
		$str1="select vacancies.* from vacancies, requests where colid='$lid' and requests.c_logid=vacancies.clogid and requests.status='Accepted'";
		}
		$res=mysqli_query($con,$str);
	
		while($res1=mysqli_fetch_array($res))
		{
		?>
            <option value="<?php echo $res1['logid'] ?>"><?php echo $res1[1] ?></option><?php }?>
      </select>
    </p>
    <p>Post : 
	
      <select name="post" id="post">
	  <option value="-1">Select</option>
	 <?php
	  $q=mysqli_query($con,$str1);
	  while($qu=mysqli_fetch_array($q))
	  {
	
	  ?>
	  <option value="<?php echo $qu['vid'] ?>"><?php echo $qu['post'] ?></option><?php } ?>
      </select>
    </p>
    <p>
      <input type="submit" name="Submit" value="Submit" onclick="return valid();" />
    </p>
	</div>
	<?php
	if(isset($_POST['Submit']))
{
	$clg=$_POST['college'];
	$post=$_POST['post'];
	
	if($type=="company")
		{
		$str1="select students.*,department.*,vacancies.* from students,department,selected_students,vacancies,exam where department.d_id=students.d_id and students.logid=selected_students.s_logid and department.c_logid='$clg' and selected_students.examid=vacancies.vid and vacancies.clogid='$lid' and temp_pass='No data' and exam.examid=selected_students.examid and exam.vid='$post'";
		}else{
		$str1="select students.*,department.*,vacancies.* from students,department,selected_students,vacancies where department.d_id=students.d_id and students.logid=selected_students.s_logid and department.c_logid='$clg' and selected_students.examid=vacancies.vid and vacancies.clogid='$lid' and temp_pass='No data'";
		}
		//echo $str1;
	$res=mysqli_query($con,$str1);
	if(mysqli_num_rows($res)>0)
	{
	?>
    <input type="hidden" value="<?php echo $clg ?>" name="col" />
    <table width="900" height="151" border="1" cellpadding="5">
    <tr>
      <th width="46">SI No </th>
      <th width="161">Student Name</th>
      <th width="153">Vacancy</th>
      <th width="143">Department</th>
      <th width="206">Email</th>
      <th width="103">Photo</th>
    </tr>
   
      
	<?php

	$i=1;
	while($res1=mysqli_fetch_array($res))
	{
	?>
	 <tr>
	  <td height="112"><?php echo $i++; ?><input name="slogid[]" type="hidden" value="<?php echo $res1['logid'] ?>" /></td>
	  <td><?php echo $res1[1] ?> <?php echo $res1[2] ?></td>
      <td><?php echo $res1['post'] ?><input name="vid" type="hidden" value="<?php echo $post ?>" /></td>
      <td><?php echo $res1['d_name'] ?></td>
      <td><?php echo $res1['email'] ?>
        <input type="hidden" name="email" value="<?php echo $res1['email'] ?>" /></td>
      <td><input type="image" height="100" width="75" src="pics/<?php echo $res1['Photo'] ?>"/></td>
	  </tr>
	<?php
	}
?>
  
  </table>
  <?php
  
  if($type=="company")
  {
  ?>
    <p>
      <input type="submit" name="Submit2" value="Generate Password" />
    </p>
	<?php }
	} else {?>
	<h2 align="center">No Data...</h2>
	<?php } } ?>
  </form>
</center>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['Submit2']))
{
$sid=$_POST['slogid'];
$vid=$_POST['vid'];
echo "lll".$vid;
$col=$_POST['col'];

$q=sizeof($sid);
echo $q;

for($i=0;$i<sizeof($sid);$i++)
{
$pwd="";
for($j=0;$j<7;$j++)
{
	$a=rand(0,9);
	$pwd.=$a;
	}
	//echo $pwd;
	if($pwd!="")
	{
		//echo "password is" .$pwd;
		$con=mysqli_connect("localhost","root","","online_examination");
	//mysqli_query($con,"update selected_students set temp_pass='$pwd' where s_logid='$sid[$i]' and examid='$vid[$i]' and temp_pass='No data'");
	$s="update selected_students set temp_pass='$pwd' where s_logid='$sid[$i]' and temp_pass='No data' and selected_students.examid=(select examid from exam where vid='$vid' and clid='$col');";
	//echo $s;
	$d=mysqli_query($con,$s) or die(mysqli_error($con));
	
	$email=$_POST['email'];
	$_SESSION['pwd']=$pwd;
	if($d>0)
	
	try{
	$dat=date("Y-m-d");
	
	$sub="Your Password";
	$details="Your  Password is.. ";
	
	$details.=$pwd;
	 require("class.phpmailer.php");

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->Username = "onlineexamssm@gmail.com";  // SMTP username gmail username
$mail->Password = "exam1234"; // SMTP password   gmail password


$mail->From = "TestMail"; // from email address
$mail->FromName = "onlineexamssm@gmail.com"; //from name
 
//$mail->AddAddress($email1);
//if(!empty($email2)){
    //$mail->AddAddress($email2);
//}
//$mail->AddAddress("haneefapkv@gmail.com");  
$mail->AddAddress($email);                   // to address 
//$mail->AddReplyTo($email);
//$mail->AddReplyTo("$remail2");

//$mail->WordWrap = 50;                                 // set word wrap to 50 characters
//$mail->AddAttachment("resume/$resume");         // add attachments
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = $sub;
$mail->Body    = $details;
$mail->AltBody = "";

if(!$mail->Send())
{
	
   ?>
    <script type="text/javascript">
	alert("mail not  send");
//	window.location="eNotification.php";
	</script>
   
   <?php
}
else
{
	echo ' send';
	?>
    <script type="text/javascript">
	alert("mail send succesfully ");
	//window.location="eNotification.php";
	</script>
   
   <?php
}
	}catch (Exception $e)
	
{
	echo $e;
}
	
	{ ?>
	<script>alert("Password Sent..Thank you")
	</script>
	
	<?Php
}
}
}
}
?>

<?php include("footer.html"); ?>

