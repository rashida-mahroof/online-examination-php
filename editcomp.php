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
	if(/[^a-z]/gi.test(document.getElementById("name").value))
	{
		alert("Special characters are not allowed in name");
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
</head>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
$idd=$_GET['id'];
include("admin_menu.html");
$str="select * from companies where cid='$idd'";
$res=mysqli_query($con,$str);
if($res1=mysqli_fetch_array($res))
{
?>
<body>
<center>
<!-- CONTENT
================================================== -->
<div class="grid">
		<div class="shadowundertop">
		</div>
		<div class="row">
			<!-- SIDEBAR -->	
			<div class="c3">
				<div class="leftsidebar">
					<h2 class="title stresstitle">Insitution Registration</h2>
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
							<form id="creg" name="creg" method="post" action="">

							
							 <input type="text" id="name" name="cname" value="<?php echo $res1[1]?>" placeholder="Company name" />
							  <input type="text" id="place" name="place" value="<?php echo $res1[2]?>" placeholder="Place" />
           
                  <input type="text" name="city" id="city" value="<?php echo $res1[3]?>" placeholder="City" />
              
                  <input type="text" name="post" id="post" value="<?php echo $res1[4]?>" placeholder="Post" />
                
                  <input type="text" name="pin" id="pin" value="<?php echo $res1[5]?>" placeholder="Pin" />
               
          <input type="text" name="email" id="email" value="<?php echo $res1[6]?>" placeholder="Email" />
       
          <input type="text" name="contactno1" id="mn1" value="<?php echo $res1[7]?>" placeholder="Contact number 1" />
       
        <input type="text" name="contactno2" id="mn2" value="<?php echo $res1[8]?>" placeholder="Contact number 2" />
      
          <input type="text" name="website" id="web" value="<?php echo $res1[9]?>" placeholder="Website" />
        
		
     
         <?php  } ?>
							
							<input type="submit" class="button" style="font-size:12px;" name="submit" value="SUBMIT" onclick="return valid();" />
						</div>
			</div><!-- end main content -->			
		</div>
		</div>
		</div>
</div><!-- end grid -->





</form>
</body>
</html>
<?php
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
	
	$a="update companies set company_name='$cname',place='$place',city='$city',post='$post',pin='$pin',email_id='$email',contact_no1='$contactno1',contact_no2='$contactno2',website='$web' where cid='$idd'";
	$i=mysqli_query($con,$a);
	if($i)
	{
	?>
	<script>alert("Do you want to continue ?");
	window.location="view_companies_list.php";
	</script>
	<?php
	}
}
include("footer.html");
?>
