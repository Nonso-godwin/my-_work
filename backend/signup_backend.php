<?php

if(isset($_POST['sign'])){
    include '/connection.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];
    
    
    
    
    $query = "insert into blog_user (user_name, email , email_password , phone) values('$name', '$email', '$pass', '$phone')";
    
    $result = mysqli_query($conn , $query);
    
    if($result ){
        echo "user regsitered successfully";
        header("location:/my _work/login.php");
    }else{
        echo "registration failed please try again".mysqli_error($conn);
    }
    }

?>