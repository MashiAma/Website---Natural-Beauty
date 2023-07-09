<?php
@include 'config.php';

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

        <a href="home.php" class="logo"><img src="image/logo.png" alt="" width="90" height="90"></a>

        <nav class="navbar">
            <ul>
                <li><a href="home.php">home</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">contact</a></li>
                <li><a href="shop.php">shop</a></li>
                <li><a href="orders.php">orders</a></li>
                <li><a href="#">account +</a>
                    <ul>
                        <li><a href="login.php">login</a></li>
                        <li><a href="register.php">register</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="material-icons">menu</div>
            <a href="search_page.php" class="material-icons">search</button></a>
            <a href="wishlist.php"><i class="material-icons">favorite</i></a>
            <a href="cart.php"><i class="material-icons">shopping_cart</i></a>
            <div id="user-btn" class="material-icons">account_circle</div>

        </div>

        <div class="account-box">
            <p>Username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
        </div>

    </div>

</header>