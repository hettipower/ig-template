<?php 
    require_once 'vendor/autoload.php';
    require './header.php'; 

    $detect = new \Detection\MobileDetect;
?>

<div class="page-container service-container">
    <section class="section service-single">
        <div class="inner">

            <div class="content-wrap">

                <?php if( $detect->isMobile() || $detect->isTablet() ): ?>
                    <h1>GOOGLE <span>SEO</span></h1>
                <?php endif; ?>

                <div class="left">
                    <?php if( !$detect->isMobile() || !$detect->isTablet() ): ?>
                        <h1>GOOGLE <span>SEO</span></h1>
                    <?php endif; ?>
                    <p>Our team of seasoned SEO experts understand Google and acknowledge the rewards of a website ranking in top positions on Google. iCONQUER offers strategic Google SEO services to ensure that your website ranks on page one for your targeted key phrases.</p>
                </div>
                <div class="right">
                    <img src="images/services/1.png" alt="">
                    <p>GOOGLE SEO</p>
                </div>
                <div class="full">
                    <ul>
                        <li>Complete on-site SEO auditing</li>
                        <li>Monthly backlink creation with quality content</li>
                        <li>Backlink portfolio analysis and assessment</li>
                        <li>Google Penalty and Manual Action recovery service</li>
                        <li>Targeted keyword research and identification</li>
                        <li>Fully up to date with the latest Google algorithm updates</li>
                        <li>Image optimisation and compression</li>
                        <li>Data driven strategies</li>
                        <li>Pagespeed Insights improvement</li>
                        <li>Comprehensive monthly reports keep you in the know</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

</div>

<?php require './footer.php'; ?>