<?php 
    require_once 'vendor/autoload.php';
    require './header.php'; 

    $detect = new \Detection\MobileDetect;
?>

<script src="https://www.google.com/recaptcha/api.js"></script>

<div class="page-container contact-container">
    <section class="section contact-wrap">
        <div class="inner">

            <div class="content-wrap">
                <div class="details">
                    
                    <ul class="contact">
                        <li>
                            <span class="icon"><i class="fas fa-envelope"></i></span>
                            info@iconquer.com
                        </li>
                        <li>
                            <span class="icon"><i class="fas fa-phone-alt"></i></span>
                            01254 933 515
                        </li>
                        <li>
                            <span class="icon"><i class="fas fa-phone-alt"></i></span>
                            0333 2346 423
                        </li>
                    </ul>

                    <ul class="contact">
                        <li>
                            <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                            iCONQUER <br/>
                            Blackburn Technology Management Centre <br/>
                            Challenge Way <br/>
                            Blackburn , Lancashire<br/>
                            BB1 5QB
                        </li>
                        <li>
                            <span class="icon">
                                <img src="./images/whatsapp.png" alt="">
                            </span>
                            24-7 SUPPORT
                        </li>
                    </ul>

                    <ul class="social">
                        <li>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </li>
                    </ul>

                </div>
                <div class="form">

                    <h2>Get in Touch</h2>

                    <form action="">
                        <div class="form-group col-6">
                            <label for="">Name <span class="required">*</span></label>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group col-6">
                            <label for="">Email Address <span class="required">*</span></label>
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group col-6">
                            <label for="">Phone Number <span class="required">*</span></label>
                            <input type="text" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group col-6">
                            <label for="">Website</label>
                            <input type="text" class="form-control" placeholder="Website">
                        </div>
                        <div class="form-group col-12">
                            <label for="">Tell us more</label>
                            <textarea class="form-control" placeholder="Tell us more"></textarea>
                        </div>

                        <div class="g-recaptcha" data-sitekey="6LdDvJEUAAAAANqme8lbtXFwhxlAjc1ZOjYJyarO" data-callback="onSubmit"></div>

                        <div class="btn-group col-12">
                            <input type="submit" class="btn" value="SUBMIT">
                        </div>
                    </form>

                </div>
            </div>

            <?php if( $detect->isMobile() || $detect->isTablet() ): ?>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31691.02888401989!2d79.98561825407648!3d6.845134121910701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2518e99e2ee8d%3A0xc3eebfdbc86273ee!2sHomagama!5e0!3m2!1sen!2slk!4v1683616362397!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            <?php endif; ?>

        </div>
    </section>

</div>

<?php require './footer.php'; ?>