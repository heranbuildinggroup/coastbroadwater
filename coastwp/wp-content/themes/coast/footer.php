<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coast
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

        <div class="container">
            <div class="footerlogos">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/footer_coast.png" class="footercoast" />
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/footer_heran.png" class="footerheran" />
            </div>
            <p class="location"><span>386 Marine Parade, Labrador QLD, 4215 Australia</span><span>Tel: 1800 683 952</span><span>Building in Queensland since 1952</span></p>
            <div class="footermenu">
                 <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            </div>
            <div class="copyright">
                <p>Every effort has been made to accurately describe the details of this development, however this website is presented as a guide only. All marketing material, including models, illustrations and plans are illustrative only.</p>
                <p>Visitors are advised to undertake their own investigations to satisfy themselves as to all aspects of the development. All details were correct at the time the website went live and are subject to change without notice.</p>
                <p>This website is representative as a guide only and does not constitute an offer or inducement. Visitors should refer to survey plans (proposed or final) in contract for clarification of your actual unit size.</p>
                <p>Copyright &copy;2015 Heran Building Group Pty Ltd</p>
            </div>
        </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
