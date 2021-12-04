<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript">
function valid()
{
	if(document.getElementById("clg").value=="-1")
	{
		alert("Select College");
		document.getElementById("clg").focus();
    	return false;
 	}
	
	return (true);
}
</script>
</head>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
?>
<?php include("admin_menu.html"); ?>
<body>
<form id="form1" name="form1" method="post" action="">
  <div align="center">
  <div class="grid">
    <p>&nbsp;</p>
	  <h1>Request status </h1>
	 <select name="clg" id="clg">
          <option value="-1">Select Institution</option>
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
      </p>
      <p>
        <input name="Submit" type="submit"  value="Submit" onclick="return valid();" />
	
  <?php
		  if(isset($_POST['Submit']))
{
	$clg=$_POST['clg'];
	
		 $str1="Select companies.company_name,colleges.college_name,requests.* from companies,requests,colleges where requests.colid='$clg' and requests.c_logid=companies.logid and colleges.logid='$clg'";
	
	$res2=mysqli_query($con,$str1);
	if(mysqli_num_rows($res2)>0)
	{
	?>
    <table width="400" border="1" cellspacing="1" cellpadding="20">
      <tr>
        <th scope="col">SI no</th>
        <th scope="col">College</th>
        <th scope="col">Company</th>
        <th scope="col">Requested date </th>
        <th scope="col">Status</th>
      </tr>
	  
	 <?php
	$i=1;
	while($res3=mysqli_fetch_array($res2))
	{
	?>
	  
      <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $res3['college_name'] ?></td>
        <td><?php echo $res3['company_name'] ?></td>
        <td><?php echo $res3['date'] ?></td>
        <td><?php echo $res3['status'] ?></td>
      </tr>
	  <?php } }else{ echo "No records to show"; } }?>
    </table>
  </div>
</form>
</div>
</body>
</html>
<?php include "footer.html" ?>