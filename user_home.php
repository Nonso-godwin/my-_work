
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:aqua;
        }
.header{
    text-align:center;
}
.new{
    position:absolute;
    right:3%;
    color:green;
}
.blog{
   background-color:blue;
   display:flex;
flex-direction:column;
}
    </style>
   
</head>
<body>
    <h1 class="header">MY BLOG</h1><br><hr>

        <div class="container">
            <div>
            <a href="/my _work/new-blog.php" class="new"><h3>New blog +</h3></a>
            </div>
<br><br><br>
<h3>
<?php
   include 'backend\userhome_backend.php';

?>
</h3>
    </div><br><br>
    <a href="/my _work/index.php" ><h2>Log out</h2> </a>
    
</body>
</html>