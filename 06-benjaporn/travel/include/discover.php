<?php include('include/head.php') ?>

    <body>

        <?php include('include/navbar.php') ?>

        <main class="main" id="discover">
            <!--==================== DISCOVER ====================-->
            <section class="discover section" >
                <h2 class="section__title">Discover the most <br> attractive places</h2>
                
                <div class="discover__container container swiper-container">
                    <div class="swiper-wrapper">
                        <!--==================== DISCOVER 1 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/discover1-2.webp" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title"> น้ำตกห้วยแม่ขมิ้น กาญจนบุรี</h2>
                                <span class="discover__description">  น้ำตกห้วยแม่ขมิ้น เป็นน้ำตกที่สามารถท่องเที่ยวได้ตลอดปี ตั้งอยู่บริเวณ อุทยานแห่งชาติเขื่อนศรีนครินทร์</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 2 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/discover2-1.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">น้ำตกแม่สุรินทร์ แม่ฮ่องสอน</h2>
                                <span class="discover__description">น้ำตกแม่สุรินทร์ เป็นน้ำตกที่มีความสูงเป็นลำดับต้นๆ ของไทย ที่อยู่ใน จังหวัดแม่ฮ่องสอน และน่าจะเป็น น้ำตกที่สูงที่สุดในแม่ฮ่องสอน </span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 3 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/discover3-1.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">น้ำตกสะปัน น่าน</h2>
                                <span class="discover__description">น้ำตกสะปัน น้ำตกที่ตั้งอยู่ใน อุทยานแห่งชาติขุนน่าน </span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 4 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/discover4-1.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">น้ำตกเอราวัณ กาญจนบุรี</h2>
                                <span class="discover__description"> น้ำตกชื่อดังสีเขียวมรกตของ กาญจนบุรี ที่จะไม่พูดถึงไม่ได้เลย ก็คือ น้ำตกเอราวัณ </span>
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
                            <img src="assets/img/experience1-1.webp" alt="" class="experience__img-one">
                        </div>
                        
                        <div class="experience__overlay">
                            <img src="assets/img/experience2-1.jpg" alt="" class="experience__img-two">
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
                            <source src="assets/video/video 1.mp4" type="video/mp4">
                        </video>

                        <button class="button button--flex video__button" id="video-button">
                            <i class="ri-play-line video__button-icon" id="video-icon"></i>
                        </button>
                    </div>
                </div>
            </section>
             </main>

        <?php include('include/footer.php') ?>
        <?php include('include/add-video.php') ?>
        <?php include('include/add-js.php') ?>


    </body>
</html>