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
                    <img src="assets/img/place1.1.jpg" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">5,0</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">HO WAD 101</h3>
                            <span class="place__subtitle">Roi Et, Thailand</span>
                            <span class="place__price">฿ 3,990 </span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>

                <!--==================== PLACES CARD 2 ====================-->
                <div class="place__card">
                    <img src="assets/img/place1.2.jpg" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,7</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">PHRA MAHA CHEDI CHAI MONGKHON</h3>
                            <span class="place__subtitle">Roi Et, Thailand</span>
                            <span class="place__price">฿ 5,990</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>

                <!--==================== PLACES CARD 3 ====================-->
                <div class="place__card">
                    <img src="assets/img/place1.3.jpg" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,9</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">WAT BURAPHARAM</h3>
                            <span class="place__subtitle">Roi Et, Thailand</span>
                            <span class="place__price">฿ 4,990</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>

                <!--==================== PLACES CARD 4 ====================-->
                <div class="place__card">
                    <img src="assets/img/place1.4.jpg" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,8</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">BUENG PHLAN CHAI</h3>
                            <span class="place__subtitle">Roi Et, Thailand</span>
                            <span class="place__price">฿ 3,490</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>

                <!--==================== PLACES CARD 5 ====================-->
                <div class="place__card">
                    <img src="assets/img/place1.5.jpg" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,8</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">KU KA SING</h3>
                            <span class="place__subtitle">Roi Et, Thailand</span>
                            <span class="place__price">฿ 6,490</span>
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

    <?php include('include/add-js.php') ?>

</body>

</html>