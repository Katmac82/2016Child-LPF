<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->
<!--CUT LINE 14 TO 53 TWENTY16 -->
		<footer id="colophon" class="site-footer" role="contentinfo">
	<section class="contactinfo">
		<p>15 N. Main St., Unit C-14, Bellingham MA 02019 <br/> &copy<?php echo date("Y"); ?>  LOVE Pole Fitness</p>
	</section>
	<section class="socialmedia">
		<a href="https://www.facebook.com/lovepolefitness" target="_blank">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook_icon.png" alt="facebook" class="facebook"></a>
		<a href="https://www.youtube.com/channel/UC5aUh-Dn_Nb3NvMM6JiMUhA" target="_blank">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube_icon.png" alt="youtube" class="youtube"></a>
		<a href="mailto:lovepolefitness@hotmail.com" target="_blank">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/email.png" alt="email" class="email"></a>
		<a href="http://www.twitter.com/@lovepolefit" target="blank">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png" alt="twitter" class="twitter"></a>
	</section>		
</footer>	
</div><!-- #page -->

		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
