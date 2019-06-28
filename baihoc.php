<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact V6</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/teachers_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/teachers_responsive.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="super_container">
    <?php include "teacher_header.php";?>
            <?php include_once('inc/function.php'); ?>
        <?php include('inc/myconnect.php'); ?>

</div>


<div class="container-contact100">
    <div class="wrap-contact100 fade-in">
        <button class="contact100-btn-hide">
            <i class="fa fa-close" aria-hidden="true"></i>
        </button>

        <form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Thêm bài học
				</span>

            <div class="form-group">
                <label style="display:block;">Chương</label>
                <?php $chuong=$_GET['chuong'];
                if(!$chuong)
                {
                    $chuong=0;
                selectCtrl_2('TenChuong','forFormdim',$chuong);
            } ?>
            </div>

             <div class="wrap-input100 " data-validate = "Valid email is required: ex@abc.xyz">
                <span class="label-input100">Tên bài học</span>
                <input class="input100" type="text"  placeholder="Nhập tên bài học...">
                <span class=""></span>
            </div>

            <div class="wrap-input100" data-validate = "Message is required">
                <span class="label-input100">Mô tả bài học</span>
                <textarea class="input100" placeholder="Nhập mô tả bài ..."></textarea>
                <span class=""></span>
            </div>

            <div class="wrap-input100" 
                <span class="label-input100">Nội dung bài học</span>
                <textarea class="input100" name="noidung" placeholder="Nhập nội dung bài học"></textarea>
                <span class=""></span>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
						<span>
							Câu tiếp theo
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                </button>
            </div>


        </form>
        <a href="form.php"><button class="contact100-form-btn">
            Tạo bài kiểm tra
        </button></a>
        <span class="contact100-more">
				For any question contact our 24/7 call center: <span class="contact100-more-highlight">+001 345 6889</span>
			</span>
    </div>
</div>

<?php include "footer.1.php";?>

<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>
</html>