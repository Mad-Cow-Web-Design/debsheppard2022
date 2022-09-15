<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Deb_Sheppard
 */

?>
<?php if(! is_page ( array(53079,53087) ) ) : ?>
	<footer id="colophon" class="site-footer" style="background: #fff url('<?php echo get_template_directory_uri().'/assets/images/footer.png'; ?>') center / cover no-repeat;">
        <div class="social">
            <a href="https://www.facebook.com/DebSheppardPsychicMedium/" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/images/facebook.png'; ?>" alt=""></a>
            <a href="https://www.instagram.com/debsheppardpsychicmedium/" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/images/pinterest2.png'; ?>" alt=""></a>
            <a href="https://www.linkedin.com/in/debsheppardpsychicmedium/" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/images/linkedin.png'; ?>" alt=""></a>
            <a href="https://www.pinterest.com/debsheppard1/" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/images/pinterest.png'; ?>" alt=""></a>
            <a href="https://twitter.com/TheDebSheppard" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/images/twitter.png'; ?>" alt=""></a>
            <a href="https://www.youtube.com/channel/UCrkSMFGXHmaHj3TGUlWLGIA" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/images/youtube.png'; ?>" alt=""></a>
        </div>
        <a href="/" class="mobile-logo"><img src="<?php echo get_template_directory_uri().'/assets/images/footer-logo.png'; ?>" alt=""></a>
        <div class="main-footer-area">
            <div class="left-side">
                <div class="column1">
                    <h4>Explore</h4>
                    <ul>
                        <li><a href="https://www.debsheppard.com/deb-sheppard-story/">About Deb</a></li>
                        <li><a href="https://www.debsheppard.com/debevents/">Events</a></li>
                        <li><a href="https://www.debsheppard.com/spirited-straight-talk-podcast/">Podcast</a></li>
                        <li><a href="https://www.debsheppard.com/blog/">Blog</a></li>
                        <li><a href="https://www.debsheppard.com/contact/">Contact</a></li>
                    </ul>
                    <a href="https://www.debsheppard.com/policies/"><h5>Policies</h5></a>
                    <a href="https://www.debsheppard.com/preparing-for-a-session/"><h5>Preparing for a session</h5></a>
                </div>
                <div class="column2">
                    <h4>Learn</h4>
                    <ul>
                        <li><a href="https://courses.debsheppard.com/store" target="_blank">Online Courses</a></li>
                        <li><a href="https://courses.debsheppard.com/the-soulution" target="_blank">SOULution Mentoring Program</a></li>
                        <li><a href="https://www.debsheppard.com/debevents/">Workshops</a></li>
                    </ul>
                    <h4>Shop</h4>
                    <ul>
                        <li><a href="https://www.debsheppard.com/book/">Book</a></li>
                        <li><a href="https://www.debsheppard.com/product/debs-forever-connected-oracle-cards/">Oracle Cards</a></li>
                        <li><a href="https://www.debsheppard.com/product-category/mala-collection-by-deb-sheppard/">Malas</a></li>
                    </ul>
                </div>
            </div><!-- left side -->
            <div class="right-side">
                <div class="column3">
                <a href="/"><img src="<?php echo get_template_directory_uri().'/assets/images/footer-logo.png'; ?>" alt=""></a>
                </div>
                <div class="column4">
                    <h6>Stay in the loop</h6>
                    <p>Join my email list to receive information on upcoming events.</p>
                    <?php gravity_form( 8, false, false, false, '', false ); ?>
                </div>
            </div>   <!-- right side -->
        </div><!-- .main-footer-area -->
        <a href="https://www.debsheppard.com/policies/">Privacy Policy</a> &#183; <a href="#">Terms & Conditions</a>
	</footer><!-- footer -->
</div><!-- #page -->

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up"></i></button>
<?php endif;

wp_footer(); ?>


</body>
</html>
