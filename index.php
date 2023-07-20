<?php


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
        padding : 15px;
    }
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
}.menu{
    display : flex;
    justify-content: space-evenly;

}
.icon-bar{
    display: none;  
    position: relative;
    top: 25px; ;
}
.content{
    padding:10px;
    background-color: rgb(9, 144, 144);
    border-radius:15px;
}
 /* @media screen and (max-width:390px){
.menu{
    display: none;
}
.icon-bar{
    display: block;
}
.icon-bar :hover{
    background-color : red ;
    color : red;
} 
}  */
</style>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

    
  
    <div class="nav">
  <h1 class="header">MY BLOG</h1><br>
     
    </div>
    <hr>
    <span class="icon-bar">&#9776</span>
        <div class="menu"> <a href="/my _work/login.php" class="button"><h2>Login</h2> </a> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  
        <a href="/my _work/sign.php"><h2>sign up</h2> </a> &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; 
       </div>

<hr>
<br><br>
<div>
    <h3 class="content">
    <?php
    include 'backend\landing_backend.php';

     ?>       

    </h3>
 
</div>

</form>

</body>

</html>