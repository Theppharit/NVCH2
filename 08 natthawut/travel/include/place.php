<?php include('include/head.php') ?>

    <body>

<?php include('include/navbar.php') ?>


        

        <main class="main"> 

            <!--==================== PLACES ====================-->
            <section class="place section" id="place">
                <h2 class="section__title">Choose Your Place</h2>

                <div class="place__container container grid">
                    <!--==================== PLACES CARD 1 ====================-->
                    <div class="place__card">
                        <img src="assets/img/5.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,8</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Mount Edith Cavell</h3>
                                <span class="place__subtitle">Canada</span>
                                <span class="place__price">$499</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 2 ====================-->
                    <div class="place__card">
                        <img src="assets/img/6.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5,0</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Mount Kerkeslin</h3>
                                <span class="place__subtitle">Canada</span>
                                <span class="place__price">$599</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 3 ====================-->
                    <div class="place__card">
                        <img src="assets/img/7.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,9</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Valley of the Ten Peaks</h3>
                                <span class="place__subtitle">EE.UU</span>
                                <span class="place__price">$499</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 4 ====================-->
                    <div class="place__card">
                        <img src="assets/img/12.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,8</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Mount Baker</h3>
                                <span class="place__subtitle">USA</span>
                                <span class="place__price">$499</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/11.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,8</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Mountain olimpia</h3>
                                <span class="place__subtitle">Croacia</span>
                                <span class="place__price">$999</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>
                </div>
            </section>
            <!--==================== SUBSCRIBE ====================-->
            <section class="subscribe section">
                <div class="subscribe__bg">
                    <div class="subscribe__container container">
                        <h2 class="section__title subscribe__title">Subscribe Our <br> Newsletter</h2>
                        <p class="subscribe__description">Subscribe to our newsletter and get a 
                            special 30% discount.
                        </p>
    
                        <form action="" class="subscribe__form">
                            <input type="text" placeholder="Enter email" class="subscribe__input">
    
                            <button class="button">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </section>
            
            <!--==================== SPONSORS ====================-->
            <section class="sponsor section">
                <div class="sponsor__container container grid">
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors1.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors2.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors3.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors4.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors5.png" alt="" class="sponsor__img">
                    </div>
                </div>
            </section>
          </main>

 
      
            <?php include('include/footer.php') ?>
<?php include('include/addjs.php') ?>


    </body>
</html>