<?php 
    require_once 'vendor/autoload.php';

    $detect = new \Detection\MobileDetect;
?>
<footer>
    <div class="container">
        <div class="logos">
            <img src="./images/google-partner-logo-8462431A20-seeklogo.png" alt="">
            <img src="./images/Daco_5885660.png" alt="">
            <img class="google-review" src="./images/pngwing 1.png" alt="">
        </div>
        <div class="link">
            <a href="contact.php" class="link_btn">CONTACT</a>
        </div>
    </div>
</footer>

<div id="popup-form" class="site-popup-form" style="display:none;max-width:600px;">
    <div class="popup-content">
        <p>Thank you for visiting iCONQUER.</p>
        <p>To keep updated with the latest Google algorithm changes and our latest offers, please provide your contact details, and click 'SUBMIT'. Alternatively press 'X' to close this form and continue browsing.</p>

        <form action="">

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name *" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Phone Number" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Email Address" required>
            </div>

            <div class="g-recaptcha" data-sitekey="6LdDvJEUAAAAANqme8lbtXFwhxlAjc1ZOjYJyarO" data-callback="onSubmit"></div>

            <div class="btn-group">
                <input type="submit" class="btn" value="SUBMIT">
            </div>

        </form>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="./js/scripts.min.js"></script>
</body>
</html>