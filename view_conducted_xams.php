<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><meta name="viewport" content="width=device-width"/>
<title> </title>
<!-- STYLES & JQUERY 
================================================== -->
</head>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
include("company_menu.php");
?>
<body>
<div class="grid">
<div align="center">

	<div class="shadowundertop">
</div>
		<div class="row">
		<div class="vuzz-pricing-content">
          <p>&nbsp;</p>
          <form id="form1" name="form1" method="post" action="">
            <div align="center">
              <p>
                <select name="clg">
                  <option value="-1">Select Institution</option>
                  <?php
				$str="select colleges.* from colleges,requests where requests.colid=colleges.logid and requests.c_logid=$lid and requests.status='Accepted'";
				$res=mysqli_query($con,$str);
	
		while($res1=mysqli_fetch_array($res))
		{
		?>
                      <option value="<?php echo $res1['logid'] ?>"><?php echo $res1[1] ?></option>
                  <?php }?>
                   
				?>
                </select>
				<input type="submit" name="Submit" value="Submit" />
                <?php 
	  if(isset($_POST['Submit']))
{
	$clg=$_POST['clg'];
	?>
	      
              </p>
              <p>
                
              </p>
            </div>
            <p>&nbsp;</p>
            <div align="center">
              <table width="443" border="0" cellspacing="1" cellpadding="20">
                <tr>
                  <th width="33"><strong>SI No </strong></td>
                  <th width="61"><strong>Date</strong></td>
                  <th width="102"><strong>Exam Name </strong></td>
                 
                  <th width="82">&nbsp;</th>
                </tr>
           <?php
	 $i=1;
	  $str="select exam.*,vacancies.post from vacancies,exam where vacancies.clogid='$lid' and vacancies.vid=exam.vid and exam.clid='$clg'";
	  $res=mysqli_query($con,$str);
	  while($res1=mysqli_fetch_array($res))
	  {
	
	
	  ?>  
                <tr>
                  <td><?php echo $i++; ?></td>
        <td><?php echo $res1['date'] ?></td>
        <td><?php echo $res1['post'] ?></td>
	
            <td><a href="delteexam.php"><img src="Delete_35px.png" />Delete</a></td>
      </tr>
                
                <?php } } ?>
              </table>
            </div>
              </div>
     </div>
     </div>
                       </div>
          </form>
</body>
</html>

<?php include "footer.html" ?>