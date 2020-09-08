<?php 
	// Template Name: Menu da Semana
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
		<section class="container">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<?php if(have_rows('categoria-menu')): while(have_rows('categoria-menu')) : the_row(); ?>
				<div class="menu-prato grid-8">
					<h2><?php the_sub_field('nome-categoria') ?></h2>
					<ul>
						<?php if(have_rows('prato-menu')): while(have_rows('prato-menu')): the_row(); ?>
						
							<li>
								<span><sup>R$</sup><?php the_sub_field('preco-prato'); ?></span>
								<div>
									<h3><?php the_sub_field('nome-prato'); ?></h3>
									<p><?php the_sub_field('descricao-prato'); ?></p>
								</div>
							</li>

						<?php endwhile; else:endif; ?>

					</ul>
				</div>
			<?php endwhile; else: endif; ?>

		</section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>
		