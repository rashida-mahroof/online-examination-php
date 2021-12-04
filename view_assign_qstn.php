

<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
include("company_menu_form.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript">
function valid()
{
	if(document.getElementById("post").value=="-1")
	{
		alert("Select post!");
		document.getElementById("post").focus();
    	return false;
 	}
	return (true);
}
</script>
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="grid">
 <div align="center">
 
  <form id="form1" name="form1" method="post" action="">
    <h1>View Assigned Questions</h1>
    <div style="width:180px" >
     <strong>Post</strong>
        <select name="post" id="post">
            <option value="-1">Select</option>
            <?php
		$a="select * from vacancies where clogid='$lid'";
		$res4=mysqli_query($con,$a);
		while($res5=mysqli_fetch_array($res4))
		{
		?>
            <option value="<?php echo $res5[0] ?>"><?php echo $res5[1] ?></option>
            <?php } ?>
        </select><br />
		<br />
        <input type="submit" name="Submit" class="submit" value="Submit"  onclick="return valid();"/>
	  <?php
	  if(isset($_POST['Submit']))
	  {
	  $post=$_POST['post'];
	  $i=1;
	  $str="select questions.* from questions,vacancy_questions where questions.qid=vacancy_questions.qid and vacancy_questions.vid='$post' and questions.c_logid='$lid'";
	  $res=mysqli_query($con,$str);
	  ?>
   </div>
</div>
    <p>&nbsp;</p>
    <table width="400" border="1" cellspacing="2" cellpadding="20">
      <tr>
        <th><strong>SI No </strong></td>
        <th><strong>Category</strong></td>
        <th><strong>Question</strong></td>
        <th><strong>Answer</strong></td>
        <th><strong>Mark</strong></td>
        <th><strong>Duration</strong></td>
		 <th><strong></strong></td>
      </tr>
	  
	  <?php
	  while($res1=mysqli_fetch_array($res))
	  {
	  ?>
      <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $res1[2] ?></td>
        <td><?php echo $res1[3] ?></td>
        <td><?php 
			$ans=$res1['answer'];
			if($ans=="a")
			{ echo $res1['op_a']; }
			elseif($ans=="b")
			{ echo $res1['op_b']; }
			elseif($ans=="c")
			{ echo $res1['op_c']; }
			else 
			{ echo $res1['op_d']; }
		 	?></td>
        <td><?php echo $res1[9] ?></td>
        <td><?php echo $res1[10] ?></td>
		<td><a href="deleteasqstn.php?id=<?php echo $res1[0] ?>"><img src="Delete_35px.png" title="Delete" /></a></td>
      </tr>
	  <?php } } ?>
    </table>
	
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </form>
</div>
</div>
</div>
</div>
</body>
</html>
<?php include("footer.html"); ?>

