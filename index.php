
<!DOCTYPE html>
<html lang="en" >

<head>
 <meta charset="UTF-8">
<title>Untitled Document</title>
 <link rel="stylesheet" href="stylelogin.css">
</head>

<body >

 <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

<form id="login" name="login" method="post" action=""  class="login-container">
  
        <p><input type="text" name="username" placeholder="Email" /></p>
     
     
       <p> <input type="password" name="password" placeholder="Password" /></p>
     
       <p> <input type="submit" name="Submit" value="   Login   " /></p>
      </label></td>
    </tr>
	</table>
  <label></label>
 <div class="link" <P><a align="center"  href="changepwd.php">Forgot my password !</a></p>
 <a href="changepwd.php"></a>
 </div>
</form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  


</center>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
if(isset($_POST['Submit']))
{
$un=$_POST['username'];
$pn=$_POST['password'];
$str="select * from login where user_name='$un' and password='$pn'";
//echo $str;
$res=mysqli_query($con,$str);
$type="";
if($res1=mysqli_fetch_array($res))
{
$type=$res1[3];
session_start();
$_SESSION['lid']=$res1[0];
$_SESSION['type']=$res1[3];
}
if($type=="admin")
{
header("location:admin_home.php");
}
else if($type=="college")
{
header("location:college_home.php");
}
else if($type=="company")
{
header("location:company home.php");
}
else if($type=="student")
{
header("location:student_home.php");
}
else
{
?>
<script>
alert("Invalid UserName Or Password");
</script>
<?php
}

}
?>