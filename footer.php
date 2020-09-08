<footer>
			<nav class="nav-footer">
				<?php
					$args = array (
						'menu' => 'principal',
						'container' => false
					);
					wp_nav_menu( $args );
				?>
			</nav>

			<p><?php bloginfo('name') ?> © <?php echo date('Y'); ?>. Alguns direitos reservados.</p>
      <!--Footer Wordpress -->
      <?php wp_footer(); ?>
      <!--Footer Wordpress -->
		</footer>

	</body>
</html>