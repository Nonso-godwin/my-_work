<?php
session_start();

if(isset($_POST['post'])){
$blog_title = $_POST['title'];
$user_id = $_SESSION['user']['id'];
$blog_content = $_POST['blog'];

include 'connection.php';

    $query = "insert into blog ( blog_titlte, blog_content, user_id) values('$blog_title', '$blog_content', '$user_id')";

    $result = mysqli_query($conn , $query);

if($result ){
    echo "successfully posted your blog";
}else{
    echo "blog posting failed".mysqli_error($conn);
}
}

?>