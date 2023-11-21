
<div class=" col-12 infos">
    <div class="container" style="display: flex;padding-top: 20px;">
        <div class="info-left">
            <img class="undraw-newspaper-re" src="<?php echo get_template_directory_uri();?>/img/undraw-newspaper-re-syf5-1.svg">
        </div>
        <div class="info-right">
            <div class="get-started-with">Get Started with<br>Pophealthpulse.com</div>
            <p class="lorem-ipsum-dolor">
                Lorem ipsum dolor sit amet consectetur. At netus metus cursus<br>ultricies neque vestibulum leo
                urna. Et faucibus volutpat amet leo <br>pellentesque elit massa neque vestibulum leo urna. Et
                faucibus volutpat ametleo pellentesque elit massa
            </p>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-md-3 col-3">
                    <div class="frame-22">
                        <img class="element-padded" src="<?php echo get_template_directory_uri();?>/img/121921447-padded-logo-1-1.png">
                        <div class="text-wrapper-22">Pophealthpulse</div>
                    </div>
                    <div class="social">
                        <div class="social-icon">
                            <img class="twitter" src="<?php echo get_template_directory_uri();?>/img/twitter.svg">
                        </div>
                        <div class="social-icon"><img class="group-6" src="<?php echo get_template_directory_uri();?>/img/group-14.png"></div>
                        <div class="social-icon"><img class="shape" src="<?php echo get_template_directory_uri();?>/img/shape.svg"></div>
                    </div>
                </div>
                <div class="col-md-3 col-3">
                    <div class="navigation">
                        <div class="navigation-2">MENU</div><br>
                        <div class="home-about-us-what-w">
                            <a href="">Home</a><br>
                            <a href="">Members</a><br>
                            <a href="">Blog</a><br>
                            <a href="">About</a><br>
                            <a href="">Contact</a><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-3">
                    <div class="navigation">
                        <div class="navigation-2">OUR TOPICS</div><br>
                        <div class="home-about-us-what-w">
                            <a href="">Health</a><br>
                            <a href="">Wellness</a><br>
                            <a href="">Food as Medicine</a><br>
                            <a href="">Health Equity</a><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-3">
                    <div class="navigation">
                        <div class="navigation-2">LEGAL</div><br>
                        <div class="home-about-us-what-w">
                            <a href="">General Info</a><br>
                            <a href="">Privacy Policy</a><br>
                            <a href="">Terms of Service</a><br>
                        </div>
                    </div>
                </div>
            </div>
            <p class="element-APCOM-all-ri">© 2023, Pophealthpluse. All Rights Reserved.</p>
        </div>
    </div>
</footer>
</div>
<?php //wp_footer(); ?>
<script type="text/javascript">
// Get a reference to the element using class selector
    var banner = document.querySelector('.banner');

// Set the width based on the screen width
    function setElementWidth() {
        var screenWidth = window.innerWidth;
// var targetWidth = screenWidth * 0.5;
        banner.style.width = screenWidth + 'px';
    }

// Call the function initially and listen for window resize events
    setElementWidth();
    window.addEventListener('resize', setElementWidth);

</script>
<script>
    const hamburger = document.querySelector('.hamburger');
    const navLink = document.querySelector('.navbar');

    hamburger.addEventListener('click', () => {
        if (navLink.style.display === 'block') {
            navLink.style.display = 'none';
        } else {
            navLink.style.display = 'block';
        }
    });
</script>
</body>
</html>