<?php
// if(isset($_POST['sign'])){
//     header("location: assignment2.php");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    .nav{
        display:flex;
       justify-content:space-evenly;
       justify-items: center;

    }
    .header{
        text-align:center;
    }
.button{

  border-color: black;
}
</style>
</head>
<body>
    <form action="" method="post">

    
  
    <div class="nav">
  <h1 class="header">MY BLOG</h1>
        &nbsp;&nbsp;&nbsp; 
        <a href="/my _work/login.php" class="button"><h2>Login</h2> </a>
        <a href="/my _work/sign.php"><h2>sign up</h2> </a>
        <label for="Categories"><h2>Categories :</h2> </label>
        <select name="Categories" id="">
            <option value="Sports">Sports</option>
            <option value="News">News</option>
        </select>
        
    </div>
    </form>
<hr>

</body>

</html>