<!DOCTYPE HTML>
<html>
<head><meta name="viewport" content="width=device-width"/>
<title>Salique Theme Multipurpose Responsive </title>
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/styleform.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- Change skin color here -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<script src="js/jquery-1.9.0.min.js"></script><!-- scripts at the bottom of the document -->
</head>
<body>
<!-- TOP LOGO & MENU
================================================== -->
<div class="grid">
	<div class="row space-bot">
		<!--Logo-->
		<div class="c4">
			<a href="college_home.php">
				<img src="images/logo.png" class="logo" alt="">
			</a>
		</div>
		<!--Menu-->
		<div class="c8">
			<nav id="topNav">
			<ul id="responsivemenu">
				<li class="active"><a href="college_home.php"><i class="icon-home homeicon"></i><span class="showmobile">Home</span></a></li>
				<li><a href="#">Department</a>
				<ul style="display: none;">
					<li><a href="add_department.php">Add Department</a></li>
					<li><a href="view_departments.php">View Departments</a></li>					
					
				</ul>
				</li>
				<li><a href="#">Company</a>
				<ul style="display: none;">					
					<li><a href="send_request.php">Sent Request</a><a href="send_request.php"></a></li>
					<li><a href="view_companies_list.php">View Companies</a></li>
                    <li><a href="view_notifi.php">Notifications</a></li>
									
				</ul>
				</li>
				<li><a href="#">Student Reg</a>
				<ul>
					<li><a href="Student_reg.php">Register Student</a></li>
					<li><a href="view_student.php">View Student</a></li>
					<li></li>
					
				</ul>
				</li>	
				</li>
				<li><a href="#">Selected Students</a>
				<ul style="display: none;">					
					<li><a href="add_student.php">Add Student</a></li>
					<li><a href="selected_students_college_view.php">Selected Students</a></li>
					<li> <a href="view_result.php">View Result</a></li>

  				</ul>
				<li class="last"><a href="index.php">Logout</a></li>
				
			</ul>
			</nav>
		</div>
	</div>
</div>
<!-- HEADER
================================================== -->
<div class="undermenuarea">
	<div class="boxedshadow">
	</div>
	<div class="grid">
		<div class="row">
			<div class="c8">
				<h1 class="titlehead">Meet the Staff</h1>
			</div>
			<div class="c4">
				<h1 class="titlehead rightareaheader"><i class="icon-map-marker"></i> Call Us Now 1-318-107-432</h1>
			</div>
		</div>
	</div>
</div>
<!-- CONTENT
================================================== -->







<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- carousel -->
<script src="js/jquery.carouFredSel-6.0.3-packed.js"></script>

<!-- Call Showcase Team- change 4 from min:4 and max:4 to the number of items you want visible -->
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

<!-- CALL opacity on hover images -->
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
