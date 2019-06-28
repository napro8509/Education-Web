<!DOCTYPE html>
<div lang="en">
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
    <body style="background: url('http://www.al-mubarok.com/wp-content/uploads/2016/07/Up-Close-Tree-Wallpaper.jpg')">


<div class="super_container">

	    <?php include "teacher_header.php";?>

		<?php include_once 'inc/function.php';?>
		<?php include 'inc/myconnect.php';?>
	</div>
	<div class="container-contact100">

		<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['title'])) {
        $errors[] = 'title';
    } else {
        $title = $_POST['title'];
    }
    if ($_POST['TenMonHoc'] == 0) {
        $monhoc = 0;
    } else {
        $monhoc = $_POST['TenMonHoc'];
    }
    header('Location:baihoc.php?chuong=1');
    //$monhoc=$_GET['monhoc'];
    //$idnguoidang=$_SESSION['uid'];
    // if(empty($errors))
    // {
    //     //inser vao trong db
    //     $query_2="INSERT tblchuong(TenChuong,MaMonHoc) VALUES ('{$title}',$monhoc)";
    //     $results_2=mysqli_query($dbc,$query_2);
    //     kt_query($results_2,$query_2);
    //     if(mysqli_affected_rows($dbc)==1)
    //     {
    //         $query="SELECT * FROM tblchuong ORDER BY MaChuong DESC LIMIT 1";
    //         $results=mysqli_query($dbc,$query);
    //         kt_query($results,$query);
    //         $chuong=mysqli_fetch_array($results,MYSQLI_ASSOC);
    //         $machuong=$chuong['MaChuong'];
    //         //echo $machuong;
    //         header('Location:add_baihoc.php?chuong='.$machuong);
    //     }

    // }
    // else
    // {
    //     $message="<p class='required'>Bạn hãy nhập đầy đủ thông tin</p>";
    // }

}
?>
		<script type="text/javascript">
			function ddlselect() {
			  	var select=document.getElementById("list").value;
			  	//alert(select);
			  	document.getElementById("txtvalue").value=select;
			};
		</script>
        <div class="p-5" style="background: white; border-radius: 8px;">
		<form name="frmbaiviet" method="POST" enctype="multipart/form-data">
			<?php
if (isset($message)) {
    echo $message;
}
?>
			<h3>THÊM MỚI</h3>
			<div class="form-group">
				<label style="display:block;">Môn Học</label>
				<?php selectCtrl('TenMonHoc', 'forFormdim');?>
			</div>
			<input type="hidden" id="txtvalue"/>
			<?php $mh = '<script>document.writeln(select)</script>'?>c
			<a href="baihoc.php?chuong=0">Chương đã có sẵn</a>
			<div class="form-group">
				<label>Tên chương</label>
				<input type="text" name="title" value="<?php if (isset($_POST['title'])) {echo $_POST['title'];}?>" class="form-control" placeholder="Tên Chương ">
				<?php
if (isset($errors) && in_array('title', $errors)) {
    echo "<p class='required'>Bạn chưa nhập tiêu đề của chương</p>";
}
?>
		</div>
<!-- 			<input type="submit" name="submit" class="btn btn-primary" value="Thêm mới">
 -->		</form>
		<a href="baihoc.php?chuong=1"><button class="contact100-form-btn">
            Tạo Chương mới
        </button></a>
	</div>
</div>
</div>
<?php
// include('footer.php');
?>
</body>
