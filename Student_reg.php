<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid']; ?>

<?php include("college_menu.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript">
function valid()
{
	if(document.getElementById("fname").value=="")
	{
		alert("Enter First Name!");
		document.getElementById("fname").focus();
    	return false;
 	}
	if(/[^a-z]/gi.test(document.getElementById("fname").value))
	{
		alert("Special characters are not allowed in Name");
		document.getElementById("fname").focus();
		return false;
	}
	
	if(document.getElementById("lname").value=="")
	{
		alert("Enter Second Name!");
		document.getElementById("lname").focus();
    	return false;
 	}
	if(/[^a-z]/gi.test(document.getElementById("lname").value))
	{
		alert("Special characters are not allowed in Name");
		document.getElementById("lname").focus();
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
	if(document.getElementById("adr").value=="")
	{
		alert("Enter Address!");
		document.getElementById("adr").focus();
    	return false;
 	}
	if(document.getElementById("place").value=="")
	{
		alert("Enter Place!");
		document.getElementById("place").focus();
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
	if(document.getElementById("mn").value=="")
   	{
     	alert("Enter Phone Number!");
     	document.getElementById("mn").focus();
     	return false;
 	}
	if(/[^0-9]/gi.test(document.getElementById("mn").value))
	{
		alert("Special characters not allowed in Phone Number");
		document.getElementById("mn").focus();
		return false;
	}
	if((document.getElementById("mn").value).length<9)
	
	{
		alert("Phone number is not valid");
		document.getElementById("mn").focus();
		return false;
	}
	if((document.getElementById("mn").value).length>14)
	
	{
		alert("Phone number is not valid");
		document.getElementById("mn").focus();
		return false;
	}
	if(document.getElementById("dpt").value=="-1")
	{
		alert("Select Department!");
		document.getElementById("dpt").focus();
    	return false;
 	}
	if(document.getElementById("sem").value=="-1")
	{
		alert("Select Semester!");
		document.getElementById("sem").focus();
    	return false;
 	}
	if(document.getElementById("file").value=="")
	{
		alert("Choose Your Photo !");
		document.getElementById("file").focus();
    	return false;
 	}
	return true;	
}

</script>
</head>
<body>
<!-- CONTENT
================================================== -->
<div class="grid">
		<div class="shadowundertop">
		</div>
		<div class="row">
			
			
			<!-- MAIN CONTENT -->
			<div class="c9">
				
				
		<div class="form" >
							<form action="" method="post"  name="form1" id="form1" enctype="multipart/form-data">
							
							
						</div>
			</div><!-- end main content -->			
		</div>
		</div>
		</div>
</div><!-- end grid -->





		
		
		
		
		
		<!-- CONTENT
================================================== -->
<div class="grid">
		<div class="shadowundertop">
		</div>
		<div class="row">
			<!-- SIDEBAR -->	
			<div class="c3">
				<div class="leftsidebar">
					<h2 class="title stresstitle">Student Registration</h2>
					
					<p align="center"><img src="Add User Male_100px.png" align="top"  /><br /></p>
					Register the willing students into this website. The students can see vacancies and attend the examinations.
					
					<p align="center"><img src="Permanent Job_100px.png" /></p>
					Make your students to get a better career in an easy way. 
				</div>
			</div><!-- end sidebar -->
			
			<!-- MAIN CONTENT -->
			<div class="c9">
				<h1 class="maintitle space-top">
				<span>REGISTER NOW</span>
				</h1>
				
		<div class="form" >
							
							
							 <input type="text" name="fname" placeholder="First name" id="fname" />
								<input type="text" name="lname"  placeholder="Last name" id="lname" />
								<input type="text" name="email"  placeholder="Email" id="email" />
								 <textarea name="address" id="adr" placeholder="address" rows="5"></textarea>
								 <input type="text" name="place" placeholder="Place" id="place" />
								 <input type="text" placeholder="City" name="city" id="city" />
							<input type="text" name="post" placeholder="Post" id="post" />
                  <input type="text" placeholder="pin" name="pin" id="pin" />
         <pre><label>Gender                						 : <img src="Circled User Male_100px.png" width="35" height="35" /><input name="gender" type="radio" value="male" checked="checked" /> Male                            						<img src="Circled User Female _100px.png" width="35" height="35" /><input name="gender" type="radio" value="female" />Female
        	</pre>	  								  
			</label>			
        <input type="text" name="mobile" placeholder="Contact number " id="mn" />
         
        
        <select name="department" id="dpt">
        <option value="-1">Select department</option>
		<?php
		$str="select * from department where c_logid='$lid'";
		$res=mysqli_query($con,$str);
	
		while($res1=mysqli_fetch_array($res))
		{
		?>
            <option value="<?php echo $res1[0] ?>"><?php echo $res1[1] ?></option><?php }?>
      </select>
       
          <select name="sem" id="sem">
            <option value="-1">Select semester</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
                    </select>
      <div class="container">
        <pre> <label>Upload Photo										<input type="file" name="file" id="file" /> </div>
		</pre></label>
							<input name="Submit" type="submit" id=" Register " class="button" value="  Register  " onclick="return valid();" />
						</div>
			</div><!-- end main content -->			
		</div>
		</div>
		</div>
</div><!-- end grid -->
		
		
		
		
		

</form>
</div>
</body>
</html>

<?php
if(isset($_POST['Submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	
	$email=$_POST['email'];
	$add=$_POST['address'];
	$place=$_POST['place'];
	$city=$_POST['city'];
	$post=$_POST['post'];
	$pin=$_POST['pin'];
	$gender=$_POST['gender'];
	$mobile=$_POST['mobile'];
	$dept=$_POST['department'];
	$sem=$_POST['sem'];
	$file=$_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'],"pics/".$file);
	//echo "$fname,$lname,$cpass,$email,$place,$city,$post,$pin,$gender,$mobile,$dept,$sem,$file";
	$x=mysqli_query($con,"select * from students where email='$email'");
	 if(mysqli_num_rows($x)>0)
	  {
	  
	  ?>
	  	<script>alert("already added student")</script>
		<?php
		}else{
		
		$pwd="";
for($j=0;$j<6;$j++)
{
	$a=rand(0,9);
	$pwd.=$a;
} 
		
	 $a="insert into login (user_name,password,u_type)values('$email','$pwd','student');";
	mysqli_query($con,$a);
	$loid=mysqli_insert_id($con);
	//echo "lid is $loid";
	$b="insert into students(first_name,last_name,email,place,city,post,pin,gender,mobile,c_logid,d_id,semester,Photo,logid,address) values('$fname','$lname','$email','$place','$city','$post','$pin','$gender','$mobile','$lid','$dept','$sem','$file','$loid','$add');";
	$i=mysqli_query($con,$b);
	
	$_SESSION['email']=$email;
	$_SESSION['pwd']=$pwd;
	
	if($i>0)
	{
	
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
	<script>
	//alert("Successfully inserted");
	</script>
	<?php
	}}
}
?>
<?php include("footer.html"); ?>