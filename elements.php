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

<div class="super_container">

	<?php include("header.php"); ?>
	
	<!-- Menu -->
	<?php include("menu.php"); ?>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Contact</h1>
		</div>
	</div>

	<!-- Elements -->

	<div class="elements">

		<!-- Buttons -->
		<div class="buttons">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="elements_title">Buttons</div>
						<div class="buttons_container">
							<div class="button button_color_1 text-center trans_200"><a href="#">Read More</a></div>
							<div class="button button_color_2 text-center trans_200"><a href="#">Read More</a></div>
							<div class="button button_line_1 text-center trans_200"><a href="#">Read More</a></div>
							<div class="button button_line_2 text-center trans_200"><a href="#">Read More</a></div>
						</div>
					</div>
				</div>
			</div>	
		</div>

		<!-- Progress Bars and Accordions -->

		<div class="pbars_accordions">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="elements_title">Progress Bars & Accordions</div>
					</div>
				</div>

				<div class="row pbars_accordions_container">
					<!-- Progress Bars & Accordions -->

					<div class="col-lg-6">
						
						<!-- Progress Bars -->
						<div class="elements_progress_bars">

							<div class="pbar_container">
								<ul class="progress_bar_container col_12 clearfix">
									<li class="pb_item">
										<h4>Developement</h4>
										<div id="skill_1_pbar" class="skill_bars" data-perc="0.85"></div>
									</li>
									<li class="pb_item">
										<h4>Design</h4>
										<div id="skill_2_pbar" class="skill_bars" data-perc="1"></div>
									</li>
									<li class="pb_item">
										<h4>SEO</h4>
										<div id="skill_3_pbar" class="skill_bars" data-perc="0.75"></div>
									</li>
									<li class="pb_item">
										<h4>Marketing</h4>
										<div id="skill_4_pbar" class="skill_bars" data-perc="0.95"></div>
									</li>
								</ul>
							</div>

						</div>
					</div>

					<div class="col-lg-6">

						<!-- Accordions -->
						<div class="elements_accordions">

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"> Phasellus vestibulum, quam tincidunt venen.</div>
								<div class="accordion_panel">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam.</p>
								</div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"> Phasellus vestibulum, quam tincidunt venen.</div>
								<div class="accordion_panel">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam.</p>
								</div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"> Phasellus vestibulum, quam tincidunt venen.</div>
								<div class="accordion_panel">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam.</p>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
		
		<!-- Loaders -->

		<div class="loaders">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="elements_title">Loaders</div>
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

		<div class="icon_boxes">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="elements_title">Icon Boxes</div>
					</div>
				</div>

				<div class="row icon_boxes_container">

					<div class="col-lg-4 icon_box text-left d-flex flex-column align-items-start justify-content-start">
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="images/earth-globe.svg" alt="">
						</div>
						<h3>Online Courses</h3>
						<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
					</div>

					<div class="col-lg-4 icon_box text-left d-flex flex-column align-items-start justify-content-start">
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="images/exam.svg" alt="">
						</div>
						<h3>Indoor Courses</h3>
						<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
					</div>

					<div class="col-lg-4 icon_box text-left d-flex flex-column align-items-start justify-content-start">
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="images/books.svg" alt="">
						</div>
						<h3>Amazing Library</h3>
						<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
					</div>

				</div>

			</div>
		</div>

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