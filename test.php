<?php
if(isset($_POST['trial'])){
   $content = $_POST['test'];

   echo $content;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

<textarea name="test" id="" cols="30" rows="10"></textarea>
<input type="submit" value="Post Blog" name="trial">

</form>
</body>
</html>