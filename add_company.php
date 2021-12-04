<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
 include("admin_menu.html"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<script type="text/javascript">
function valid()
{
	if(document.getElementById("name").value=="")
	{
		alert("Enter Name!");
		document.getElementById("name").focus();
    	return false;
 	}
	
	if(document.getElementById("place").value=="")
	{
		alert("Enter Place!");
		document.getElementById("place").focus();
    	return false;
 	}
	if(/[^a-z]/gi.test(document.getElementById("place").value))
	{
		alert("Special characters are not allowed in Place");
		document.getElementById("place").focus();
		return false;
	}
	if(document.getElementById("city").value=="")
	{
		alert("Enter City!");
		document.getElementById("city").focus();
    	return false;
 	}
	if(/[^a-z]/gi.test(document.getElementById("city").value))
	{
		alert("Special characters are not allowed in City");
		document.getElementById("city").focus();
		return false;
	}
	if(document.getElementById("post").value=="")
	{
		alert("Enter Post!");
		document.getElementById("post").focus();
    	return false;
 	}
	if(/[^a-z]/gi.test(document.getElementById("post").value))
	{
		alert("Special characters are not allowed in Post");
		document.getElementById("post").focus();
		return false;
	}
	if(document.getElementById("pin").value=="")
   	{
     	alert("Enter Pin Number!");
     	document.getElementById("pin").focus();
     	return false;
 	}
	if(/[^0-9]/gi.test(document.getElementById("pin").value))
	{
		alert("Special characters not allowed in Pin Number");
		document.getElementById("pin").focus();
		return false;
	}
	if((document.getElementById("pin").value).length<6)
	
	{
		alert("Pin number is not valid");
		document.getElementById("pin").focus();
		return false;
	}
	if((document.getElementById("pin").value).length>6)
	
	{
		alert("Pin number is not valid");
		document.getElementById("pin").focus();
		return false;
	}
	if(document.getElementById("mn1").value=="")
   	{
     	alert("Enter Phone Number!");
     	document.getElementById("mn1").focus();
     	return false;
 	}
	if(/[^0-9]/gi.test(document.getElementById("mn1").value))
	{
		alert("Special characters not allowed in Phone Number");
		document.getElementById("mn1").focus();
		return false;
	}
	if((document.getElementById("mn1").value).length<9)
	
	{
		alert("Phone number is not valid");
		document.getElementById("mn1").focus();
		return false;
	}
	if((document.getElementById("mn1").value).length>14)
	
	{
		alert("Phone number is not valid");
		document.getElementById("mn1").focus();
		return false;
	}
	
	
	
	if(document.getElementById("mn2").value=="")
   	{
     	alert("Enter Phone Number!");
     	document.getElementById("mn2").focus();
     	return false;
 	}
	if(/[^0-9]/gi.test(document.getElementById("mn2").value))
	{
		alert("Special characters not allowed in Phone Number");
		document.getElementById("mn2").focus();
		return false;
	}
	if((document.getElementById("mn2").value).length<9)
	
	{
		alert("Phone number is not valid");
		document.getElementById("mn2").focus();
		return false;
	}
	if((document.getElementById("mn2").value).length>14)
	
	{
		alert("Phone number is not valid");
		document.getElementById("mn2").focus();
		return false;
	}
	if(document.getElementById("email").value=="")
	{
		alert("Enter your E-mail ID");
		document.getElementById("email").focus();
		return false;
	}
	var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
	var emailid=document.getElementById("email").value;
	var matchArray = emailid.match(emailPat);
	if (matchArray == null)
	{
		alert("Your Email ID seems incorrect. Enter Correct Email ID.");
		document.getElementById("email").focus();
		return false;
	}
	if(document.getElementById("web").value=="")
	{
		alert("Enter Web Address!");
		document.getElementById("web").focus();
    	return false;
 	}
	if(document.getElementById("pwd").value=="")
	{
		alert("Enter Password!");
		document.getElementById("pwd").focus();
    	return false;
 	}
	if(document.getElementById("pwd").value.length<6)
	{
		alert("Password is too short..Password should be atleast 6 characters...");
		document.getElementById("pwd").focus();
    	return false;
	}
	if(document.getElementById("cpwd").value=="")
	{
		alert("Enter Confirm Password!");
		document.getElementById("cpwd").focus();
    	return false;
 	}
	if((document.getElementById("cpwd").value)!=(document.getElementById("pwd").value))
	{
		alert("Password is missmatch!");
		document.getElementById("cpwd").focus();
    	return false;
 	}
	
	return (true);	
}

</script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>


<body>
<!-- CONTENT
================================================== -->
<div class="grid">
		<div class="shadowundertop">
		</div>
		<div class="row">
			<!-- SIDEBAR -->	
			<div class="c3">
				<div class="leftsidebar">
					<h2 class="title stresstitle">Company registration</h2>
					<hr class="hrtitle">
					<img src="Client Company_100px.png" align="absmiddle"  />
					Register the trusted companies, the companies can publish their vacancies and conduct the exams for the students to their post, The companies can reduce their time by conducting the exams online and get select the student as companies clients.
					
				</div>
			</div><!-- end sidebar -->
			
			<!-- MAIN CONTENT -->
			<div class="c9">
				<h1 class="maintitle space-top">
				<span>REGISTER NOW</span>
				</h1>
				
		<div class="form" >
							<form id="creg"  name="creg" method="post" action="">
							
							<input type="text"  placeholder="Company name"  name="cname" id="name" />
								<input type="text" placeholder="Place" name="place" id="place" />
								 <input type="text" placeholder="City" name="city" id="city" />
							<input type="text" name="post" placeholder="Post" id="post" />
                  <input type="text" placeholder="pin" name="pin" id="pin" />
							 <input type="text" placeholder="Company mail" name="email" id="email" />
       
          <input type="text" placeholder="Contact number 1" name="contactno1" id="mn1" />
        
        <input type="text" placeholder="Contact number 2" name="contactno2" id="mn2" />
     
         
							<input type="text" id="web" name="website" placeholder="Website" />
							<input type="submit" class="button" style="font-size:12px;" name="submit" value="SUBMIT" onclick="return valid();" />
						</div>
			</div><!-- end main content -->			
		</div>
		</div>
		</div>
</div><!-- end grid -->
	
	

</center>
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","online_examination");
if(isset($_POST['submit']))
{
	$cname=$_POST['cname'];
	$place=$_POST['place'];
	$city=$_POST['city'];
	$post=$_POST['post'];
	$pin=$_POST['pin'];
	$email=$_POST['email'];
	$contactno1=$_POST['contactno1'];
	$contactno2=$_POST['contactno2'];
	$web=$_POST['website'];
	
	
	$x=mysqli_query($con,"select * from login where user_name='$email'");
	  if(mysqli_num_rows($x)>0)
	  {
	  
		?>
		<script>alert("This email address is invalid !")</script>
		<?php
		
	  }
	  else{
	  
	    $pwd="";
for($j=0;$j<6;$j++)
{
	$a=rand(0,9);
	$pwd.=$a;
}
	
	//echo "$cname, $place,$city,$post,$pin,$email,$contactno1,$contactno2,$pass,$pass1";
	$a="insert into login (user_name,password,u_type)values('$email','$pwd','company');";
	mysqli_query($con,$a);
	$lid=mysqli_insert_id($con);
	$b="insert into companies (company_name,place,city,post,pin,email_id,contact_no1,contact_no2,website,logid) values('$cname','$place','$city','$post',$pin,'$email','$contactno1','$contactno2','$web','$lid');";
	$i=mysqli_query($con,$b);
	
	$_SESSION['email']=$email;
	$_SESSION['pwd']=$pwd;
	if($i>0)
	{
	
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
	
	
	?>
	<script>//alert("Successfully inserted..Do you want to continue ?" )</script>
	
	<?php	
	}
	}	
}
?>
<?php include "footer.html" ?>
