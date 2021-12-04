<!DOCTYPE HTML>
<html>
<head><meta name="viewport" content="width=device-width"/>
<title>Online examination admin panel</title>
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/slider.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- change skin color -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<script src="js/jquery-1.9.0.min.js"></script><!-- the rest of the scripts at the bottom of the document -->
</head>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
$type=$_SESSION['type'];
?>

<body>
<!-- TOP LOGO & MENU
================================================== -->
<div class="grid">
	<div class="row space-bot">
		<!--Logo-->
		<div class="c4">
			<a href="admin_home.php">
			
			</a>
		</div>
		<!--Menu-->
		<div class="c8">
			<nav id="topNav">
			<ul id="responsivemenu">
				<li class="active"><a href="admin_home.php"><i class="icon-home homeicon"></i><span class="showmobile">Home</span></a></li>
				<li><a href="#">College</a>
				<ul style="display: none;">
					<li><a href="add_college.php">Register</a></li>
					<li><a href="view_college.php">List</a></li>
					<li><a href="req_status.php">Request status</a></li>					
				</ul>
				</li>
				<li><a href="#">Company</a>
				<ul style="display: none;">					
					<li><a href="add_company.php">Register</a></li>
					<li><a href="view_companies_list.php">List</a></li>
					<li><a href="view_feedback.php">Company Feedbacks</a></li>
				</ul>
				</li>
				<li><a href="#">Student</a>
				<ul>
					<li><a href="admin_view_student.php">Student List</a></li>
					
					<li><a href="view_result_admin.php">Result</a></li>
				</ul>
				</li>	
				</li>
				<li><a href="#">Notification</a>
				<ul style="display: none;">					
					<li><a href="provide_notification.php">New</a></li>
					<li><a href="view_notifications.php">View</a></li>
										<li class="last"><a href="changepwd.php">Change password</a></li>
				</ul>
				</li>			
				<li class="last"><a href="index.php">Logout</a></li>
			
			</ul>
			</nav>
		</div>
	</div>
</div>

<!-- START content area
================================================== -->
<div class="undermenuarea">
	<div class="boxedshadow">
	</div>
	<!-- SLIDER AREA
	================================================== -->
	<div id="da-slider" class="da-slider">
		<!--Slide 1-->
		<div class="da-slide">
			<h2>Efficient</h2>
			<p>
			With th right, it controls the whole exam process and also simplifies every step from conducting exams to the evaluation process. It brings efficiency in the exam process and makes it more competitive. The probability of errors in the evaluation and results is very less.
			</p>
			<a href="#" class="da-link" style="width:202px;">Learn More..</a>
			<div class="da-img">
				<img src="" height="420" width="238" alt="">
			</div>
		</div>
		<!--Slide 2-->
		<div class="da-slide">
			<h2>Earn job easily</h2>
			<p>
				 We made this as an online interview application, and the students can get a job by attending exams,thereby start a career easily. It also reduces the time of companies and institutions
			</p>
			<a href="#" class="da-link" style="width:192px;">Learn more..</a>
			
		</div>
		<!--Slide 3-->
		<div class="da-slide">
			<h2>  Security </h2>
			<p>
				 It is secure with a proper mechanism to store results and also provides time management, authentic exams also become possible without the need of an examiner.  
			</p>
			<a href="#" class="da-link" style="width:224px;">Learn more</a>
			
		</div>
		<nav class="da-arrows">
		<span class="da-arrows-prev"></span>
		<span class="da-arrows-next"></span>		</nav>
	</div>
</div>





<div class="grid">
	<div class="row space-bot">
		<!--INTRO-->
		<div class="c12">
			<div class="royalcontent">
			<br>
			<br>
			<br>
				<h1 class="royalheader">WELCOME MY EXAM, ONLINE EXAMINATION SYSTEM</h1>
				<h1 class="title" style="text-transform:none;">Prepare candidates to perform extraordinarily with an easy to use highly interactive platform and 
simplify the assessment cycle. </h1>
			</div>
		</div>
		<!--Box 1-->
		<div class="c4">
			<h2 class="title hometitlebg"><i class="icon-qrcode smallrightmargin"></i>Easy to Use</h2>
			<div class="noshadowbox">
				<h5>ACCURACY</h5>
				<p>
					 One-stop-destination for examination, preparation, recruitment, and more. Specially designed online examination system to solve all your preparation worries. The platform is smooth to use with a translational flow of information.
				</p>
				<p class="bottomlink">
					<a href="#" class="neutralbutton"><i class="icon-link"></i></a>
				</p>
			</div>
		</div>
		<!--Box 2-->
		<div class="c4">
			<h2 class="title hometitlebg"><i class="icon-cog smallrightmargin"></i>Get start your Career</h2>
			<div class="noshadowbox">
				<h5>GET JOB</h5>
				<p>
					Consider it as a first stage of interview, Candidates can easily get a job easily with the My exam, Companies can select candidates as their clients by conducting exams and also it reduces yuor valuable time. 
				</p>
				<p class="bottomlink">
					<a href="#" class="neutralbutton"><i class="icon-link"></i></a>
				</p>
			</div>
		</div>
		<!--Box 3-->
		<div class="c4">
			<h2 class="title hometitlebg"><i class="icon-user" style="margin-right:10px;"></i>Advanced Reporting System</h2>
			<div class="noshadowbox">
				<h5>QUICK RESULT</h5>
				<p>
					Instant scorecard generation, computational analysis, efficient feedback sharing to boost up your performance and precision. An ultimate combination of detailed and drilled methodologies that will eventually complement your skills and grades.
				</p>
				<p class="bottomlink">
					<a href="#" class="neutralbutton"><i class="icon-link"></i></a>
				</p>
			</div>
		</div>
	</div>
	
	<!-- CALL TO ACTION 
	================================================== -->
	<div class="row space-bot">
		<div class="c12">
			<div class="wrapaction">
				<div class="c9">
					<h1 class="subtitles">MyExam is incredibly awesome, with a refreshingly clean design</h1>
					
MyExam online Exam portal is the best mode to track the students' capabilities and test them, propel them in high levels to act their best in the next attack.MyExam also assisting the students and educational institutes transcend geographical boundaries and time restraints in the chore of constant evaluation of pupil functioning. The MyExam Portal provides intensive tools to admin, monitor and grade exams online.
				</div>
				<div class="c3 text-center" style="margin-top:40px;">
					
				</div>
			</div>
		</div>
	</div>
</div><!-- end grid -->
<!-- FOOTER
================================================== -->
<div id="wrapfooter">
	<div class="grid">
		<div class="row" id="footer">
			<!-- to top button  -->
			<p class="back-top floatright">
				<a href="#top"><span></span></a>
			</p>
			<!-- 1st column -->
			<div class="c3">
				
			</div>
			<!-- 2nd column -->
			<div class="c3">
				<h2 style="color:#FFFFFF">MyExam</h2>
				<hr class="footerstress">
				<div id="ticker" class="query">
				</div>
			</div>
			<!-- 3rd column -->
			<div class="c3">
				
				<ul class="social-links" style="margin-top:15px;">
					<li class="twitter-link smallrightmargin">
					<a href="#" class="twitter has-tip" target="_blank" title="Follow Us on Twitter">Twitter</a>
					</li>
					<li class="facebook-link smallrightmargin">
					<a href="#" class="facebook has-tip" target="_blank" title="Join us on Facebook">Facebook</a>
					</li>
					<li class="google-link smallrightmargin">
					<a href="#" class="google has-tip" title="Google +" target="_blank">Google</a>
					</li>
					<li class="linkedin-link smallrightmargin">
					<a href="#" class="linkedin has-tip" title="Linkedin" target="_blank">Linkedin</a>
					</li>
					<li class="pinterest-link smallrightmargin">
					<a href="#" class="pinterest has-tip" title="Pinterest" target="_blank">Pinterest</a>
					</li>
				</ul>
			</div>
			<!-- 4th column -->
			<div class="c3">
				
			</div>
			<!-- end 4th column -->
		</div>
	</div>
</div>
<!-- copyright area -->
<div class="copyright">
	<div class="grid">
		<div class="row">
			<div class="c6">
				MyExam &copy; 2018. All Rights Reserved.
			</div>
			<div class="c6">
				<span class="right">
				privacy policy </span>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT AREA -->
<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- slider -->
<script src="js/jquery.cslider.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- carousel items -->
<script src="js/jquery.carouFredSel-6.0.3-packed.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- Call Showcase - change 4 from min:4 and max:4 to the number of items you want visible -->
<script type="text/javascript">
$(window).load(function(){			
			$('#recent-projects').carouFredSel({
				responsive: true,
				width: '100%',
				auto: true,
				circular	: true,
				infinite	: false,
				prev : {
					button		: "#car_prev",
					key			: "left",
						},
				next : {
					button		: "#car_next",
					key			: "right",
							},
				swipe: {
					onMouse: true,
					onTouch: true
					},
				scroll : 2000,
				items: {
					visible: {
						min: 4,
						max: 4
					}
				}
			});
		});	
</script>

<!-- Call opacity on hover images from carousel-->
<script type="text/javascript">
$(document).ready(function(){
    $("img.imgOpa").hover(function() {
      $(this).stop().animate({opacity: "0.6"}, 'slow');
    },
    function() {
      $(this).stop().animate({opacity: "1.0"}, 'slow');
    });
  });
</script>
</body>
</html>