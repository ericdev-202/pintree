
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Pin Tree</title>
    </head>
    <style type="text/css">
        .steps__card-title a{
            color: white !important;
        }
    </style>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <i class="ri-leaf-line nav__logo-icon"></i> PinTree
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="#categories" class="nav__link">Categories</a>
                        </li>
                        <li class="nav__item">
                            <a href="#allevents" class="nav__link">Events</a>
                        </li>
                        <li class="nav__item">
                            <a href="#faqs" class="nav__link">FAQs</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contact Us</a>
                        </li>
                        <li class="nav__item">
                            <a href="login_index.php    " class="nav__link">Login</a>
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

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="assets/img/2.png" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            Be the Change to our <br>Country.
                            
                        </h1>
                        <p class="home__description">
                            Plants will make your life better.
                        </p>
                        <a href="#about" class="button button--flex">
                            Explore <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>

                    <div class="home__social">
                        <span class="home__social-follow">Follow Us</span>

                        <div class="home__social-links">
                            <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="home__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <img src="assets/img/about.png" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            Who we really do
                        </h2>

                        <p class="about__description">
                            We have planted over 40,000+ trees in our forests, homesteads and parks.
                            Joins us in recreating back our environment.
                            
                        </p>

                        <div class="about__details">
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We do environment conservation through garbage collection.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We hold tree planting parties.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We do road trips.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Pool parties
                            </p>
                        </div>

                        <!-- <a href="#" class="button--link button--flex">
                            Shop Now <i class="ri-arrow-right-down-line button__icon"></i>
                        </a> -->
                    </div>
                </div>
            </section>

            <!--==================== STEPS ====================-->
            <section class="steps section container" id="categories">
                <div class="steps__bg">
                    <h2 class="section__title-center steps__title">
                        Top Categories <br> Choose one
                    </h2>
                    <?php 
    
                        include 'conixion.php';
                          $res = $con -> query("SELECT * FROM events_list ");
                          foreach($res as $value):


                        $nbr_ec = $con->query("SELECT CategoryName FROM events_list WHERE CategoryName='Environment Conservation'");
                        $nbr_ec = $nbr_ec->rowCount();

                        $nbr_ecp = $con->query("SELECT CategoryName FROM events_list WHERE CategoryName='Environment Conservation party'");
                        $nbr_ecp = $nbr_ecp->rowCount();

                        $nbr_tpd = $con->query("SELECT CategoryName FROM events_list WHERE CategoryName='Tree Planting Day'");
                        $nbr_tpd = $nbr_tpd->rowCount();

                        $nbr_rt = $con->query("SELECT CategoryName FROM events_list WHERE CategoryName='Road Trip'");
                        $nbr_rt = $nbr_rt->rowCount();

                        $nbr_tpp = $con->query("SELECT CategoryName FROM events_list WHERE CategoryName='Tree Planting Party'");
                        $nbr_tpp = $nbr_tpp->rowCount();

                        $nbr_pp = $con->query("SELECT CategoryName FROM events_list WHERE CategoryName='Pool party'");
                        $nbr_pp = $nbr_pp->rowCount();


                    ?>
                    <?php endforeach; ?>

                    <div class="steps__container grid">
                        <div class="steps__card">
                            <div class="steps__card-number">01</div>
                            <h3 class="steps__card-title"><a href="category_details.php?CategoryName=Environment Conservation">Environment Conservation</a></h3>
                            <p class="steps__card-description">
                                <?php echo $nbr_ec; ?> Event.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">02</div>
                            <h3 class="steps__card-title"><a href="category_details.php?CategoryName=Environment Conservation party">Environment Conservation party</a></h3>
                            <p class="steps__card-description">
                                <?php echo $nbr_ecp; ?> Event.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">03</div>
                            <h3 class="steps__card-title"><a href="category_details.php?CategoryName=Tree Planting Day">Tree Planting Day</a> </h3>
                            <p class="steps__card-description">
                                <?php echo $nbr_tpd; ?> Event.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">04</div>
                            <h3 class="steps__card-title"><a href="category_details.php?CategoryName=Road Trip">Road Trip</a></h3>
                            <p class="steps__card-description">
                                <?php echo $nbr_rt; ?> Event.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">05</div>
                            <h3 class="steps__card-title"><a href="category_details.php?CategoryName=Tree Planting Party">Tree Planting Party</a></h3>
                            <p class="steps__card-description">
                                <?php echo $nbr_tpp; ?> Event.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">06</div>
                            <h3 class="steps__card-title"><a href="category_details.php?CategoryName=Pool party">Pool party</a></h3>
                            <p class="steps__card-description">
                                <?php echo $nbr_pp; ?> Event.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== PRODUCTS ====================-->
            <!-- trial -->
            <section class="product section container try" id="allevents">
                <h2 class="section__title-center">
                    Upcoming Events
                </h2>

                <p class="product__description">
                    Here are some of planned events, book one event to attend to. 
                    You can book more than two events of different days.
                </p>

                <div class="product__container grid">
                    <?php
                      include 'conixion.php';
                      $result = $con -> query("SELECT * FROM events_list ORDER BY DateOfEvent DESC LIMIT 8");
                      foreach($result as $value):
                    ?>
                    <article class="product__card">
                       <h3 class="product__title"><?php echo $value['EventName'] ?></h3>
                       <h3 class="product__date">Location: <?php echo $value['Location'] ?><br>Date: <?php echo $value['DateOfEvent'] ?></h3>

                        <img src="assets/img/<?php echo $value['img'] ?>" alt="" class="product__img">
                       
 
                        <p class="description"><?php echo substr($value['Description'],0,87);?><br/>
                            <a href="events_details.php?Id=<?php echo $value['Id']?>" style="color: white !important" >read more..</a>
                        </p>
                        

                  
                    </article>

                <?php endforeach; ?>
                </div>
            </section>

            <!--==================== QUESTIONS ====================-->
            <section class="questions section" id="faqs">
                <h2 class="section__title-center questions__title container">
                    Some common questions <br> were often asked
                </h2>

                <div class="questions__container container grid">
                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Type of trees should be planted in dry areas?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    What causes leaves to become pale?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    What causes brown crispy leaves?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    How to choose best trees to plant?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    When is the right time to plant trees?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Why are gnats flying around my plant?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== CONTACT ====================-->
            <section class="contact section container" id="contact">                
                <div class="contact__container grid">
                    <div class="contact__box">
                        <h2 class="section__title">
                            Reach out to us today <br> via any of the given <br> information
                        </h2>

                        <div class="contact__data">
                            <div class="contact__information">
                                <h3 class="contact__subtitle">Call us for instant support</h3>
                                <span class="contact__description">
                                    <i class="ri-phone-line contact__icon"></i>
                                    +2547 28 757 186
                                </span>
                            </div>

                            <div class="contact__information">
                                <h3 class="contact__subtitle">Write us by mail</h3>
                                <span class="contact__description">
                                    <i class="ri-mail-line contact__icon"></i>
                                    user@email.com
                                </span>
                            </div>
                        </div>
                    </div>

                    <form action="" class="contact__form">
                        <div class="contact__inputs">
                            <div class="contact__content">
                                <input type="email" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Email</label>
                            </div>

                            <div class="contact__content">
                                <input type="text" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Subject</label>
                            </div>

                            <div class="contact__content contact__area">
                                <textarea name="message" placeholder=" " class="contact__input"></textarea>                              
                                <label for="" class="contact__label">Message</label>
                            </div>
                        </div>

                        <button class="button button--flex">
                            Send Message
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </form>
                </div>
            </section>
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
        
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
