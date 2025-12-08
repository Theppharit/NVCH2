<?php include('include/head.php') ?>

    <body>

        <?php include('include/navbar.php') ?>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <img src="assets/img/home1-2.jpg" alt="" class="home__img">

                <div class="home__container container grid">
                    <div class="home__data">
                        <span class="home__data-subtitle">Discover your place</span>
                        <h1 class="home__data-title">Explore The <br> Best <b>Beautiful <br> Beaches</b></h1>
                        <a href="#" class="button">Explore</a>

                    </div>

                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>

                    <div class="home__info">
                        <div>
                            <span class="home__info-title">5 best places to visit</span>
                            <a href="" class="button button--flex button--link home__info-button">
                                More <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>

                        <div class="home__info-overlay">
                            <img src="assets/img/home2-1.jpg" alt="" class="home__info-img">
                        </div>
                    </div>
                </div>
            </section>
 ==
            <!--==================== DISCOVER ====================-->
            <section class="discover section" id="discover">
                <h2 class="section__title">Discover the most <br> attractive places</h2>
                
                <div class="discover__container container swiper-container">
                    <div class="swiper-wrapper">
                        <!--==================== DISCOVER 1 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/dis1.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">วัดเกาะพยาม</h2>
                                <span class="discover__description">พระอุโบสถ์กลางทะเล</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 2 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/dis2.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">หาดอ่าวใหญ่</h2>
                                <span class="discover__description">รู้จักกันในนาม “Long Beach”</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 3 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/dis3.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">ฮิปปี้บาร์</h2>
                                <span class="discover__description">บาร์สไตล์แบบ Slow Life เรกเก้ ฮิปปี้ ยิปซี</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 4 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/dis4.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">หมู่บ้านชาวมอแกน</h2>
                                <span class="discover__description">ชาวมอแกนส่วนใหญ่จะประกอบอาชีพประมง ทำเกษตรกรรม</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include('include/footer.php') ?>

        <?php include('include/add-js.php') ?>
        <!--==================== FOOTER ====================-->
       

    
    </body>
</html>