<?php
include "backend\signup_backend.php";

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
        .buttons{
            display:flex;
            justify-content: space-evenly;
        }
        .buttton{
            height:26px;
            background-color:blue;
            border-radius:10px;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="form-group" align="center">
        <h1>Sign up here</h1>
      <br>  <input type="text" class="form-control" placeholder="User name " name="name">
      <br><br><br>
        <input type="email" class="form-control" placeholder="Email address" name="email">
        <br><br><br>
        <input type="password" class="form-control" placeholder="Email password" name="pass">
        <br><br><br>

        <input type="number" class="form-control" placeholder="Phone number" name="phone"><br><br><br>
<div class="buttons">
        <a href="/my _work/index.php" ><h2>Back</h2> </a>
        <input type="submit"  value="Sign up" name="sign" class="button">
</div>



        
  
    </div>

    </form>
</body>
</html>