
<!doctype html>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>anatine - a free css template</title>
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
						 <?php
	$str="select * from companies  ";
	
	
	$res=mysqli_query($con,$str);
	if(mysqli_num_rows($res)>0)
	{
	?>
    <table width="400" border="1" cellspacing="1" cellpadding="20">
      <tr>
        <th scope="col">SI No </th>
        
        <th scope="col">Company</th>
      </tr>
	  <?php
	$i=1;
	while($res1=mysqli_fetch_array($res))
	{
	?>
      <tr>
        <td><?php echo $i ?></td>
        
        <td><a href="vacancies_list.php?id=<?php echo $res1['logid']?>"><?php echo $res1['company_name'] ?></a></td>
      </tr>
	  <?php $i++ ?>
	<?php }  }else{  echo "No vacancies ";  } ?>
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