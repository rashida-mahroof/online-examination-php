<?php

$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
 include("student menu.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>





<body>
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
							
							<label>feddback</label>
							<textarea name="feedback" placeholder="Enter your feedback" class="ctextarea" id="n" class="ctextarea" rows="9"></textarea>
							<label> Company</label>
							<select name="cmp">
          <option value="-1">Select</option>
		  <?php
		  $str="select distinct(companies.company_name),companies.logid from requests,students,companies where requests.colid=students.c_logid and requests.status='Accepted' and companies.logid=requests.c_logid";
		  $res=mysqli_query($con,$str); 
		  while($res1=mysqli_fetch_array($res))
		  {
		  ?>
		  <option value="<?php echo $res1['logid'] ?>"><?php echo $res1[0] ?></option><?php } ?>
        </select>
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
					huig
					
					
				</dl>
				<br/>
				
				
   </div>
</div>

</div>

</body>
</html>




<?php
if(isset($_POST['Submit']))
{
	$cmp=$_POST['cmp'];
	$feed=$_POST['feedback'];
	$str="insert into feedback (logid,feedback,date,company_lid)values('$lid','$feed',curdate(),'$cmp')";
			  $res=mysqli_query($con,$str); 
			  if($str)
				{
				?>
				<script>alert("Do you want to continue ?")</script>
				<?php
				}
			  
			  
}
?>

<?php include("footer.html"); ?>