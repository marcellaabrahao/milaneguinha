<?php
/**
 * Template Name: Oficinas 
  *
 * Used for both single and index/archive/author/catagory/search/tag.
 *
 * @package Odin
 * @since 2.2.0
 */
	get_header();
?>

<section class="conteudo-interno">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1><?php the_title(); ?></h1>
			</div>

			<div class="col-md-10 col-md-offset-1">
				<?php if(get_field('oficinas')): ?>

					<ul class="lt-oficinas">

					<?php while(has_sub_field('oficinas')): ?>

						<li>

						
						<div class="ct-lt-oficinas">
							<a href="<?php the_sub_field('link_da_oficina'); ?>">
								<img class="img-responsive" src="<?php the_sub_field('imagem_destaque_oficina'); ?>">
								<div class="legenda">
									<h2><?php the_sub_field('titulo_da_oficina'); ?></h2>
									<p><?php the_sub_field('descricao_da_oficina'); ?></p>
								</div>
							</a>
						</div>
							
						</li>

					<?php endwhile; ?>

					</ul>

				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>


