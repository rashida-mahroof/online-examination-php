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
	if(document.getElementById("n").value=="")
	{
		alert("Provide Notification!");
		document.getElementById("n").focus();
    	return false;
 	}
	return true;
}
</script>
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
							
							<label>Notification</label>
							<textarea name="Notification" id="n" class="ctextarea" rows="9"></textarea>
							<label>Last date</label>
							<input type="date" id="date" name="date" class="textfield" />
							<input type="submit" name="Submit" id="submit" class="button" style="font-size:12px;" value="SUBMIT" onclick="return valid();" />
						</div>
					</form>
				</div>
   </div>

			<div class="c4 space-top">
				<h1 class="maintitle">
				<span><i class="icon-map-marker"></i> Recent</span>
				<p></p>
				 <?php
				
   $str="select * from notifications order by n_date desc  ";
	$res=mysqli_query($con,$str);
	for ($j=1;$j<3;$j++){
	$i=1;
	
	while($res1=mysqli_fetch_array($res))
	{
	?>
				</h1>
				<p>
					
				</p>
				<dl>
					<dt><?php echo $res1[2] ?></dt>
					<dd><span><?php echo $res1[1] ?></span></dd>
					
					
				</dl>
				<br/>
				<?php  } } ?>
				
   </div>
</div>



<?php
$con=mysqli_connect("localhost","root","","online_examination");
if(isset($_POST['Submit']))
{
	$notification=$_POST['Notification'];
	$date=$_POST['date'];
	//echo "$notification,";
	$a="insert into notifications(content,n_date,last_date)values('$notification',curdate(),'$date');";
	$i=mysqli_query($con,$a);
	if($i>0)
	{
	
	?>
	
	<script>alert("Your message has been sent. Thank you!")</script>
	<?php
	}
}
?>
</body>
</html>

</div>
<?php include("footer.html"); ?>