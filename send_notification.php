<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form2" name="form2" method="post" action="">
  <div align="center">
    <h1>Sent Notification
    </h1>
  </div>
  <table width="524" border="0" align="center" cellpadding="20" cellspacing="10">
    <tr>
      <td width="174">Notification</td>
      <td width="240"><textarea name="notification"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="   Send   " /></td>
    </tr>
  </table>
</form>
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","online_examination");
if(isset($_POST['Submit']))
{
	$notification=$_POST['notification'];
	echo "$notification";
}
?>
