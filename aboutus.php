<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - Courses</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/teachers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/teachers_responsive.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php 
include('inc/myconnect.php');
include('inc/function.php');
?>
<div class="super_container">

	<?php include("header.php"); ?>
	
	<!-- Menu -->
	<?php include("menu.php"); ?>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/courses_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Đội ngũ chủ chốt</h1>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Đội ngũ chủ chốt</h1>
					</div>
				</div>
			</div>
			<div class="col-md-12 animate-box">
				<div class="course">
					<a href="#" class="course-img" style="background-image: url(images/thayhoan.jpg);">
					</a>
					<div class="desc">
						<h1 align="center">Giám đốc : Nguyễn Công Hoan</h1>
						<h1 align="center">Chủ dự án</a></h1>
						<p align="justify">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						<span><a href="#" class="btn btn-primary btn-sm btn-course">Thông Tin Chi Tiết</a></span>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/vietdung.jpg);">
						</a>
						<div class="desc">
							<h2 align="center">Trưởng phòng kỹ thuật</h2>
							<h2 align="center">Đặng Việt Dũng</h2>
							<p align="justify"></p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Thông Tin Chi Tiết</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/giona.jpg);">
						</a>
						<div class="desc">
							<h2 align="center" align="center">Trưởng phòng dịch vụ</h2>
							<h2 align="center">Lê Giô Na</h2>
							<p align="justify">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Thông Tin Chi Tiết</a></span>
						</div>
					</div>
				</div>
			</div>

		</div>		
	</div>
		<?php include("milestone.php"); ?>



<?php include("footer.php"); ?>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/courses_custom.js"></script>

</body>
</html>