<!doctype html>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
$idd=$_GET['id'];
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online examination</title>
<link rel="stylesheet" href="styles1.css" type="text/css" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--
anatine, a free CSS web template by ZyPOP (zypopwebtemplates.com/)

Download: http://zypopwebtemplates.com/

License: Creative Commons Attribution
//-->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>

<body>

		<section id="body" class="width">
			<aside id="sidebar" class="column-left">

			<header>
				<h1><a href="#">anatine</a></h1>

				<h2>Welcome to my website!</h2>
				
			</header>
			
	
			<nav id="mainnav">
  				<ul>
                            		<li ><a href="Student_Home.php">Home<img src="Home_20px.png" width="25" height="25"></a></li>
                           		 <li ><a href="OnlineExamLogin.php">Exam Login<img src="Login Rounded Right_30px.png" width="25" height="25"></a></li>
                           		 <li><a href="send_feedback.php">Send Feedback<img src="Feedback_25px.png" width="25" height="25"></a></li>
                            		<li class="selected-item"><a href="view_vacancies_student.php">View Vacancy<img src="Job_25px.png" width="25" height="25"></a></li>
									<li><a href="login.php">Logout<img src="Logout Rounded Left_25px.png" width="25" height="25"></a></li></ul>
                        	</ul>
			</nav>
			</aside>
			<section id="content" class="column-right">
                		
	    <article>
				
			
			<h2>Examples......................................</h2>
<h2>Introduction to anatine hioooooooolllllllllllllllllllllllloooo</h2>

				
				
				<p>&nbsp;</p>
				
					
				
				
				
				
				
				<p>&nbsp;</p>
				
				<h3>Form</h3>
				<fieldset>


	

					<legend>Form legend</legend>
					<form id="form1" name="form1" method="post" action="">
						 <p><strong>VIEW VACANCIES </strong></p>
						
     <table width="848" border="1" align="center" cellpadding="20" cellspacing="2">
    <tr>
      <th width="41"><strong>Sl_no </strong></td>
      <th width="74"><strong>No_of post</strong></td>
      <th width="152"><strong>Vacancies</strong></td>
      <th width="48"><strong>Basic Pay </strong></td>
      <th width="52"><strong>Date</strong></td>
      <th width="103"><p><strong>File</strong></p></td>
	  <th width="66">Download</th>
    </tr>
	
    <tr>
	<?php
$str="select * from vacancies where clogid='$idd'";
$res=mysqli_query($con,$str);
	if(mysqli_num_rows($res)>0)
	{
	$i=1;
	while($res1=mysqli_fetch_array($res))
	{
?>
      <td><?php echo $i ?></td>
      <td><?php echo $res1['no_vacancies'] ?></td>
      <td><?php echo $res1['post'] ?></td>
      <td><?php echo $res1['basic_pay'] ?></td>
	  <td><?php echo $res1['vdate'] ?></td>
      <td><?php echo $res1['file'] ?></td>
      <td><a href="files/<?php echo $res1['file']?>"><img src="Download_48px_1.png" width="48" height="48" align="middle" /></a></td>
    </tr>
	<?php $i++ ?>
	<?php } }else{  echo "No vacancies ";  } ?>
  </table>
	
						<p> </></p>
					</form>
	
				</fieldset>
		</article>

			
			<footer class="clear">
				<p>&copy; 2015 sitename. <a href="http://zypopwebtemplates.com/">Free CSS Templates</a> by ZyPOP</p>
			</footer>

		</section>

		<div class="clear"></div>

	</section>
	

</body>
</html>