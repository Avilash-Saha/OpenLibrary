<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="CssR/style.css">
  <style>
    .color{
    background: rgb(201, 255, 239);
}
.container-fluid {
position: relative;
padding-bottom: 70px;
}
p {font-size: 16px;
    color: white;
}
.margin {margin-bottom: 45px;}
.bg-1 { 
background-color: #1abc9c; 
color: #ffffff;}
.left {
position: absolute;
top: 250px;
left: 100px;
color: white;
font-family:Times;
padding: 40px;
border: 2px solid white;
}
h1{
color: white;
}
    
  </style>
    <title>Open Library Homepage</title>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top color">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" >OPEN LIBRARY</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Book_Upload.php">UPLOAD</a></li>
        <li><a href="Search_Book.php">SEARCH</a></li>
        <li><a href="Book_Display.php">DISPLAY</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid bg-1 text-center">
  <img src="https://pbs.twimg.com/media/EvA7LyyXMAUr1Cr?format=jpg&name=4096x4096" " alt="Book" width="1490" height="845">
  <h1 class="left"><b>WELCOME TO<br>OPEN LIBRARY</b></h1>
  <h1>ABOUT</h1>
  <p>
  Open Library is a concept where any person can upload a Book(pdf format only)<br> by going to the upload menu and uploading it from there and It will be stored in<br> our database permanently.
Any individual can access these books by searching<br> the book in the search menu to get the Book ID and entering it in the search
bar in<br> the Display menu.</p>
  </p>
</div>

    
</body>
</html>