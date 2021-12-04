<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
$type=$_SESSION['type'];

	 include("company_menu.php");  
?>
 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title></head>

<body>
<center>
<div class="grid">



		<div class="row">
		<h1 align="center">View Result</h1>
			<div class="shadowundertop"><a href="file:///C|/Users/dell/AppData/Local/Temp/More_48px.png"></a> </div>
  <form id="p_student" name="p_student" method="post" action="">
     
    <div align="center">
	  <p>
	    <select name="post">
	      <option value="-1">Select Post</option>
		   <?php
		$a="select * from vacancies where clogid='$lid'";
		$res=mysqli_query($con,$a);
		while($res1=mysqli_fetch_array($res))
		{
		?>
			<option value="<?php echo $res1[0] ?>"><?php echo $res1[1] ?></option>
		<?php } ?>
	      </select>
	  </p>
	  <p>
	    <input type="submit" name="Submit" value="Submit" />
</p>
	  <p>
	    <?php
		 if(isset($_POST['Submit']))
		 {
		 $post=$_POST['post'];
	  $str="select student_list.*,colleges.college_name,vacancies.post,students.first_name,last_name,email from student_list,students,companies,colleges,vacancies,exam where companies.logid=vacancies.clogid and vacancies.vid=exam.vid and exam.examid=student_list.examid and colleges.logid=students.c_logid and student_list.studid=students.logid and vacancies.vid='$post' and companies.logid='$lid' order by percentage desc ";
 
	  $res=mysqli_query($con,$str);
	  if(mysqli_num_rows($res)>0)
	  {
	  ?>
	    </p>
	  <table width="540" border="1" cellspacing="2" cellpadding="10">
        <tr>
          <th width="20" scope="col">SI No</th>
            <th width="40" scope="col">Name</th>
           
            <th width="51" scope="col">College</th>
            <th width="75" scope="col">Percentage</th>
			            <th width="42" scope="col">Status</th>
            <th width="52" scope="col">&nbsp;</th>
			<th width="35"></th>

        </tr>
      
        <tr>
		
	  <?php
	  $i=1;
	  while($res1=mysqli_fetch_array($res))
	  {
	  ?>
          <td><?php echo $i++; ?></td>
            <td><?php echo $res1['first_name'] ?> <?php $res1['last_name'] ?></td>
            <td><?php echo $res1['college_name'] ?></td>
            <td><?php echo $res1['percentage'] ?><img src="Percentage_48px_1.png" width="17" height="13" align="absmiddle" /></td>
			
            <td><?php echo $res1['status'] ?></td>
            <td><p><a href="view_more.php?id=<?php echo $res1['onlineexamid'] ?>& name=<?php echo $res1['first_name'] ?>"><img src="More_48px.png" title="More" width="48" height="48" /></a><a href="view_more.php?id=<?php echo $res1['onlineexamid']; ?>&name=<?php echo $res1['first_name']; ?>"></a></p>
            </td>
			<td><a href="send_mail_cmpny.php?id=<?php echo $res1['email']; ?>&post=<?php echo $res1['post'] ?>&name=<?php echo $lid; ?>"><img src="Send_35px.png" title="<?php echo $res1['email'] ?>" /></a></td>
        </tr>
        <?php } }else{ echo "Result is empty.."; } } ?>
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
