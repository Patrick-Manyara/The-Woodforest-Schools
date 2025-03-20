<?php include_once 'header.php' ?>

<main>
    <!-- campus breadcrumb start -->
    <section class="tp-breadcrumb__area pt-160 pb-120 p-relative z-index-1 fix">
        <div class="tp-breadcrumb__bg " style="background:#ffa700"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="tp-breadcrumb__content">
                        <h3 class="tp-breadcrumb__title color">About Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- campus breadcrumb end -->


    <!-- campus choose area start -->
    <section class="tp-campus-choose-area pt-120 pb-30 grey-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-campus-choose-wrapper text-center">
                        <div class="tp-campus-choose-btn admission wow fadeInUp" data-wow-delay=".3s">

                            <div class="tp-campus-choose-content mb-10 wow fadeInUp" data-wow-delay=".5s">
                                <h2 class="tp-campus-choose-title fs-50">
                                    At The Woodforest Schools, we are dedicated to providing an enriching learning environment that goes beyond textbooks and classrooms.
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- campus choose area end -->


    <!-- admission counter area start -->
    <section id="down" class="tp-admission-counter-area grey-bg pb-120">
        <div class="container">
            <div class="tp-admission-counter-box wow fadeInUp" data-wow-delay=".3s">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-admission-counter-item">
                            <h5 class="tp-admission-counter-title">
                                <span>Mission</span>
                            </h5>
                            <p class="after">
                                To cultivate a community of lifelong learners, fostering curiosity, critical thinking, and compassion, preparing students to thrive in an ever-evolving world.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-admission-counter-item pl-50">
                            <h5 class="tp-admission-counter-title">
                                <span>Vision</span>
                            </h5>
                            <p class="after">
                                A world-class institution where every student discovers their potential, embraces diversity, and contributes positively to society, driven by a passion for knowledge and a commitment to excellence.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-admission-counter-item">
                            <h5 class="tp-admission-counter-title">
                                <span>Values</span>
                            </h5>
                            <p class="after">
                                Integrity, inclusivity, and innovation form the pillars of our community. We empower students to act with honesty, embrace diversity, and pursue knowledge boldly, shaping leaders who make a meaningful impact in the world.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- admission counter area end -->


    <!-- history area start -->
    <section class="tp-history-area grey-bg pb-120">
        <div class="container">
            <div id="down" class="tp-history-box-wrapper p-relative">
                <div class="tp-history-box overlay-1 p-relative mb-20">
                    <div class="row align-items-center">
                        <div class="col-lg-2">

                        </div>
                        <div class="col-lg-5">

                        </div>
                        <div class="col-lg-5">
                            <div class="tp-history-item-content">
                                <h2 class="tp-history-title line">2023</h2>
                                <p>
                                    Upon opening its doors, the school welcomed 14 children (6 boys and 8 girls). At the time, we offered Pre-Group, Pre-Primary 1, and Pre-Primary 2 classes. Our team consisted of three teachers, two assistant teachers, and a driver.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-history-box p-relative mb-20">
                    <div class="row align-items-center">
                        <div class="col-lg-1">

                        </div>
                        <div class="col-lg-5">
                            <div class="tp-history-item-content-left">
                                <h2 class="tp-history-title left">2024</h2>
                                <p>
                                    A year of transformation as The Woodforest Schools embarks on a journey of modernization with
                                    upgrades to learning facilities and advanced teacher training programs
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- //RIGHT  -->
                <div class="tp-history-box p-relative mb-20">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="tp-history-year">
                                <!-- <h5 class="tp-history-year-title">2012</h5> -->
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="tp-history-item-thumb-left">
                                <img src="assets/img/history/history-thumb-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="tp-history-item-content">
                                <h2 class="tp-history-title line">2025</h2>
                                <p>
                                    Building a foundation for a brighter future, with a strong focus on academic excellence, student development, and global best practices.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- //LEFT   -->
                <div class="tp-history-box overlay-2 p-relative">
                    <div class="row align-items-center">
                        <div class="col-lg-1">

                        </div>
                        <div class="col-lg-5">
                            <div class="tp-history-item-content-left">
                                <h2 class="tp-history-title left">2026</h2>
                                <p>
                                    Hoping on strengthening global integration by introducing internationally recognized curricula, fostering cross-cultural learning experiences, and forming partnerships with educational institutions worldwide.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- history area end -->

</main>

<style>
    .tp-history-box-wrapper::after {
        left: 50%;
    }

    .tp-history-title.left::after {
        position: absolute;
        content: "";
        top: 50%;
        height: 1px;
        width: 80px;
        left: 80%;
        z-index: 2;
        transform: translateY(-50%);
        background: var(--tp-theme-primary);
    }

    @media screen and (max-width:600px) {
        .tp-history-box-wrapper::after {
            left: unset;
        }

        .tp-history-title.left::after {
            left: unset;
        }
    }
</style>

<?php include_once 'footer.php' ?>