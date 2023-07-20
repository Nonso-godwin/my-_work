<?php
session_start();


// var_dump( $_SESSION['user']);

if(isset($_POST['post'])){
$blog_title = $_SESSION['header'];
$user_id = $_SESSION['user']['id'];
$blog_content = $_SESSION['content'];

include 'connection.php';

    $query = "insert into blog ( blog_titlte, blog_content, user_id) values('$blog_title', '$blog_content', '$user_id')";

    $result = mysqli_query($conn , $query);
    


if($result ){
   
    // echo "successfully posted your blog";
    // var_dump($_SESSION['blog']);
}else{
    echo "blog posting failed".mysqli_error($conn);
}
}

?>