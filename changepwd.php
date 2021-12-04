<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript">
function valid()
{
	if(document.getElementById("cpwd").value=="")
	{
		alert("Enter current password!");
		document.getElementById("cpwd").focus();
    	return false;
 	}
	if(document.getElementById("npwd").value=="")
	{
		alert("Enter new password!");
		document.getElementById("npwd").focus();
    	return false;
 	}
	if(document.getElementById("rpwd").value=="")
	{
		alert("Retype new password!");
		document.getElementById("rpwd").focus();
    	return false;
 	}
	if(document.getElementById("npwd").value.length<6)
	{
		alert("Password is too short..Password should be atleast 6 characters...");
		document.getElementById("npwd").focus();
    	return false;
	}
	if((document.getElementById("rpwd").value)!=(document.getElementById("npwd").value))
	{
		alert("Password is missmatch!");
		document.getElementById("rpwd").focus();
    	return false;
 	}
	return (true);
}
</script>
</head>



<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
?>
<body bgcolor="#D7D7D7">
<form id="form1" name="form1"  method="post" action="">
  <div align="center">
    <h1>Change Password </h1><br /><br /><br />
    <table bgcolor="#FFFFFF" style="border:groove"  style="background:#CCCCCC"   style="background:#CCCCCC" width="400" border="0" cellspacing="10"  cellpadding="20" >
      <tr>
        <td><input name="pwd" style="padding:15px" type="text" value="" size="50" placeholder="Type your current password" id="cpwd" /></td>
      </tr>
      <tr>
        <td><input name="npwd" style="padding:15px" placeholder="Enter new password" type="password" size="50" maxlength="100" id="npwd" /></td>
      </tr>
      <tr>
        <td><input name="cpwd" style="padding:15px" type="password" placeholder="Re-type new password" size="50" maxlength="100" id="rpwd" /></td>
      </tr>
      <tr>
        <td><div align="right">
          <input type="submit"   style="padding:15px;background:#3399FF"  name="Submit" value="   Submit   " onclick="return valid();" />
        </div></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </div>
</form>
</body>
</html>
<?php

if(isset($_POST['Submit']))
{
	$crpwd=$_POST['pwd'];
	$npwd=$_POST['npwd'];
	$cpwd=$_POST['cpwd'];
	
	$str="select * from login where logid='$lid' and password='$crpwd' ";
	$res=mysqli_query($con,$str);
	if($res1=mysqli_fetch_array($res));
	{
		if($res1['password']==$crpwd)
		{
		$str1="update login set password='$npwd' where logid='$lid'";
		$i=mysqli_query($con,$str1);
		if($i>0)
		{
		?>
	<script>
	alert("Success");
	</script>
	<?php
		
	}
	else
	{
	?>
	<script>
	alert("Invalid");
	</script>
	<?php
	}
	}else{
	?>
	<script>
	alert("Incorrect password");
	document.getElementById("cpwd").focus();
	</script>
	<?php
	}
}
}

?>