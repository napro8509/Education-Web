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
<link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
</head>
<body>
<?php 
include('inc/myconnect.php');
include('inc/function.php');
?>
<div class="super_container">

	<?php include("teacher_header.php"); ?>
	
	<!-- Menu -->
	<?php include("menu.php"); ?>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/courses_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Khoá học</h1>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Tất cả khóa học</h1>
					</div>
				</div>
			<?php
				$query_2="SELECT * FROM monhoc";
				$results_2=mysqli_query($dbc,$query_2);
				kt_query($results_2,$query_2);
				while($mh=mysqli_fetch_array($results_2,MYSQLI_ASSOC))
				{
					?>
					<div class="row-no-margin"> 
					<h1 class="mt-4"><?php echo $mh['TenMonHoc'];?></h1>
				<div class="row course_boxes">
					<?php
						$query_1="SELECT * FROM tblchuong WHERE MaMonHoc=".$mh['MaMonHoc'];
						$results_1=mysqli_query($dbc,$query_1);
						kt_query($results_1,$query_1);
						$i=1;
						while($courses=mysqli_fetch_array($results_1,MYSQLI_ASSOC))
						{
							$query="SELECT count(MaChiTiet) FROM chitietcongthuc WHERE MaChuong=".$courses['MaChuong'];
							$results=mysqli_query($dbc,$query);
							kt_query($results,$query);
							$number=mysqli_fetch_array($results,MYSQLI_ASSOC);


					?>
					<!-- Popular Course Item -->
					<div class="col-lg-4 course_box">
						<div class="card">
							<div class="card-body text-center">
								<div class="card-title"><a href="courselist.php?chuong=<?php echo $courses['MaChuong']; ?>"><?php echo $courses['TenChuong']; ?></a></div>
								<img class="card-img-top" src="<?php echo $courses['image']; ?>" alt="https://unsplash.com/@kellybrito">
								<div class="card-text"><?php echo "Số lượng bài học: ".$number['count(MaChiTiet)']; ?></div>
							</div>
							<div class="price_box d-flex flex-row align-items-center">
								<div class="course_author_image">
									<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
								</div>
								<div class="course_author_name"><?php echo "Nguyễn Công Hoan"; ?><span></span></div>
								<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>Free</span></div>
							</div>
						</div>
					</div>
					<?php
					$i=$i%6+1; 
					$i++;
					}} ?>
				</div>
                    </div>
			</div>
		</div>		
	</div>
	</div>
	</div>
	</div>
    <div class="mt-4"/>
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