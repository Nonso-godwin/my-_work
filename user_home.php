<?php
session_start();
include 'connection.php';
$querry = "select * from blog";

$result = mysqli_query($conn , $querry);
if(mysqli_num_rows($result) > 0){
    $users = [];
   while($each_row =  mysqli_fetch_assoc($result)){
 array_push($users , $each_row);
   }

    var_dump($users);
    foreach($users['blog_content'] as $content){
        echo $content;
    }

}else{
    echo "No users found  ";
    
}

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
        <div class="blog" >
            <h1>All blogs</h1>
        </div>
    </div>
</body>
</html>