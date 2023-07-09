<?php

@include 'config.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>


   <link rel="stylesheet" href="css/style.css" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>
   
<?php @include 'header.php'; ?>


<section class="heading" style="background-image: url(image/head.jpg); width:100%; object-fit:cover; width:100%">
<h1 class="title">About Us</h1>
<p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

<div class="flex">

        <div class="image">
            <img src="image/about1.jpg" alt="">
        </div>

        <div class="content">
            <h3>Who are we?</h3>
            <p>Natural Beauty is one of the best ayurvedic skincare companies in Sri Lanka that has produced a diverse variety of Sri Lankan skin care products. These Ayurvedic Sri Lankan skincare products are made with top quality herbs and ayurvedic ingredients in Sri Lanka and India. Our story was began in 1990. Inspired by beauty treatments that women and men in the exotic east used to pamper themselves and retain younger looking healthy skin, we created our very own aurvedic beauty products for discerning women and men in Sri Lanka.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

    <br><br><div class="flex">

        <div class="content">
            <h3>Why choose us?</h3>
            <p>You can receive authentic Ayurvedic products from our online store and as well as out oulet. We use all-natural plant-based ingredients that are sustainably sourced and free of harmful chemicals. We offer personalized consultations and treatments.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>
        <div class="image">
            <img src="image/about2.jpg">
        </div>
    </div>

    <br><br><div class="flex">

    <div class="image">
            <img src="image/about3.jpg" alt="">
        </div>
        <div class="content">
            <h3>what we provide?</h3>
            <p>Ayurvedic facial and body cream, shampoo, oils and more.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

<h1 class="title">Customer Reviews</h1>

    <div class="box-container">

        <div class="box">
        <h3>Umaya Liyanapathirana</h3>
            <img src="image/pic-1.jpg" alt="">
            <p>The greatest online service in Sri Lanka. Best cosmetics store for gents and ladies. Keep up the good job guys.</p>
            
        </div>

        <div class="box">
        <h3>M.K.D.T Perera</h3>
            <img src="image/pic-2.jpg" alt="">
            <p>One of the best places to buy branded products. They even delivered the package with extra care.</p>
        </div>

        <div class="box">
        <h3>Lakindu Perera</h3>
            <img src="image/pic-3.jpg" alt="">
            <p>you are my favorite online store to buy branded products. Received all my 4 orders on time I would like to recommend this for the wonderful customer service provided! Should mention that the products are 100% genuine!!!</p>
        </div>

    </div>

</section>



<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>