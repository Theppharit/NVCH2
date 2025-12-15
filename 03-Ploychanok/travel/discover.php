
<?php include('include/head.php') ?>

<?php include('include/navbar.php') ?>
<main>
            <!--==================== DISCOVER ====================-->
            <section class="discover section" id="discover">
                <h2 class="section__title">Discover the most <br> attractive places</h2>
                
                <div class="discover__container container swiper-container">
                    <div class="swiper-wrapper">
                        <!--==================== DISCOVER 1 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/dis1.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">ดอยเสมอดาว</h2>
                                <span class="discover__description">24 tours available</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 2 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/dis2.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">หอศิลป์ริมน่าน</h2>
                                <span class="discover__description">15 tours available</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 3 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/dis3.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">วัดพระธาตุเขาน้อย</h2>
                                <span class="discover__description">18 tours available</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 4 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/dis4.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">วัดภูมินทร์</h2>
                                <span class="discover__description">32 tours available</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== EXPERIENCE ====================-->
            <section class="experience section">
                <h2 class="section__title">With Our Experience <br> We Will Recommend You</h2>

                <div class="experience__container container grid">
                    <div class="experience__content grid">
                        
                    </div>

                    <div class="experience__img grid">
                        <div class="experience__overlay">
                            <img src="assets/img/experience1-2.jpg" alt="" class="experience__img-one">
                        </div>
                        
                        <div class="experience__overlay">
                            <img src="assets/img/experience2-2.jpg" alt="" class="experience__img-two">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== VIDEO ====================-->
            <section class="video section">
                <h2 class="section__title">Video Tour</h2>

                <div class="video__container container">
                    <p class="video__description">Find out more with our video of the most beautiful and 
                        pleasant places for you and your family.
                    </p>

                    <div class="video__content">
                        <video id="video-file">
                            <source src="assets/video/video2.mp4" type="video/mp4">
                        </video>

                        <button class="button button--flex video__button" id="video-button">
                            <i class="ri-play-line video__button-icon" id="video-icon"></i>
                        </button>
                    </div>
                </div>
            </section>
</main>
<?php include('include/footer.php') ?>

<?php include('include/addjs.php') ?>
