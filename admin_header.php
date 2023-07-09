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

<header class="header">

   <div class="flex">

   <a href="admin_page.php" class="logo"><img src="image/logo.png" alt="" width="90" height="90"></a>

      <nav class="navbar">
         <a href="admin_page.php">Home</a>
         <a href="admin_products.php">Products</a>
         <a href="admin_orders.php">Orders</a>
         <a href="admin_users.php">Users</a>
         <a href="admin_contacts.php">Messages</a>
      </nav>

      <div class="icons">
      <div id="menu-btn" class="material-icons">menu</div>
      <div id="user-btn" class="material-icons">account_circle</div>
      </div>

      <div class="account-box">
         <p>Username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>Email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">logout</a>
         <div>New <a href="login.php">Login</a> | <a href="register.php">Register</a> </div>
      </div>

   </div>

</header>