<?php
include 'connect.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LibUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        form{
            padding: 30px;
            border: 2px solid rgb(178, 220, 175);
            background: rgb(178, 220, 175);
           
        }
        h1{
            padding: 20px;
            background: rgb(0, 137, 116);
            margin-top: 30px;
            margin-left: 30px;
            font-family:Courier;
            color: white;
        }
       
    </style>
</head>
<body>
    <h1 class="colour">UPLOAD</h1>
    

    <div class="my-5 form-group">
        <form action="Book_Upload.php" method="post" enctype="multipart/form-data">
            <label for="">Upload a book</label><br>
            <input id='big' type="file" name="pdf" value="" required>
            <input class="btn btn-success" type="submit" name="submit" value="Upload">
        </form>

        <?php
        

        function function_alert($msg) {
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }

        if(isset($_POST['submit'])){
            $pdf=$_FILES['pdf']['name'];
            $pdf_type=$_FILES['pdf']['type'];
            $pdf_size=$_FILES['pdf']['size'];
            $pdf_tmp_loc=$_FILES['pdf']['tmp_name'];
            $pdf_store='Books/'.$pdf;

            move_uploaded_file($pdf_tmp_loc, $pdf_store);

            $sql="INSERT INTO booklist(Books) VALUES ('$pdf')";
            $query=mysqli_query($conn, $sql);
            if($pdf){
                function_alert("PDF file Uploaded");
            }
            else{
                function_alert("Unable to Upload PDF");
            }

        }
        ?>
       
    </div>
</body>
</html>