<?php
include "backend/newblog_backend.php";
?>
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
.container{
    display:flex;
    flex-direction:column;
}
.box{
    width:40%;
}
/* .caption{
    display:flex;
} */
.content{
    height: 100px;
}
    </style>
   
</head>
<body>
    <h1 class="header">NEW BLOG</h1><br><hr>
<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="caption">
<h2>Blog Title : <input type="text" name="title"> </h2>
    
    </div>
<h2>Blog body : </h2>
<input type="text" name="blog" class="content">
<br><br>
<!-- <h2>user id : </h2> -->
<!-- <input type="text" name="user_id"  value="<?php  echo $_SESSION['email_password']; ?>"> -->


</div><br>
<input type="submit" value="Post Blog" name="post">
</div>
</form>
</body>
</html>