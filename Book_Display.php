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
    <title>Display Book</title>
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
    <h1>Display Book</h1>
    <div class="my-5 form-group">
        <form action="Book_Display.php" method="post">
            <input type="text" name="id" placeholder="Book ID" required>
            <input class="btn btn-success" type="submit" name="submit" value="GO"> 
        </form><br><br><br>

        <?php
        if(isset($_POST['submit'])){
            $id=$_POST['id'];
            $sql="SELECT Books FROM booklist WHERE ID=$id";
            $query=mysqli_query($conn, $sql);
        

            while($info=mysqli_fetch_array($query)){
                ?>
                <embed src="Books/<?php echo $info['Books']; ?>" type="application/pdf" width="1500" height="950">
                <?php
            }
        }
        ?>
 
    </div>
</body>
</html>