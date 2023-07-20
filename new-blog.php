<?php
    include 'backend\newblog_backend.php';
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
<h2>Blog Title : <input type="text" name="title" value="    <?php
    if($blog_content = ''){
        echo '';
    }else{
        if(isset($_POST['edit'])){
            echo $_SESSION['header'];
        }
    }

?>"> </h2>

    </div>
<h2>Blog body : </h2>
<textarea name="blog" id="" cols="50" rows="31" class="content">
    <?php
    if($blog_content = ""){
        echo "";
    }else{
        if(isset($_POST['edit'])){
            echo $_SESSION['content'];
        }
    }

?>
</textarea>
<br><br>
<!-- <h2>user id : </h2> -->
<!-- <input type="text" name="user_id"  value="<?php  echo $_SESSION['email_password']; ?>"> -->


</div><br>
<input type="submit"  value="Next" name="next">&nbsp;&nbsp;
<?php
if(isset($_POST['next'])){
    $blog_title = $_POST['title'];
$user_id = $_SESSION['user']['id'];
$blog_content = $_POST['blog'];

$_SESSION['content'] = $blog_content;
$_SESSION['header'] = $blog_title;


    echo "
    <form  method='post'>
    <div style='background-color: rgb(9, 144, 144);border-radius:15px;padding:10px;'>
    <h2> $blog_title  </h2> <br> <h3> $blog_content </h3>
    </div>
    <input type='submit'  value='Edit' name='edit'>
    <input type='submit'  value='Post Blog' name='post'>
    " ;

 
}

// edit button
?>

<br><br>
    <a href="/my _work/user_home.php" ><h2>My blogs</h2> </a>

    <a href="/my _work/index.php" ><h2>Log out</h2> </a>
</div>
</form>
</body>
</html>