<?php
/**
 * Template Name: Oficinas - interna
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
			<!-- <div class="col-md-10 col-md-offset-1">
				<h1><?php the_title(); ?></h1>
			</div> -->

			<div class="col-md-12">
				
			<div class="container">
				<div class="row">
					<div class="col-md-6">Galeria</div>		
					<div class="col-md-6">
						<h2><?php the_title(); ?></h2>
						<div class="box-conteudo"><?php the_field( 'descricao_das_oficinas' ); ?></div>
					</div>		
				</div>
			</div>
					
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>


