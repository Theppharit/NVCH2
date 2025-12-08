<?php include('include/head.php') ?>


    <body>
<?php include('include/navbar.php') ?>

        <main class="main">
            <!--==================== DISCOVER ====================-->
            <section class="discover section" id="discover">
                <h2 class="section__title">Find Your Purr-fect Match <br> Only at Our Café</h2>
                
                <div class="discover__container container swiper-container">
                    <div class="swiper-wrapper">
                        <!--==================== DISCOVER 1 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/g1.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Espresso</h2>
                                <span class="discover__description">Refreshing espresso—ready to embrace the cuteness</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 2 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/g2.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Kiwi and <br><b></b> Yogurt Fruit </b>Croissant Sandwich</h2>
                                <span class="discover__description">For the best sandwiches, you're in the right place.</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 3 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/g3.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Cookies</h2>
                                <span class="discover__description">Jam cookies & orange juice: A perfect match.</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 4 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/g4.webp" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Matcha Green Tea</h2>
                                <span class="discover__description">Intense Matcha Green Tea</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== EXPERIENCE ====================-->
            <section class="experience section">
                <h2 class="section__title">With Our Experience <br> We Will Serve You</h2>

                <div class="experience__container container grid">
                    <div class="experience__content grid">
                        <div class="experience__data">
                            <h2 class="experience__number">20</h2>
                            <span class="experience__description">Year <br> Experience</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">5</h2>
                            <span class="experience__description">Total Branches</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">100+</h2>
                            <span class="experience__description">Total Cats Supported</span>
                        </div>
                    </div>

                    <div class="experience__img grid">
                        <div class="experience__overlay">
                            <img src="assets/img/c3.jpg" alt="" class="experience__img-one">
                        </div>
                        
                        <div class="experience__overlay">
                            <img src="assets/img/c4.webp" alt="" class="experience__img-two">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== VIDEO ====================-->
            <section class="video section">
                <h2 class="section__title">Video Café</h2>

                <div class="video__container container">
                    <p class="video__description">See our video for a glimpse of our lovely cats and the atmosphere, 
                        before you decide.
                    </p>

                    <div class="video__content">
                        <video id="video-file">
                            <source src="assets/video/Cat.mp4" type="video/mp4">
                        </video>

                        <button class="button button--flex video__button" id="video-button">
                            <i class="ri-play-line video__button-icon" id="video-icon"></i>
                        </button>
                    </div>
                </div>
            </section>
        </main>

<?php include('include/footer.php') ?>
<?php include('include/add-js.php') ?>
    </body>
</html>