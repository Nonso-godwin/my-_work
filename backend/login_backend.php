
<?php
session_start();

if(isset($_POST['login'])){
$email = $_POST['email'];
$pass = $_POST['pass'];

include 'connection.php';

$email_query =  "select * from blog_user where email = '$email'  &&  email_password = '$pass' ";
$results = mysqli_query($conn , $email_query);



if(mysqli_num_rows($results) == 0){
    echo "this user does not exist";
}else{
echo "this user exists";
$user = mysqli_fetch_assoc($results);
// var_dump($user);
echo $user['email_password'] = null;
$_SESSION['user'] = $user;
// var_dump($_SESSION['user']);
// var_dump($_SESSION);

header("location:/my _work/user_home.php");
}
}
