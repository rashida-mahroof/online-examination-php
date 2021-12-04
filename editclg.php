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
	if(/[^a-z ]/gi.test(document.getElementById("name").value))
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
	
	if(document.getElementById("city").value=="")
	{
		alert("Enter City!");
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
	
	
	return (true);	
}

</script>
</head>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
$idd=$_GET['id'];
include("admin_menu.html");
$str="select * from colleges where colid='$idd'";
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
					<img src="University_90px.png" align="absmiddle"  />
					Register the trusted institutions under your university, the institutions can register their willing students for the examinations posted by the companies for their vacanciies.
					
					
				</div>
			</div><!-- end sidebar -->
			
			<!-- MAIN CONTENT -->
			<div class="c9">
				<h1 class="maintitle space-top">
				<span>REGISTER NOW</span>
				</h1>
				
		<div class="form" >
							 <form id="colreg" name="colreg" method="post" action="">
							 
							 <input type="text" name="colname" id="name" value="<?php echo $res1[1]?>" placeholder="Institution name" size="60" />
								 <input type="text" placeholder="Place" id="place" name="place" value="<?php echo $res1[2]?>"/>
								    <input type="text" placeholder="City" id="city" name="city" value="<?php echo $res1[3]?>" />
							<input type="text" name="post" placeholder="Post" id="post" value="<?php echo $res1[4]?>" />
                  <input type="text" name="pin" placeholder="Pin" id="pin" value="<?php echo $res1[5]?>" />
							<input type="text" name="phone" id="mn" placeholder="Contact number" value="<?php echo $res1[6]?>" />
        
            <input type="text" name="email" placeholder="Email"  id="email" value="<?php echo $res1[7]?>" />
      <?php }?>
     
       
           
							<input name="Submit" type="submit" id="Submit"  class="button" style="font-size:12px; style="background:" onclick="return valid();" value="Submit" size="45" width="60" height="25" />
						</div>
			</div><!-- end main content -->			
		</div>
		</div>
		</div>
</div><!-- end grid -->







   
           
         
     
                  />
             
                 
                 
                    
                 
                   
                
   
            
        
     
	 
       
  </form>
</center>
</body>
</html>
<?php
if(isset($_POST['Submit']))
{
	
	$colname=$_POST['colname'];
	$place=$_POST['place'];
	$city=$_POST['city'];
	$post=$_POST['post'];
	$pin=$_POST['pin'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$conpass=$_POST['pass2'];
	
	$a="update colleges set college_name='$colname',place='$place',city='$city',post='$post',pin='$pin',phone='$phone',email_id='$email' where colid='$idd'";
	$i=mysqli_query($con,$a);
	if($i)
	{
	?>
	<script>
	alert("Do you want to continue ?");
	window.location="view_college.php";
	</script>
	<?php
	}
}
include("footer.html");
?>
