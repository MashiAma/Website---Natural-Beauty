<?php

@include 'config.php';

@include 'header.php';

session_start();

if(isset($_POST['submit'])){

   $email=$_POST['email'];
   $pass=$_POST['pass'];


   $query1="SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'";
   $select_users = mysqli_query($conn, $query1) or die('query failed');


   if(mysqli_num_rows($select_users) > 0){
      
      $row = mysqli_fetch_assoc($select_users);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location:home.php');

      }else{
         $message[] = 'No user found!';
      }

   }else{
      $message[] = 'Incorrect Email or Password!';
   }
   mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- Insert google font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

   <!-- css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="js/script.js"></script>
   
</head>
<body>

<body>


<?php


if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="material-icons" onclick="this.parentElement.remove();">disabled_by_default</i>
      </div>
      ';
   }
}
?>
   
   <section class="form-container">

   <form action="" method="post" name="myform1">
      <h3>login now</h3>
      <input type="email" name="email" class="box" placeholder="Enter your email" required>
      <input type="password" name="pass" class="box" placeholder="Enter your password" required>
      <input type="submit" class="btn" name="submit" value="login now">
      <p>don't have an account? <a href="register.php">Register Now</a></p>
   </form>
   
</section>

</body>
</html>
<?php
@include 'footer.php';
?>