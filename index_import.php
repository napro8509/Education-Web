<?php
$connect = mysqli_connect("localhost", "root", "", "test");
$output = '';
if(isset($_POST["import"]))
{
   //$extension = end(explode(".", $_FILES["excel"]["name"])); // For getting Extension of selected file
    $extension_1 = explode(".", $_FILES["excel"]["name"]);
    $extension = end($extension_1);
    $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
    if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
    {
        $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
        include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
        $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

        $output .= "<label class='text-success'>Câu hỏi được nhập</label><br /><table class='table table-bordered'>";
        $output .= '<td>'.'Câu hỏi'.'</td>';
        $output .= '<td>'.'A'.'</td>';
        $output .= '<td>'.'B'.'</td>';
        $output .= '<td>'.'C'.'</td>';
        $output .= '<td>'.'D'.'</td>';
        $output .= '<td>'.'Đáp-Án'.'</td>';
        $output .= '</tr>';

        foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
        {
            $highestRow = $worksheet->getHighestRow();
            for($row=2; $row<=$highestRow; $row++)
            {
                $output .= "<tr>";
                $name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                $email = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                $email_2 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
                $email_3 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
                $email_4 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
                $da = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
                // $query = "INSERT INTO tbl_excel(excel_name, excel_email) VALUES ('".$name."', '".$email."')";
                // mysqli_query($connect, $query);
                  
                $output .= '<td>'.$name.'</td>';
                $output .= '<td>'.$email.'</td>';
                $output .= '<td>'.$email_2.'</td>';
                $output .= '<td>'.$email_3.'</td>';
                $output .= '<td>'.$email_4.'</td>';
                $output .= '<td>'.$da.'</td>';
                $output .= '</tr>';
            }
        } 
        $output .= '</table>';

    }
    else
    {
        $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
    }
}
?>

<html>
    <head>
        <title>Import Thư mực Excel làm câu hỏi</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        <style>
        body
            {
                margin:0;
                padding:0;
                background-color:#f1f1f1;
            }
            .box
            {
/*                width:700px;
*/                border:1px solid #ccc;
                background-color:#fff;
                border-radius:5px;
                margin-top:10px;
            }
        
        </style>
    </head>
    <body>
        <div class="container box">
          <h3 align="center">Import Thư mực Excel làm câu hỏi</h3><br />
          <form method="post" enctype="multipart/form-data">
              <label>Chọn File</label>
              <input type="file" name="excel" />
              <br />
              <input type="submit" name="import" class="btn btn-info" value="Import" />
          </form>
          <br />
          <br />
          <?php
              echo $output;
          ?>
        </div>
    </body>
</html>
