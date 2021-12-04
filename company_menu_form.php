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
			<a href="company_menu_form.php">
			
			</a>
		</div>
		<!--Menu-->
		<div class="c8">
			<nav id="topNav">
			<ul id="responsivemenu">
				<li class="active"><a href="company home.php"><i class="icon-home homeicon"></i><span class="showmobile">Home</span></a></li>
				<li><a href="#">Vacancy</a>
				<ul style="display: none;">
					<li><a href="add_vacancy.php">Add Vacancy</a></li>
					<li><a href="view_vacancies_cmpny.php">View Vacancy</a></li>					
				</ul>
				</li>
				<li><a href="#">Exam</a>
				<ul style="display: none;">					
					
					<li><a href="view_conducted_xams.php">View Exams</a></li>
					<li><a href="assign_questions.php">Assign Question</a></li>
					<li><a href="view_assign_qstn.php">View Assigned Questions</a></li>
					<li><a href="selected_students_college_view.php">View Selected Students</a></li>
					<li><a href="company_view_result.php">View Result</a></li>
				</ul>
				</li>
				<li><a href="#">Question</a>
				<ul>
					<li><a href="add_qustion.php">Add Question</a></li>
					<li><a href="view_qstn.php">View Questions</a></li>
					<li></li>
				</ul>
				</li>	
				</li>
				<li><a href="#">More..</a>
				<ul style="display: none;">					
					<li><a href="view_request.php">View Request</a></li>
					
					<li><a href="companyfeed.php">View Feedbacks</a></li>
                    <li><a href="view_notifi.php">Notifications</a></li>
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
				<h1 class="titlehead">My Exam</h1>
			</div>
			<div class="c4">
				<h1 class="titlehead rightareaheader">Online examination</h1>
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


