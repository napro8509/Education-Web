<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - Elements</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/elements_styles.css">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
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

			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Danh sách bài học</h1>
		</div>
	</div>

	<!-- Elements -->

	<div class="elements">

		<!-- Progress Bars and Accordions -->

		<div class="pbars_accordions">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<?php
						$query_2="SELECT * FROM monhoc";
						$results_2=mysqli_query($dbc,$query_2);
						kt_query($results_2,$query_2);
						while($mh=mysqli_fetch_array($results_2,MYSQLI_ASSOC))
						{
						?>
						<div class="elements_title"><?php echo $mh['TenMonHoc']; ?></div>

				<div class="row pbars_accordions_container">
					<!-- Progress Bars & Accordions -->	

					<div class="col-lg-9">

						<!-- Accordions -->
						<div class="elements_accordions">

							<?php
						$query_1="SELECT * FROM tblchuong WHERE MaMonHoc=".$mh['MaMonHoc'];
						$results_1=mysqli_query($dbc,$query_1);
						kt_query($results_1,$query_1);
						while($ch=mysqli_fetch_array($results_1,MYSQLI_ASSOC))
						{
						?>
                            <div class="accordion_container">

                            <div class="accordion d-flex flex-row align-items-center">
									<?php echo $ch['TenChuong']; ?>
								</div>
																<div class="accordion_panel">

								<?php
								$query="SELECT * FROM chitietcongthuc WHERE MaChuong=".$ch['MaChuong'];
								$results=mysqli_query($dbc,$query);
								kt_query($results,$query);
								while($ct=mysqli_fetch_array($results,MYSQLI_ASSOC))
								{
								?>
									<div class="d-flex flex-row" style="justify-content: space-between;">
										<p href='#'><?php echo $ct['TenCongThuc']; ?></p>
										<p>Số lượt học: 200; Số câu hỏi: 50</p>
									</div>

								<?php } ?>
								</div>
                            </div>

                        <?php } ?>


						</div>
					</div>

				</div>
			<?php } ?>
			</div>
		</div>
            </div>
        </div>

        <!-- Loaders -->

		<div class="loaders">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="elements_title">Thống kê</div>
					</div>
				</div>

				<div class="row elements_loaders_container">
					<div class="col-lg-3 loader_col">
						<!-- Loader -->
						<div class="loader" data-perc="0.75"></div>
						<div class="loader_text text-center">Photos Taken</div>
						<div class="loader_sub text-center">Etiam nec odio vestibulum est.</div>
					</div>
					<div class="col-lg-3 loader_col">
						<!-- Loader -->
						<div class="loader" data-perc="0.83"></div>
						<div class="loader_text text-center">Km Walked</div>
						<div class="loader_sub text-center">Odio vestibulum est mattis.</div>
						<span></span>
					</div>
					<div class="col-lg-3 loader_col">
						<!-- Loader -->
						<div class="loader" data-perc="0.25"></div>
						<div class="loader_text text-center">Cities Visited</div>
						<div class="loader_sub text-center">Vestibulum est mattis effic.</div>
					</div>
					<div class="col-lg-3 loader_col">
						<!-- Loader -->
						<div class="loader" data-perc="0.95"></div>
						<div class="loader_text text-center">Cities Visited</div>
						<div class="loader_sub text-center">Vestibulum est mattis effic.</div>
					</div>
				</div>

			</div>
		</div>
		
		<!-- Milestones -->
		
		<?php include("milestone.php"); ?>

		<!-- Icon Boxes -->

	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span>Colorlib All rights reserved</span>
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
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/elements_custom.js"></script>

</body>
</html>