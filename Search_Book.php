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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    
  
    <title>Search Book</title>
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
    <h1>ENTER BOOK NAME</h1>
    <div class="my-5 form-group">
        <form action="Search_Book.php" method="get">
            <input type="text" name="search" placeholder="BOOK name">
            <input class="btn btn-success"type="submit" value="search" name="submit">
        </form>
   
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Books</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    if(isset($_GET['search']))
                    {
                        $filtervalues = $_GET['search'];
                        $query = "SELECT * FROM booklist WHERE CONCAT(ID, Books) LIKE '%$filtervalues%' ";
                        $query_run = mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $items)
                            {
                                ?>
                                <tr>
                                    <td><?= $items['ID']; ?></td>
                                    <td><?= $items['Books']; ?></td>
                                                
                                </tr>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                            <tr>
                                <td colspan="4">No Record Found</td>
                            </tr>
                            <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>