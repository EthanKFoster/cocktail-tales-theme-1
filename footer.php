        <!-- footer section -->
        <footer>
            <div class="container mt-3 pt-3 justify-content-around">
                <div class="row my-3 justify-content-around align-items-center">
                    <div class="col _footer_menu justify-content-start align-items-center">
                        <ul>
                            <li><a href="<?php echo site_url('/terms-of-service'); ?>">Terms of Service</a></li>
                            <li><a href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a></li>
                            <li><a href="<?php echo site_url('/contact-me'); ?>">Contact</a></li>
                            <li><a href="<?php echo site_url('/about-me'); ?>">About Me</a></li>
                            <li><a href="#">Recommended Gear</a></li>
                            <li><a href="#">Sponsors</a></li>
                        </ul>
                    </div>
                    <a class="col mx-auto border-start border-end border-1 border-secondary text-align-center justify-content-center" id="_nav_center" href="<?php echo site_url(); ?>">
                        <img class="row mx-auto px-auto" src="<?php echo get_theme_file_uri('/images/CT.png')?>" alt="Cocktail Tales Logo" width="80px" height="80px">
                        <h6 class=" text-center">Cocktail Tales</h6>
                    </a>
                    <div class="col _icons d-flex justify-content-around align-items-center ms-4">
                        <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>

                <hr>

                <div class="row text-center justify-content-center">
                    <span class="col"><p>© 2021 Cocktail Tales LLC </p></span>
                </div>
            </div>
        </footer>
    </div>

<!-- any global scripts -->
<script src="./bootstrap/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>    
</body>
</html>