	<?php   //require("class.phpmailer.php");

session_start();
$email=$_SESSION['email'];
$a=$_SESSION['pwd'];

	try{
	$dat=date("Y-m-d");
	
	$sub="Your Password";
	$details="Your  Password is.. ";
	
	$details.=$a;
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
?>	