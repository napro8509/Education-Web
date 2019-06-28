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

//index.php
include('inc/myconnect.php');
include('inc/function.php');
$query_1 = "SELECT * FROM first_level_category ORDER BY first_level_category_name ASC";
$results_1=mysqli_query($dbc,$query_1);
kt_query($results_1,$query_1);

$query_2 = "SELECT * FROM second_level_category ORDER BY second_level_category_name ASC";
$results_2=mysqli_query($dbc,$query_2);
kt_query($results_2,$query_2);

$query_3 = "SELECT * FROM third_level_category ORDER BY third_level_category_name ASC";
$results_3=mysqli_query($dbc,$query_3);
kt_query($results_3,$query_3);
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>ĐỊNH HƯỚNG BẢN THÂN</title>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
        </head>

        <body>
            <br />
            <div class="container">
            <?php include("header.php");
    
            include("menu.php"); ?>
            <div class="home">
                <div class="home_background_container prlx_parent">
                    <div class="home_background prlx" style="background-image:url(images/courses_background.jpg)"></div>
                </div>
                <div class="home_content">
                    <h1>Nguyện Vọng</h1>
                </div>
            </div>

                <h2 align="center">ĐỊNH HƯỚNG BẢN THÂN</h2>
                <br /><br />
                <div style="width: 500px; margin:0 auto">

                    <!-- <form method="post" id="framework_form"> -->
                        <div class="form-group">
                          <label>Sở Thích</label><br />
                          <select id="framework_" name="framework_[]" multiple class="form-control" >
                              <?php
                                  while($answers=mysqli_fetch_array($results_1,MYSQLI_ASSOC))
                                  {          
                                  echo '<option value="'.$answers["first_level_category_id"].'">'.$answers["first_level_category_name"].'</option>';
                              }
                          ?>
                          </select>
                        </div>
                    
                        <!-- <div class="form-group">
                            <input type="submit" class="btn btn-info" name="submit" value="Submit" />
                        </div>
                    </form> -->
                    <div class="form-group">
                        <label>Địa điểm</label><br />
                        <select id="second_level" name="second_level[]" multiple class="form-control">
                            <?php
                                while($answers=mysqli_fetch_array($results_2,MYSQLI_ASSOC))
                                {          
                                echo '<option value="'.$answers["second_level_category_id"].'">'.$answers["second_level_category_name"].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <form  method="post" id="framework_form">
                        <div class="form-group">
                            <label>Hệ thống đào tạo</label><br />
                                <select id="framework" name="framework[]" multiple class="form-control">
                                    <?php
                                    while($answers=mysqli_fetch_array($results_3,MYSQLI_ASSOC))
                                    {          
                                    echo '<option value="'.$answers["third_level_category_id"].'">'.$answers["third_level_category_name"].'</option>';
                                    }
                                    ?>
                                </select>

                        </div>                    
                        <div class="form-group">
                            <input type="submit" class="btn btn-info" name="submit" value="Submit" />
                        </div>
                    </form>
                </div>
                <?php include("footer.php"); ?>

            </div>
        </body>
    </html>
<script>
$(document).ready(function(){

    $('#framework_').multiselect({
        nonSelectedText:'Lựa chọn sở thích',
        buttonWidth:'400px',
    });

    $('#second_level').multiselect({
        nonSelectedText: 'Lựa chọn địa điểm',
        buttonWidth:'400px',
    });

    // $('#framework').multiselect({
    //     nonSelectedText: 'Lựa chọn hình thức đào tạo',
    //     buttonWidth:'400px',
    // });


    $('#framework').multiselect({
          nonSelectedText: 'Lựa chọn hình thức đào tạo',
          enableFiltering: true,
          enableCaseInsensitiveFiltering: true,
          buttonWidth:'400px'
     });
 
    $('#framework_form').on('submit', function(event){
        event.preventDefault();
        var form_data = $(this).serialize();
        alert(form_data);
    });
});
</script>

<script>
$(document).ready(function(){
 
 
 
});
</script>