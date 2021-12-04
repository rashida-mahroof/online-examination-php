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
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
?>
<script language="javascript" type="text/javascript">
            var xmlHttp;
            function showss(mid){
		//alert(mid)
					if (typeof XMLHttpRequest != "undefined"){
						xmlHttp= new XMLHttpRequest();
					}
               		else if (window.ActiveXObject){
                    	xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");
               		}
                	if (xmlHttp==null){
                    	alert("Browser does not support XMLHTTP Request")
                    	return;
                	}
                var url="depajax.php"
                url +="?c=" +mid
                xmlHttp.onreadystatechange = stateChange;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            function stateChange(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
            		document.getElementById("dep").innerHTML=xmlHttp.responseText 
					        //alert(xmlHttp.responseText);
                    //document.getElementById("x").value=xmlHttp.responseText 
                }
            } 
	function valid()
	{
		if(document.getElementById("clg").value=="-1")
		{
			alert("Select College !");
			document.getElementById("clg").focus();
			return false;
		}
		if(document.getElementById("dep").value=="-1")
		{
			alert("Select Department !");
			document.getElementById("dep").focus();
			return false;
		}
		return true;
	}
			
</script>
<link href="css/styleform.css" rel="stylesheet" type="text/css" />
<body>
<center >
<div class="form">
<form id="form1" name="form1" method="post" action="">

  <h1 align="center">View Students</h1>
 <div class="grid">
 <div align="center">
 <select  name="select"  id="clg" onchange="showss(this.value)">
        <option value="-1">Select college</option>
		<?php 
		$str="select * from colleges";
		$res=mysqli_query($con,$str);
	
		while($res1=mysqli_fetch_array($res))
		{
		?>
          <option value="<?php echo $res1['logid'] ?>"><?php echo $res1[1] ?></option>
        <?php }?>
		?>
  </select>
 <br /><br />
     <select name="department"  id="dep">
          <option value="-1">Choose department</option>
  </select>	 
      <input name="Submit1" align="right" type="submit"   onclick="return valid();" value="Submit" />
 </center>
  <p>&nbsp;</p>
  
   <?php
    if(isset($_POST['Submit1']))
    {
	$clg=$_POST['select'];
	$department=$_POST['department'];
	
		  $str="select * from students where d_id='$department' and c_logid='$clg'";
	$res=mysqli_query($con,$str);
	?>
  <div class="grid">
  <table width="400" border="1" align="center" cellpadding="10" cellspacing="2">
    <tr>
      <th><strong> SI No</strong></td>
      <th><strong>Name</strong></td>
	  <th></th>
    </tr>
   
	<?php
	$i=1;
	while($res1=mysqli_fetch_array($res))
	{
		  ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $res1[1] ?> <?php echo $res1[2] ?></td>
      <td><a href="student_profile_college.php?id=<?php echo $res1[0]?>">Profile</a> </td>
    </tr>
    <?php $i++ ?>
    <?php } } ?>
  </table>
  <p>&nbsp;</p>
  <table width="400" border="0" align="center" cellpadding="20" cellspacing="10">

</form>
<h1 align="center">&nbsp;</h1>
</div>
</div>
</div>
</div>
</body>
</html>
<?php include("footer.html"); ?>