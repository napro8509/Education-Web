<!-- Header -->
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
<header class="header d-flex flex-row" id="navbar">
    <div class="header_content d-flex flex-row align-items-center">
        <!-- Logo -->
        <a href="index.php"><div class="logo_container">
            <div class="logo">
                <img src="images/logo.png" alt="">
            </div>
        </div></a>

        <!-- Main Navigation -->
        <nav class="main_nav_container">
            <div class="main_nav">
                <ul class="main_nav_list">
                    <!-- <li class="main_nav_item"><a href="form.php">Câu hỏi</a></li> -->
                    <li class="main_nav_item"><a href="courses.php">Môn học</a></li>
                    <li class="main_nav_item"><a href="teachers.php">Giáo Viên</a></li>
                    <li class="main_nav_item"><a href="Danhsachbaihoc.php">Danh sách bài học</a></li>
                    <li class="main_nav_item"><a href="news.php">Tin tức</a></li>
                    <li class="main_nav_item"><a href="contact.php">Liên hệ</a></li>
                    <li class="main_nav_item"><a href="addbaihoc.php">Bài học</a></li>
                    <li class="main_nav_item"><a href="import.php">Đăng đề thi</a></li>

                </ul>
            </div>
        </nav>
    </div>
    <div class="header_side d-flex flex-row justify-content-center align-items-center">
        <img src="images/phone-call.svg" alt="">
        <span>0949930259</span>
    </div>

    <!-- Hamburger -->
    <div class="hamburger_container">
        <i class="fas fa-bars trans_200"></i>
    </div>

</header>
<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "45px";
        } else {
            document.getElementById("navbar").style.top = "-120px";
        }
        prevScrollpos = currentScrollPos;
    }
</script>