<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>	
	
	</section>

	<div class="header-border"></div>
	
	<footer class="footer">
		<div class="column first">
			<p><span>WELLNESS HEALTH CAREERS</span><br>
				PMP 808<br>
				16420 S.E. McGillivray Blvd., <br>
				Suite 103<br>
				Vancouver, WA  98683<br>
				<a href="mailto:tonya@wellnesshealthcareers.com">tonya@wellnesshealthcareers.com</a></p>
		</div>
		<div class="column">
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'nav-menu' ) ); ?>
		</div>
		<div class="column last">
			<img src="<?php bloginfo( 'template_url' ); ?>/img/footer-tree.png"
		</div>
	</footer><!-- #colophon -->

	<div class="footer-border"></div>

</div><!-- #container -->

<?php wp_footer(); ?>
</body>
</html>