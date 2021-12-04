
<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
include("company_menu.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div class="grid">
<center>
  <h1><b>
    <font size="30" color="#000000">Request from college </font></b>  </h1>
  <form id="form1" name="form1" method="post" action="">
    <table width="548" border="1" cellspacing="1" cellpadding="10">
      <tr>
        <th width="46"><strong>SI No </strong></td>
        <th width="59"><strong>College name </strong></td>
        <th width="67"><strong>Address</strong></td>
        <th width="46"><strong>Phone</strong></td>
        <th width="56"><strong>Mail</strong></td>
		<th width="44"></th>
      </tr>
     
	  <?php
	  $i=1;
	  $str="select colleges.*,requests.* from colleges,requests where requests.colid=colleges.logid and requests.c_logid='$lid'";
	  $res=mysqli_query($con,$str);
	   while($res1=mysqli_fetch_array($res))
	   {
	   
	  ?>
	   <tr>
	   <td><?php echo $i++ ?></td>
        <td><?php echo $res1[1]?></td>
        <td><?php echo $res1[2] ?><br><?php echo $res1[3] ?><br><?php echo $res1[4] ?><br><?php echo $res1[5] ?></td>
        <td><?php echo $res1[6] ?></td>
        <td><?php echo $res1[7] ?></td>
      
		<?php
		if($res1[12]=="Pending")
		{
		?>
		
		
		  <td><p><a href="accept.php?rid=<?php echo $res1['rqid']?>">Accept</a><br /><a href="reject.php?rid=<?php echo $res1['rqid']?>">Reject</a></p> </td>
		
		<?php }
		else
		{
		?>
		<td width="66"><?php echo $res1[12] ?><br />
		<a href="add_exam.php?id=<?php echo $res1['logid'] ?>">Set Exam Date</a>
		</td>
		<?php
		}
		?>
		     
      </tr>
	  <?php  } ?>
    </table>
  </form>
</center>
</div>
</body>
</html>
<?php include("footer.html"); ?>