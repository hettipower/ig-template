<?php 
    require_once 'vendor/autoload.php';
    require './header.php'; 

    $detect = new \Detection\MobileDetect;
?>

<div class="page-container client-container">
    <section class="section clients-content">
        <div class="inner">

            <?php if( $detect->isMobile() || $detect->isTablet() ): ?>
                <div class="grid">
                    <div class="item">
                        <a href="#client1" data-fancybox data-src="#client1">
                            <img src="images/client/1.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#client2" data-fancybox data-src="#client2">
                            <img src="images/client/2.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#client3" data-fancybox data-src="#client3">
                            <img src="images/client/3.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#client4" data-fancybox data-src="#client4">
                            <img src="images/client/4.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#client5" data-fancybox data-src="#client5">
                            <img src="images/client/5.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#client6" data-fancybox data-src="#client6">
                            <img src="images/client/6.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#client7" data-fancybox data-src="#client7">
                            <img src="images/client/7.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#client8" data-fancybox data-src="#client8">
                            <img src="images/client/8.png" alt="">
                        </a>
                    </div>
                </div>
            <?php else: ?>
                <div class="client-carousel">
                    <div class="item">
                        <div class="itemInner">
                            <a href="#client1" data-fancybox data-src="#client1">
                                <img src="images/client/1.png" alt="">
                            </a>
                            <a href="#client2" data-fancybox data-src="#client2">
                                <img src="images/client/2.png" alt="">
                            </a>
                            <a href="#client3" data-fancybox data-src="#client3">
                                <img src="images/client/3.png" alt="">
                            </a>
                            <a href="#client4" data-fancybox data-src="#client4">
                                <img src="images/client/4.png" alt="">
                            </a>
                            <a href="#client5" data-fancybox data-src="#client5">
                                <img src="images/client/5.png" alt="">
                            </a>
                            <a href="#client6" data-fancybox data-src="#client6">
                                <img src="images/client/6.png" alt="">
                            </a>
                            <a href="#client7" data-fancybox data-src="#client7">
                                <img src="images/client/7.png" alt="">
                            </a>
                            <a href="#client8" data-fancybox data-src="#client8">
                                <img src="images/client/8.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="itemInner">
                            <a href="#client1" data-fancybox data-src="#client1">
                                <img src="images/client/1.png" alt="">
                            </a>
                            <a href="#client2" data-fancybox data-src="#client2">
                                <img src="images/client/2.png" alt="">
                            </a>
                            <a href="#client3" data-fancybox data-src="#client3">
                                <img src="images/client/3.png" alt="">
                            </a>
                            <a href="#client4" data-fancybox data-src="#client4">
                                <img src="images/client/4.png" alt="">
                            </a>
                            <a href="#client5" data-fancybox data-src="#client5">
                                <img src="images/client/5.png" alt="">
                            </a>
                            <a href="#client6" data-fancybox data-src="#client6">
                                <img src="images/client/6.png" alt="">
                            </a>
                            <a href="#client7" data-fancybox data-src="#client7">
                                <img src="images/client/7.png" alt="">
                            </a>
                            <a href="#client8" data-fancybox data-src="#client8">
                                <img src="images/client/8.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </section>

    <div id="client1" class="client-content" style="display:none;max-width:1200px;">
        <div class="content-inner">
            <div class="details">
                <div class="logo"><img src="images/client/1.png" alt=""></div>
                <div class="website">WWW.DJKIT.COM</div>
                <div class="grid">
                    <div class="item">
                        <span class="big">34%</span>
                        Increase of Organic Traffic
                    </div>
                    <div class="item">
                        <span class="big">45%</span>
                        Increase of Organic Conversions
                    </div>
                    <div class="item">
                        <span class="big">54%</span>
                        Increase in SERPS Visibility
                    </div>
                    <div class="item">
                        <span class="big">04</span>
                        pg1 Google ranked phrases
                    </div>
                </div>
            </div>
            <div class="content">
                <p><i>"We have worked with Craig for many years. The team are extremely quick to provide assistance with all our online marketing needs and have delivered good results year on year for our company. We could not be more pleased with our choice of SEO partner to help sell our dj kit. appreciate the work and loyalty over the years providing our djkit.com site a successful organic promo on Google. its great to have someone always on the other end of the line to support, thanks"</i></p>
                <p><strong>James - Managing Director</strong></p>
            </div>
        </div>
    </div>

    <div id="client2" class="client-content" style="display:none;max-width:1200px;">
        <div class="content-inner">
            <div class="details">
                <div class="logo"><img src="images/client/2.png" alt=""></div>
                <div class="website">WWW.DJKIT.COM</div>
                <div class="grid">
                    <div class="item">
                        <span class="big">34%</span>
                        Increase of Organic Traffic
                    </div>
                    <div class="item">
                        <span class="big">45%</span>
                        Increase of Organic Conversions
                    </div>
                    <div class="item">
                        <span class="big">54%</span>
                        Increase in SERPS Visibility
                    </div>
                    <div class="item">
                        <span class="big">04</span>
                        pg1 Google ranked phrases
                    </div>
                </div>
            </div>
            <div class="content">
                <p><i>"We have worked with Craig for many years. The team are extremely quick to provide assistance with all our online marketing needs and have delivered good results year on year for our company. We could not be more pleased with our choice of SEO partner to help sell our dj kit. appreciate the work and loyalty over the years providing our djkit.com site a successful organic promo on Google. its great to have someone always on the other end of the line to support, thanks"</i></p>
                <p><strong>James - Managing Director</strong></p>
            </div>
        </div>
    </div>

    <div id="client3" class="client-content" style="display:none;max-width:1200px;">
        <div class="content-inner">
            <div class="details">
                <div class="logo"><img src="images/client/3.png" alt=""></div>
                <div class="website">WWW.DJKIT.COM</div>
                <div class="grid">
                    <div class="item">
                        <span class="big">34%</span>
                        Increase of Organic Traffic
                    </div>
                    <div class="item">
                        <span class="big">45%</span>
                        Increase of Organic Conversions
                    </div>
                    <div class="item">
                        <span class="big">54%</span>
                        Increase in SERPS Visibility
                    </div>
                    <div class="item">
                        <span class="big">04</span>
                        pg1 Google ranked phrases
                    </div>
                </div>
            </div>
            <div class="content">
                <p><i>"We have worked with Craig for many years. The team are extremely quick to provide assistance with all our online marketing needs and have delivered good results year on year for our company. We could not be more pleased with our choice of SEO partner to help sell our dj kit. appreciate the work and loyalty over the years providing our djkit.com site a successful organic promo on Google. its great to have someone always on the other end of the line to support, thanks"</i></p>
                <p><strong>James - Managing Director</strong></p>
            </div>
        </div>
    </div>

    <div id="client4" class="client-content" style="display:none;max-width:1200px;">
        <div class="content-inner">
            <div class="details">
                <div class="logo"><img src="images/client/4.png" alt=""></div>
                <div class="website">WWW.DJKIT.COM</div>
                <div class="grid">
                    <div class="item">
                        <span class="big">34%</span>
                        Increase of Organic Traffic
                    </div>
                    <div class="item">
                        <span class="big">45%</span>
                        Increase of Organic Conversions
                    </div>
                    <div class="item">
                        <span class="big">54%</span>
                        Increase in SERPS Visibility
                    </div>
                    <div class="item">
                        <span class="big">04</span>
                        pg1 Google ranked phrases
                    </div>
                </div>
            </div>
            <div class="content">
                <p><i>"We have worked with Craig for many years. The team are extremely quick to provide assistance with all our online marketing needs and have delivered good results year on year for our company. We could not be more pleased with our choice of SEO partner to help sell our dj kit. appreciate the work and loyalty over the years providing our djkit.com site a successful organic promo on Google. its great to have someone always on the other end of the line to support, thanks"</i></p>
                <p><strong>James - Managing Director</strong></p>
            </div>
        </div>
    </div>

    <div id="client5" class="client-content" style="display:none;max-width:1200px;">
        <div class="content-inner">
            <div class="details">
                <div class="logo"><img src="images/client/5.png" alt=""></div>
                <div class="website">WWW.DJKIT.COM</div>
                <div class="grid">
                    <div class="item">
                        <span class="big">34%</span>
                        Increase of Organic Traffic
                    </div>
                    <div class="item">
                        <span class="big">45%</span>
                        Increase of Organic Conversions
                    </div>
                    <div class="item">
                        <span class="big">54%</span>
                        Increase in SERPS Visibility
                    </div>
                    <div class="item">
                        <span class="big">04</span>
                        pg1 Google ranked phrases
                    </div>
                </div>
            </div>
            <div class="content">
                <p><i>"We have worked with Craig for many years. The team are extremely quick to provide assistance with all our online marketing needs and have delivered good results year on year for our company. We could not be more pleased with our choice of SEO partner to help sell our dj kit. appreciate the work and loyalty over the years providing our djkit.com site a successful organic promo on Google. its great to have someone always on the other end of the line to support, thanks"</i></p>
                <p><strong>James - Managing Director</strong></p>
            </div>
        </div>
    </div>

    <div id="client6" class="client-content" style="display:none;max-width:1200px;">
        <div class="content-inner">
            <div class="details">
                <div class="logo"><img src="images/client/6.png" alt=""></div>
                <div class="website">WWW.DJKIT.COM</div>
                <div class="grid">
                    <div class="item">
                        <span class="big">34%</span>
                        Increase of Organic Traffic
                    </div>
                    <div class="item">
                        <span class="big">45%</span>
                        Increase of Organic Conversions
                    </div>
                    <div class="item">
                        <span class="big">54%</span>
                        Increase in SERPS Visibility
                    </div>
                    <div class="item">
                        <span class="big">04</span>
                        pg1 Google ranked phrases
                    </div>
                </div>
            </div>
            <div class="content">
                <p><i>"We have worked with Craig for many years. The team are extremely quick to provide assistance with all our online marketing needs and have delivered good results year on year for our company. We could not be more pleased with our choice of SEO partner to help sell our dj kit. appreciate the work and loyalty over the years providing our djkit.com site a successful organic promo on Google. its great to have someone always on the other end of the line to support, thanks"</i></p>
                <p><strong>James - Managing Director</strong></p>
            </div>
        </div>
    </div>

    <div id="client7" class="client-content" style="display:none;max-width:1200px;">
        <div class="content-inner">
            <div class="details">
                <div class="logo"><img src="images/client/7.png" alt=""></div>
                <div class="website">WWW.DJKIT.COM</div>
                <div class="grid">
                    <div class="item">
                        <span class="big">34%</span>
                        Increase of Organic Traffic
                    </div>
                    <div class="item">
                        <span class="big">45%</span>
                        Increase of Organic Conversions
                    </div>
                    <div class="item">
                        <span class="big">54%</span>
                        Increase in SERPS Visibility
                    </div>
                    <div class="item">
                        <span class="big">04</span>
                        pg1 Google ranked phrases
                    </div>
                </div>
            </div>
            <div class="content">
                <p><i>"We have worked with Craig for many years. The team are extremely quick to provide assistance with all our online marketing needs and have delivered good results year on year for our company. We could not be more pleased with our choice of SEO partner to help sell our dj kit. appreciate the work and loyalty over the years providing our djkit.com site a successful organic promo on Google. its great to have someone always on the other end of the line to support, thanks"</i></p>
                <p><strong>James - Managing Director</strong></p>
            </div>
        </div>
    </div>

    <div id="client8" class="client-content" style="display:none;max-width:1200px;">
        <div class="content-inner">
            <div class="details">
                <div class="logo"><img src="images/client/8.png" alt=""></div>
                <div class="website">WWW.DJKIT.COM</div>
                <div class="grid">
                    <div class="item">
                        <span class="big">34%</span>
                        Increase of Organic Traffic
                    </div>
                    <div class="item">
                        <span class="big">45%</span>
                        Increase of Organic Conversions
                    </div>
                    <div class="item">
                        <span class="big">54%</span>
                        Increase in SERPS Visibility
                    </div>
                    <div class="item">
                        <span class="big">04</span>
                        pg1 Google ranked phrases
                    </div>
                </div>
            </div>
            <div class="content">
                <p><i>"We have worked with Craig for many years. The team are extremely quick to provide assistance with all our online marketing needs and have delivered good results year on year for our company. We could not be more pleased with our choice of SEO partner to help sell our dj kit. appreciate the work and loyalty over the years providing our djkit.com site a successful organic promo on Google. its great to have someone always on the other end of the line to support, thanks"</i></p>
                <p><strong>James - Managing Director</strong></p>
            </div>
        </div>
    </div>

</div>

<?php require './footer.php'; ?>