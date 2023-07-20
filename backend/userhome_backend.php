<?php

$host = "localhost";
$user_name  = "root";
$password =  "";
$database_name = "mydb";

$conn = mysqli_connect($host, $user_name, $password, $database_name);
$querry = "select * from blog";

$result = mysqli_query($conn , $querry);
if(mysqli_num_rows($result) > 0){
    $users = [];
   while($each_row =  mysqli_fetch_assoc($result)){
 array_push($users , $each_row);
   }

   foreach($users as $user){
    $id = $user['blog_id'];
   $item = $user['blog_content'];
   $title = $user['blog_titlte'];

   //DELETE BUTTON
if(isset($_POST['delete'])){
  include 'connection.php';

  $uid = $_POST['blog_id'];
  
  $user_query = "select * from blog where blog_id = '$uid' "; 
  $user_exist = mysqli_query($conn, $user_query);

  if(mysqli_num_rows($user_exist) == 0){
      echo " this user with the id: $uid does not exist";
  }else {
      $query = "delete from blog where  blog_id=$uid";
  if(mysqli_query($conn , $query) ){
  
      echo "delete successful";
      header("location:user_home.php");
  }else{
      echo "delete unsuccessful";
      
  }
  }
}






   echo "
   <form method ='post' >
   <h3 style=' background-color: rgb(9, 144, 144);border-radius:15px;padding:10px;'>
   <div style='font-size: xx-large;'>$title </div> <br><br>   $item </h3>
   <input type='hidden' value='$id' name='blog_id' />
   <input type='submit' value='Delete' name='delete' />
   
   </form>";
   }
 }

?>