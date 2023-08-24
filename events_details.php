<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/event_details.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
  <?php
    session_start();
    include 'conixion.php';
    $_SESSION["id"]= $_GET['Id'];
    $id = $_SESSION["id"];
    $statement = $con -> prepare("SELECT * FROM events_list WHERE Id = $id");
    $statement->execute();
    $table = $statement -> fetch();

  ?>
    <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <i class="ri-leaf-line nav__logo-icon"></i> PinTree
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.php" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php" class="nav__link">Categories</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php" class="nav__link">Events</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php" class="nav__link">FAQs</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php" class="nav__link">Contact Us</a>
                        </li>
                        <li class="nav__item">
                            <a href="login_index.php" class="nav__link">Login</a>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class="ri-moon-line change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
            </nav>
        </header>
        <br>  
<div id="container">  
  
  <div class="product-details">
    
    <h2>Event Name: <?php echo $table['EventName']?></h2><br>
    <h2><strong>Charges : </strong><?php echo $table['Charges']?> </h2>
    <br>
    <h2>
      <i class="fa fa-calendar" aria-hidden="true">  <?php echo $table['DateOfEvent']?></i>
    </h2>
    <br><br>
    
    <p class="information"><?php echo $table['Description']?></p>

    
    
    <div class="control">
      
      <button class="btn">
         <span class="price"><i class="fa fa-map-marker"></i> <?php echo $table['Location']?></span>
         <span class="shopping-cart"><i class="fa fa-ticket" aria-hidden="true"></i></span>
         <span class="buy">Book Tickets Now</span>
        </button>
      
    </div>
      
    </div>
  
    <div class="product-image">
  
        <img src="assets/img/<?php echo $table['img'] ?>" alt="img" height="50" with="50">
  

    <!-- <div class="info">
      <h2> Details</h2>
      <ul>
        <li><strong>Charges : </strong><?php echo $table['Charges']?> </li>
        <li><strong>Shade : </strong>Olive green</li>
        <li><strong>Decoration: </strong>balls and bells</li>
        <li><strong>Material: </strong>Eco-Friendly</li>
        
      </ul>
    </div> -->
  </div>

</div>
<main class="main">
  <!--==================== PRODUCTS ====================-->
            <!-- trial -->
            <section class="product section container try" id="allevents">
                <h2 class="section__title-center">
                    Other Upcoming Events
                </h2>

                <p class="product__description">
                    Here are some of planned events, book one event to attend to. 
                    You can book more than two events of different days.
                </p>

                <div class="product__container grid">
                    <?php
                      include 'conixion.php';
                      $result = $con -> query("SELECT * FROM events_list ORDER BY DateOfEvent");
                      foreach($result as $value):
                    ?>
                    <article class="product__card">
                       <h3 class="product__title"><?php echo $value['EventName'] ?></h3>
                       <h3 class="product__date">Location: <?php echo $value['Location'] ?><br>Date: <?php echo $value['DateOfEvent'] ?></h3>

                        <img src="assets/img/<?php echo $value['img'] ?>" alt="" class="product__img">
                       
 
                        <p class="description"><?php echo substr($value['Description'],0,87);?><br/>
                            <a href="events_details.php?Id=<?php echo $value['Id']?>">read more..</a>
                        </p>
                        

                  
                    </article>

                <?php endforeach; ?>
</main>
        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">
                        <i class="ri-leaf-line footer__logo-icon"></i> PinTree
                    </a>

                    <h3 class="footer__title">
                        Subscribe to our newsletter <br> to stay update
                    </h3>

                    <div class="footer__subscribe">
                        <input type="email" placeholder="Enter your email" class="footer__input">

                        <button class="button button--flex footer__button">
                            Subscribe
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Our Address</h3>

                    <ul class="footer__data">
                        <li class="footer__information">1234 - Nanyuki</li>
                        <li class="footer__information">Kio Plaza - Rm104</li>
                        <li class="footer__information">+2547 28 757 186</li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Contact Us</h3>

                    <ul class="footer__data">
                        <li class="footer__information">+2547 28 757 186</li>
                        
                        <div class="footer__social">
                            <a href="https://www.facebook.com/" class="footer__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" class="footer__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" class="footer__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        You are all welcomed
                    </h3>

                    <div class="footer__cards">
                        <p>Join Us Today</p>
                        <!-- <img src="assets/img/card1.png" alt="" class="footer__card">
                        <img src="assets/img/card2.png" alt="" class="footer__card">
                        <img src="assets/img/card3.png" alt="" class="footer__card">
                        <img src="assets/img/card4.png" alt="" class="footer__card"> -->
                    </div>
                </div>
            </div>

            <p class="footer__copy">&#169; pintree. All rigths reserved</p>
        </footer>

<a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    <!-- <script src="../js/script.js"></script> -->
    <!-- <script src="../js/bootstrap.bundle.js"></script> -->
</body>
</html>