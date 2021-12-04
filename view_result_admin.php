<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
$type=$_SESSION['type'];
?>
<?php
	 include("admin_menu.html");

?>
 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
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
<body>
<center>
<div class="grid">



		<div class="row">
		<h1 align="center">View Result</h1>
			<div class="shadowundertop"> </div>
  <form id="p_student" name="p_student" method="post" action="">
   <?php
	 
	 
	  ?>
   
    <div align="center">
      <p>
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
        <input name="Submit" type="submit" class="button" value="Submit" onclick="return valid();" />
      </p>
	  
	   <?php
		  if(isset($_POST['Submit']))
		{
	$clg=$_POST['clg'];
	
		 $str1="select student_list.*,companies.company_name,vacancies.post,exam.*,students.first_name,last_name from student_list,students,companies,vacancies,exam where companies.logid=vacancies.clogid and vacancies.vid=exam.vid and exam.examid=student_list.examid and student_list.studid=students.logid and students.c_logid='$clg' order by percentage desc";
	  $res2=mysqli_query($con,$str1);
	  if(mysqli_num_rows($res2)>0)
	  {
	?>
	  
      <table width="400" border="1" cellspacing="2" cellpadding="10">
        <tr>
          <th scope="col">SI No</th>
            <th scope="col">Name</th>
            <th scope="col">Post</th>
			<th scope="col">Date</th>
            <th scope="col">Company</th>
			
            <th scope="col">Percentage</th>
            <th scope="col">Status</th>
          </tr>
		  <?php
        $i=1;
	  while($res3=mysqli_fetch_array($res2))
	  {
	 ?>
        <tr>
          <td><?php echo $i++; ?></td>
            <td><?php echo $res3['first_name'] ?> <?php $res1['last_name'] ?></td>
            <td><?php echo $res3['post'] ?></td>
			  <td><?php echo $res3['date'] ?></td>
            <td><?php echo $res3['company_name'] ?></td>
            <td><?php echo $res3['percentage'] ?><img src="Percentage_48px_1.png" width="17" height="13" align="absmiddle" /></td>
            <td><?php echo $res3['status'] ?></td>
          </tr>
        <?php } }else{ echo "Result is empty"; } } ?>
      </table>
    </div>
  </form>
</center>
</div>
</div>
</div>
</div>
</body>
</html>
<?php include("footer.html"); ?>