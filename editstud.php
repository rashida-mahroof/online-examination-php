<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php include "college_menu.php" ?>
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
	if(document.getElementById("add").value=="")
	{
		alert("Enter Address!");
		document.getElementById("add").focus();
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
     	document.getElementById("mobile").focus();
     	return false;
 	}
	if(/[^0-9]/gi.test(document.getElementById("mn").value))
	{
		alert("Special characters not allowed in Phone Number");
		document.getElementById("mobile").focus();
		return false;
	}
	if((document.getElementById("mobile").value).length<9)
	
	{
		alert("Phone number is not valid");
		document.getElementById("mobile").focus();
		return false;
	}
	if((document.getElementById("mn").value).length>14)
	
	{
		alert("Phone number is not valid");
		document.getElementById("mobile").focus();
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
<body>

<form method="post" name="lk" enctype="multipart/form-data">
<?php
$con=mysqli_connect("localhost","root","","online_examination");
$idd=$_GET['id'];
$str="select * from students where sid='$idd'";
$v1="select department.d_name,department.d_id from department,students where students.c_logid=department.c_logid and students.sid='$idd'";


$res=mysqli_query($con,$str);
if($res1=mysqli_fetch_array($res))
{
?>
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
					
					<img src="Client Company_100px.png" align="top"  /><br />
					Register the trusted companies, the companies can publish their vacancies and conduct the exams for the students to their post, The companies can reduce their time by conducting the exams online and get select the student as companies clients.
					
				</div>
			</div><!-- end sidebar -->
			
			<!-- MAIN CONTENT -->
			<div class="c9">
				<h1 class="maintitle space-top">
				<span>REGISTER NOW</span>
				</h1>
				
		<div class="form" >
							
							
							 <input type="text" name="fname" id="fname" value="<?php echo $res1[1]?>" placeholder="First name" />
								 <input type="text" name="lname" id="lname" placeholder="Last name" value="<?php echo $res1[2]?>" />
								 <input type="text" name="email" id="email" placeholder="Email" value="<?php echo $res1[3]?>" />
								 <textarea name="address" id="add" placeholder="Address" rows="5"><?php echo $res1['address']?></textarea>
								<input type="text" name="place" placeholder="Place" id="place" value="<?php echo $res1[4]?>" />
       
          <input type="text" name="city" placeholder="City" id="city" value="<?php echo $res1[5]?>" />
      
          <input type="text" name="post" placeholder="Post" id="post" value="<?php echo $res1[6]?>" />
       
          <input type="text" name="pin" id="pin" placeholder="Pin" value="<?php echo $res1[7]?>" />
         <pre><label>Gender                						 : <input name="gender" type="radio" value="male" <?php if($res1['gender']=="male") { echo "checked=checked"; }  ?> />
      Male
      <input name="gender" type="radio" value="female" <?php if($res1['gender']=="female") { echo "checked=checked"; }  ?> />
        	</pre>	  								  
			</label>			
       <input type="text" name="mobile" id="mobile" value="<?php echo $res1[9]?>" />
         
        
        <select name="department" id="dpt">
        <option value="-1">Select</option>
        <?php
		
		$res2=mysqli_query($con,$v1);
	
		while($res3=mysqli_fetch_array($res2))
		{
		?>
			<option value="<?php echo $res3['d_id']; ?>" <?php if($res1['d_id']==$res3['d_id']) { echo "selected=selected"; } ?>><?php echo $res3['d_name'] ?> </option>
    <?php
	}
		?>
      </select>
       
          <select name="sem" id="sem">
       
        <option value="1" <?php if($res1['semester']==1) { echo "selected=selected"; } ?>>1</option>
        <option value="2" <?php if($res1['semester']==2) { echo "selected=selected"; } ?>>2</option>
        <option value="3" <?php if($res1['semester']==3) { echo "selected=selected"; } ?>>3</option>
        <option value="4" <?php if($res1['semester']==4) { echo "selected=selected"; } ?>>4</option>
        <option value="5" <?php if($res1['semester']==5) { echo "selected=selected"; } ?>>5</option>
        <option value="6" <?php if($res1['semester']==6) { echo "selected=selected"; } ?>>6</option>
      </select>
      <div class="container">
        <pre> <label>Upload Photo										<img src="pics/<?php echo $res1[13]?>" width="100" height="150"/>
      <input type="file" name="file" id="file"  />
		</label></div>
						</pre>	<input name="Submit" type="submit" id=" Register " class="button" value="  Register  " onclick="return valid();" />
						</div>
			</div><!-- end main content -->			
		</div>
		</div>
		</div>
</div><!-- end grid -->





<?php
}
if(isset($_POST['Submit']))
{
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$cpass=$_POST['cpass'];
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
	$a1=strlen($file);
		if($a1!=0)
		{
	       move_uploaded_file($_FILES['file']['tmp_name'],"pics/".$file);
	$a="update students set first_name='$fname',last_name='$lname',email='$email',place='$place',city='$city',post='$post',pin='$pin',gender='$gender',mobile='$mobile',d_id='$dept',semester='$sem',address='$add',Photo='$file' where sid='$idd'";
	$i=mysqli_query($con,$a);
	if($i)
	{
	?>
	<script>alert("Do you want to continue ?");
	window.location="student_profile_college.php?id=<?php echo $idd; ?>";
	</script>
	<?php
	}
	}
	else
	{
	$a="update students set first_name='$fname',last_name='$lname',email='$email',place='$place',city='$city',post='$post',pin='$pin',gender='$gender',mobile='$mobile',d_id='$dept',semester='$sem',address='$add' where sid='$idd'";
	$i=mysqli_query($con,$a);
	if($i)
	{
	?>
	<script>alert("Do you want to continue ?");
	window.location="student_profile_college.php?id=<?php echo $idd; ?>";
	</script>
	<?php
	}
	}
	
}
?>


<?php include "footer.html" ?>