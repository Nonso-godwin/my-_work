
<?php
// session_start();

include "backend\login_backend.php";

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

<div class="buttons">
<a href="/my _work/index.php" ><h2>Back</h2> </a>
<input type="submit"  value="Login" name="login"><br>

</div>


        
  
    </div>

    </form>
</body>
</html>