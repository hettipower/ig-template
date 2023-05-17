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

                        <div class="form-group captcha-wrap">
                            <div class="g-recaptcha" data-sitekey="6LdDvJEUAAAAANqme8lbtXFwhxlAjc1ZOjYJyarO" data-callback="onSubmit"></div>
                                
                            <div class="form-links">
                                <p style="margin:0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                                <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"></path>
                                <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"></path>
                            </svg><a href="#">Terms & Conditions</a></p>
                                <p style="margin:0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                                <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"></path>
                                <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"></path>
                            </svg><a href="#">Cookie Policy</a></p>
                            </div>
                        </div>


                        <div class="btn-group col-12">
                            <input type="submit" class="btn" value="SUBMIT">
                        </div>
                    </form>

                </div>
            </div>

            <?php if( $detect->isMobile() || $detect->isTablet() ): ?>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2358.577035498497!2d-2.45506172287707!3d53.76141414358554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b9e5697852c47%3A0x9ac2100899328419!2siCONQUER%20Ltd!5e0!3m2!1sen!2slk!4v1684308049941!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            <?php endif; ?>

        </div>
    </section>

</div>

<?php require './footer.php'; ?>