<?php
session_start();
    include 'connection.php';
 $querry =  "select * from blog  " ;
 $result = mysqli_query($conn , $querry);

 if(mysqli_num_rows($result) > 0){
    $users = [];
   while($each_row =  mysqli_fetch_assoc($result)){
 array_push($users , $each_row);
   }

   $name = $_SESSION['user']['user_name'];
   foreach($users as $user){
    // var_dump($user);
   $item = $user['blog_content'];
   $title = $user['blog_titlte'];

  
   echo " 
   <h3 style=' background-color: rgb(9, 144, 144);border-radius:15px;padding:10px;'>
   <div style='font-size: xx-large;'>$title </div> <br><br>  $item <br><br>
   Written by $name
    </h3>";
   }
 }

?>