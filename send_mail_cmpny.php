<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function valid()
{
	if(document.getElementById("n").value=="")
	{
		alert("Provide Notification!");
		document.getElementById("n").focus();
    	return false;
 	}
	return true;
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php include("company_menu.php"); ?>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
$idd=$_GET['id'];
$post1=$_GET['post'];
$name1=$_GET['name'];
$str="select companies.company_name from companies where logid='$name1'";
$res=mysqli_query($con,$str);
$cname="";
if($res1=mysqli_fetch_array($res)){
$cname=$res1[0];
}
?>
<body>
<form name="form1" method="post" action="">
<div class="grid">
  <div class="row space-top">
<div class="c8 space-top">
				<h1 class="maintitle">
				<span><i class="icon-envelope-alt"></i> Get in Touch</span>
				</h1>
				<div class="wrapcontact">
					<div class="done">
						<div class="alert-box success ctextarea"></div>
					</div>
					<form method="post" action="">
						<div class="form">
							<label>E-mail</label>
							<input type="text" id="sub" name="mail" value="<?php echo $idd ?>" class="textfield" />
							<label>Subject</label>
							<input type="text" id="sub" name="sub" value="<?php echo $cname ?> for <?php echo $post1 ?> post" class="textfield" />
							<label>Description</label>
							<textarea name="n" id="n" class="ctextarea" rows="9"></textarea>
							
							<input type="submit" name="Submit" id="submit" class="button" style="font-size:12px;" value="SUBMIT" onclick="return valid();" />
						</div>
					</form>
				</div>
   </div>

			<div class="c4 space-top">
				<h1 class="maintitle">
				<span><i class="icon-map-marker"></i> Recent</span>
				<p></p>
				
				</h1>
				<p>
					
				</p>
				<dl>
					<dt></dt>
					<dd><span></span></dd>
					
					
				</dl>
				<br/>
			
				
   </div>
</div>


<?php
if(isset($_POST['Submit']))
{
try{
	$dat=date("Y-m-d");
	
	$sub=$_POST['sub'];
	$details=$_POST['n'];
	$email=$_POST['mail'];
	
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
}

?>
</div>
</body>
</html>
<?php include("footer.html"); ?>