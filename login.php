<?php
if(isset($_POST['login'])){
$email = $_POST['email'];
$pass = $_POST['pass'];

 $host = "localhost";
$user_name  = "root";
$password =  "";
$database_name = "mydb";

$conn = mysqli_connect($host, $user_name, $password, $database_name);
$email_query =  "select * from blog_user where email = '$email'  &&  email_password = '$pass' ";
$results = mysqli_query($conn , $email_query);


if(mysqli_num_rows($results) == 0){
    echo "this user does not exist";
}else{
echo "this user exists";
}
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
                .form-control{
                    height: 70px;
                    font-size:x-large;
            width: 50%;
            border-radius: 50px;
            border-color: chartreuse;
            box-shadow: inset 8px 8px 8px #cbced1,
               inset -8px -8px 8px #fff;
        }
        body{
            background-color: aqua;
            font-style: italic;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="form-group" align="center">
<br><br><br>
<h1>Login here</h1>
        <input type="email" class="form-control" placeholder="Email address" name="email">
        <br><br><br>
        <input type="password" class="form-control" placeholder="Email password" name="pass">
        <br><br><br>


        <input type="submit"  value="Login" name="login"><br>


        
  
    </div>

    </form>
</body>
</html>