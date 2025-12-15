<?php include('include/head.php') ?>

<body>

    <?php include('include/navbar.php') ?>

    <main class="main">
        <!--==================== DISCOVER ====================-->
        <section class="discover section" id="discover">
            <h2 class="section__title">Discover The Most  <br> Attractive Places In Roi Et</h2>

            <div class="discover__container container swiper-container">
                <div class="swiper-wrapper">
                    <!--==================== DISCOVER 1 ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/discover1.1.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Roi Et Tower</h2>
                            <span class="discover__description">32 tours available</span>
                        </div>
                    </div>

                    <!--==================== DISCOVER 2 ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/discover1.2.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Bueng Phlan Chai</h2>
                            <span class="discover__description">24 tours available</span>
                        </div>
                    </div>

                    <!--==================== DISCOVER 3 ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/discover1.3.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Wat Buraphaphiram</h2>
                            <span class="discover__description">15 tours available</span>
                        </div>
                    </div>

                    <!--==================== DISCOVER 4 ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/discover1.4.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Wat Pha Nam Thip Thep Prasit Waranaram</h2>
                            <span class="discover__description">12 tours available</span>
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
                        <h2 class="experience__number">75</h2>
                        <span class="experience__description">Complete <br> tours</span>
                    </div>

                    <div class="experience__data">
                        <h2 class="experience__number">650+</h2>
                        <span class="experience__description">Tourist <br> Destination</span>
                    </div>
                </div>

                <div class="experience__img grid">
                    <div class="experience__overlay">
                        <img src="assets/img/experience1.1.jpg" alt="" class="experience__img-one">
                    </div>

                    <div class="experience__overlay">
                        <img src="assets/img/experience1.2.jpg" alt="" class="experience__img-two">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== VIDEO ====================-->
        <section class="video section">
            <h2 class="section__title">Video Tour</h2>

            <div class="video__container container">
                <p class="video__description">Discover the Charm of Central Isaan with our video featuring the most beautiful and 
                    captivating cultural and natural attractions in Roi Et province, perfect for you and your family.
                </p>

                <div class="video__content">
                    <video id="video-file">
                        <source src="assets/video/video1.mp4" type="video/mp4">
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