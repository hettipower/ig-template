<?php 
    require_once 'vendor/autoload.php';
    require './header.php'; 

    $detect = new \Detection\MobileDetect;
?>

<div class="page-container contact-container">
    <section class="section contact-wrap">
        <div class="inner">

            <div class="content-wrap">
                <div class="details">
                    
                    <ul class="contact">
                        <li>
                            <span class="icon">
                                <img src="./images/mail.png" alt="">
                            </span>
                            info@iconquer.com
                        </li>
                        <li>
                            <span class="icon">
                                <img src="./images/tel.png" alt="">
                            </span>
                            01254 933 515
                        </li>
                        <li>
                            <span class="icon">
                                <img src="./images/tel.png" alt="">
                            </span>
                            0333 2346 423
                        </li>
                    </ul>

                    <ul class="social">
                        <li>
                            <a href="#">
                                <img src="./images/linkedin.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./images/facebook.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./images/twitter.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./images/instagram.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./images/pint.png" alt="">
                            </a>
                        </li>
                    </ul>

                    <ul class="contact">
                        <li>
                            <span class="icon">
                                <img src="./images/address.png" alt="">
                            </span>
                            iCONQUER <br/>
                            Blackburn Technology Management Centre <br/>
                            Challenge Way <br/>
                            Blackburn <br/>
                            BB1 5QB
                        </li>
                        <li>
                            <span class="icon">
                                <img src="./images/whatsapp.png" alt="">
                            </span>
                            24-7 SUPPORT
                        </li>
                    </ul>

                </div>
                <div class="form">

                    <form action="">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="">Email Address</label>
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="text" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="">Website</label>
                            <input type="text" class="form-control" placeholder="Website">
                        </div>
                        <div class="form-group">
                            <label for="">Tell us more</label>
                            <textarea class="form-control" placeholder="Tell us more"></textarea>
                        </div>
                        <div class="btn-group">
                            <input type="submit" class="btn" value="SUBMIT">
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>

</div>

<?php require './footer.php'; ?>