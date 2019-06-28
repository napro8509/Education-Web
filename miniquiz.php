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

	<!-- Header -->

	<?php include("header.php"); ?>
	
	<!-- Menu -->
	<?php include("menu.php"); ?>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/courses_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Courses</h1>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					
				</div>
			</div>

			<div class="row course_boxes">
<body style=" background-image: linear-gradient(120deg, rgb(132, 250, 176) 0%, rgb(143, 211, 244) 100%);"
>
	<?php
			$congthuc=$_GET['congthuc'];
			$id_questions=$_GET['cauhoi'];
			$answers_right=$_GET['dung'];
			$answers_wrong=$_GET['sai'];
			$answers_questions=1;
			$answers_choose=-1;
			$number=$answers_right+$answers_wrong+1;

	?>
	<div class="main"> 
	<div class="form" style="
    padding-top: 6rem;
    padding-right: 10rem;
    padding-bottom: 5rem;
    padding-left: 10rem;
	">		
		<div class="row" style="
		display: flex;
		flex-direction: column;
		align-items: center;
		">
			<?php
			$kq_1="SELECT COUNT(id) FROM questions WHERE MaCongThuc=".$congthuc;
			$k_q_1=mysqli_query($dbc,$kq_1);
			$count_1=mysqli_fetch_assoc($k_q_1);
			if($count_1['COUNT(id)']=='0')
			{
				echo "<h1> Chưa có bài kiểm tra</h1>";

			}
			else
			{
			$kq="SELECT COUNT(id) FROM questions WHERE id>".$id_questions." AND MaCongThuc=".$congthuc." ORDER BY id ASC LIMIT 1";
			$k_q=mysqli_query($dbc,$kq);
			$count=mysqli_fetch_assoc($k_q);

			// echo "-------------";
			// echo $count['COUNT(id)'];
			// echo "-------------";
			if($count['COUNT(id)']=='0')
			{
				echo "<h1> Mức độ hiểu bài</h1>";
				$mucdohieubai = (float)$answers_right/((float)$answers_right+(float)$answers_wrong);
				
				if($mucdohieubai>=0.8)
					echo "<h2>Hiểu Bài</h2>";
				else if($mucdohieubai>=0.6)
					echo "<h2>Tạm Chấp Nhận</h2>";
				else if($mucdohieubai>=0.4)
					echo "<h2>Chưa nắm vững</h2>";
				else 
					echo "<h2>Chưa hiểu bài</h2>";

			}
			else
			{
				$query="SELECT * FROM questions WHERE id >".$id_questions." AND MaCongThuc=".$congthuc." ORDER BY id ASC LIMIT 1";
				$results=mysqli_query($dbc,$query);
				kt_query($results,$query);
				while($question=mysqli_fetch_array($results,MYSQLI_ASSOC))
				{

					$query_2="SELECT * FROM chitietcongthuc WHERE MaChiTiet=".$congthuc;
					$results_2=mysqli_query($dbc,$query_2);
					kt_query($results_2,$query_2);
					$title=mysqli_fetch_assoc($results_2);

				?>
					<div class="section_title text-center">
						<h1><?php echo $title["TenCongThuc"]; ?></h1>
					</div>
					<div style="
						align-self: center;
					">

						<h1><?php echo "Câu số ".$number." : ".$question['name_question'];?></h1>
					</div>
					<?php
					$query_1="SELECT * FROM `answers` WHERE questions_id=".$question['id'];
					$results_1=mysqli_query($dbc,$query_1);
					kt_query($results_1,$query_1);
					$answers_questions=3;
					while($answers=mysqli_fetch_array($results_1,MYSQLI_ASSOC))
					{
						if($answers['cheking']==1)
							$answers_questions=$answers['id'];
						?>
						<button
							style="
								width: 400px;
							    height: 50px;
							    display: flex;
							    align-self: center;
							    border-radius: 30px;
							    padding-left: 20px;
							    background: darkmagenta;
							    color: white;
							    font-size: 18px;	
							"
						 class="btn-primary <?= $answers['id']; ?>" value="<?php echo $answers['id']; ?>"><?php echo $answers['name_answer']; ?></button>
						<br/>

						<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
						<script type="text/javascript">
						$(document).ready(function(){
							let btnConfirm =document.getElementById('xn');
	                		let btnnext =document.getElementById('ne_xt');
							$(".<?= $answers['id']; ?>").click(function(){
							        $answers_choose = <?= $answers['id']; ?>;
							        btnConfirm.click();
							        setTimeout(function(){
							         btnnext.click(); }, 600);
							        
							    });
						});
						</script>
						<?php
					}
					
				}
				?>
				<button type="" class="btn btn-primary btn-block confirm" id="xn" style="display:none;">check</button>
				<button class="btn btn-default btn-block disabled next" id="ne_xt" style="display:none;" >Tiếp theo</button>
			<?php } }?>
		</div>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
	var d;
	var s;
	$(function(){
		$('.confirm').click(function(){
			var answers_questions = <?=$answers_questions?>;

			if($answers_choose == answers_questions)
			{
				var right_answers = <?=$answers_right?>;
				var dung = parseInt(right_answers)+1;

				var sai = <?=$answers_wrong?>;
				$('.'+$answers_choose).css({"background":"green"});

			}
			else
			{
				var wrong_answers = <?=$answers_wrong?>;
				var sai = parseInt(wrong_answers)+1;
				
				var dung = <?=$answers_right?>;
				$('.'+$answers_choose).css({"background":"red"});
				$('.'+<?=$answers_questions?>).css({"background":"green"});

			}
			d = dung;
			s = sai;

		});

		// xu ly load next question
		$('.next').click(function(){
			<?php $cauhoi=intval($id_questions)+1;
			$ch=(string)$cauhoi;
			$ct=$_GET['congthuc'];
			$query="SELECT * FROM questions WHERE id >".$id_questions." AND MaCongThuc=".$congthuc." ORDER BY id ASC LIMIT 1";
				$results=mysqli_query($dbc,$query);
				kt_query($results,$query);
				$question=mysqli_fetch_array($results,MYSQLI_ASSOC)
			?>

			window.location.href = "miniquiz.php?congthuc=<?php echo $congthuc; ?>&cauhoi=<?php echo $question['id'];; ?>&dung="+d+"&sai="+s;
		});
	});
</script>
				<!-- Popular Course Item -->
				<!-- <div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="<?php echo "images/course_".$i.".jpg" ?>" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php"><?php echo $courses['TenChuong']; ?></a></div>
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
				</div> -->
				<?php
				 ?>
			</div>
		</div>		
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->

			<div class="newsletter">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Subscribe to newsletter</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col text-center">
						<div class="newsletter_form_container mx-auto">
							<form action="post">
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
									<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
									<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="images/logo.png" alt="">
								<span>course</span>
							</div>
						</div>

						<p class="footer_about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum, tempor lacus.</p>

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="index.php">Home</a></li>
								<li class="footer_list_item"><a href="#">About Us</a></li>
								<li class="footer_list_item"><a href="#">Courses</a></li>
								<li class="footer_list_item"><a href="news.php">News</a></li>
								<li class="footer_list_item"><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Usefull Links -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Usefull Links</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="#">Testimonials</a></li>
								<li class="footer_list_item"><a href="#">FAQ</a></li>
								<li class="footer_list_item"><a href="#">Community</a></li>
								<li class="footer_list_item"><a href="#">Campus Pictures</a></li>
								<li class="footer_list_item"><a href="#">Tuitions</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contact</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Blvd Libertad, 34 m05200 Arévalo
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									0034 37483 2445 322
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>hello@company.com
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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