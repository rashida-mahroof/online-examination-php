<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
		
	function valid()
	{
		if(document.getElementById("dpt").value=="-1")
		{
			alert("Select Department!");
			document.getElementById("dpt").focus();
			return false;
		}
		return true;
	}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
include("college_menu.php"); ?>
<body>
<div class="grid">
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <h1>Exam History </h1>
    <p>
      <select name="clg">
        <option value="-1">Select Company</option>
		 <?php
		$a="select companies.* from companies,requests where companies.logid=requests.c_logid and requests.colid='$lid' and requests.status='accepted'";
		$res=mysqli_query($con,$a);
		
		while($res1=mysqli_fetch_array($res))
		{
		?>
		
			<option value="<?php echo $res1['logid'] ?>"><?php echo $res1[1] ?></option>
		<?php } ?>
      </select>
    </p>
    <p>
      <input type="submit" name="Submit" value="Submit" onclick="return valid();" />
    </p>
	
	<?php
		  if(isset($_POST['Submit']))
		{
	
	$clg=$_POST['clg'];
	
		  $str="select exam.date,vacancies.* from companies,vacancies,exam where companies.logid=vacancies.clogid and vacancies.vid=exam.vid and exam.clid='$lid' and companies.logid='$clg';";
	$res=mysqli_query($con,$str);
	if(mysqli_num_rows($res)>0){
	?>
	
    <table width="400" border="1" cellspacing="1" cellpadding="20">
      <tr>
        <th width="80" scope="col">SI No </th>
        <th width="76" scope="col">Exam</th>
        <th width="12" scope="col">Date</th>
        <th width="22" scope="col">&nbsp;</th>
      </tr>
	  <?php
	  $i=1;
	while($res1=mysqli_fetch_array($res))
	{
		  ?>
      <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $res1['post'] ?></td>
        <td><?php echo $res1['date'] ?></td>
        <td><a href="more_exam_history.php?id=<?php echo $lid ?>"><img src="More_48px.png" />More</a></td>
      </tr>
	  <?php }}else{ echo "No exams"; }} ?>
    </table>
    <p>&nbsp;</p>
  </div>
  </div>
</form>
</body>
</html>
<?php include("footer.html") ?> 