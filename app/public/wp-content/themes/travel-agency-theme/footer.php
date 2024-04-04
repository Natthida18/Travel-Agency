<footer class="footer-section">
	<div class="footer">
		<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
			<ul class="footer-menu">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</ul>
		<?php } ?>
		<?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
			<ul class="footer-menu">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</ul>
		<?php } ?>
		<?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
			<ul class="footer-menu">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</ul>
		<?php } ?>
		<?php if ( is_active_sidebar( 'footer-4' ) ) { ?>
			<ul class="footer-menu">
				<?php dynamic_sidebar( 'footer-4' ); ?>
			</ul>
		<?php } ?>
		<?php if ( is_active_sidebar( 'footer-5' ) ) { ?>
			<ul class="footer-menu">
				<?php dynamic_sidebar( 'footer-5' ); ?>
			</ul>
		<?php } ?>
	</div>
	<p class="copy-right center">
		All rights reserved@jadoo.co
	</p>
</footer>

<?php wp_footer(); ?>
</body>

</html>
