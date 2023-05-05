<?php 
    require_once 'vendor/autoload.php';
    require './header.php'; 

    $detect = new \Detection\MobileDetect;
?>

<div class="page-container services-container">
    <section class="section services-content">
        <div class="inner">

            <?php if( $detect->isMobile() || $detect->isTablet() ): ?>
                <div class="grid services-grid">
                    <div class="item">
                        <a href="service-single.php">
                            <img src="images/services/1.png" alt="">
                            <p>GOOGLE SEO</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="service-single.php" >
                            <img src="images/services/2.png" alt="">
                            <p>WEB DESIGN</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="service-single.php">
                            <img src="images/services/3.png" alt="">
                            <p>PPC MARKETING</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="service-single.php">
                            <img src="images/services/4.png" alt="">
                            <p>Content Writing</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="service-single.php">
                            <img src="images/services/5.png" alt="">
                            <p>WEB DEVELOPMENT</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="service-single.php">
                            <img src="images/services/6.png" alt="">
                            <p>SOCIAL MEDIA</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="service-single.php">
                            <img src="images/services/7.png" alt="">
                            <p>Domains & Hosting</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="service-single.php">
                            <img src="images/services/8.png" alt="">
                            <p>MOBILE APPS</p>
                        </a>
                    </div>
                </div>
            <?php else: ?>
                <div class="service-carousel">
                    <div class="item">
                        <div class="itemInner">
                            <a href="service-single.php">
                                <img src="images/services/1.png" alt="">
                                <p>GOOGLE SEO</p>
                            </a>
                            <a href="service-single.php" >
                                <img src="images/services/2.png" alt="">
                                <p>WEB DESIGN</p>
                            </a>
                            <a href="service-single.php">
                                <img src="images/services/3.png" alt="">
                                <p>PPC MARKETING</p>
                            </a>
                            <a href="service-single.php">
                                <img src="images/services/4.png" alt="">
                                <p>Content Writing</p>
                            </a>
                            <a href="service-single.php">
                                <img src="images/services/5.png" alt="">
                                <p>WEB DEVELOPMENT</p>
                            </a>
                            <a href="service-single.php">
                                <img src="images/services/6.png" alt="">
                                <p>SOCIAL MEDIA</p>
                            </a>
                            <a href="service-single.php">
                                <img src="images/services/7.png" alt="">
                                <p>Domains & Hosting</p>
                            </a>
                            <a href="service-single.php">
                                <img src="images/services/8.png" alt="">
                                <p>MOBILE APPS</p>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="itemInner">
                            <a href="service-single.php">
                                <img src="images/services/1.png" alt="">
                                <p>GOOGLE SEO</p>
                            </a>
                            <a href="service-single.php" >
                                <img src="images/services/2.png" alt="">
                                <p>WEB DESIGN</p>
                            </a>
                            <a href="service-single.php">
                                <img src="images/services/3.png" alt="">
                                <p>PPC MARKETING</p>
                            </a>
                            <a href="service-single.php">
                                <img src="images/services/4.png" alt="">
                                <p>Content Writing</p>
                            </a>
                            <a href="service-single.php">
                                <img src="images/services/5.png" alt="">
                                <p>WEB DEVELOPMENT</p>
                            </a>
                            <a href="service-single.php">
                                <img src="images/services/6.png" alt="">
                                <p>SOCIAL MEDIA</p>
                            </a>
                            <a href="service-single.php">
                                <img src="images/services/7.png" alt="">
                                <p>Domains & Hosting</p>
                            </a>
                            <a href="service-single.php">
                                <img src="images/services/8.png" alt="">
                                <p>MOBILE APPS</p>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>     

        </div>
    </section>

</div>

<?php require './footer.php'; ?>