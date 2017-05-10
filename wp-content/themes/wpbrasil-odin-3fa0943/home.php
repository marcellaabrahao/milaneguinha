<?php
/**
 * Template Name: Home MN
 *
 * The template for displaying pages with sidebar.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<!-- <main id="content" class="" tabindex="-1" role="main"> -->

	<!-- <p>conteúdo da home de mila neguinha</p> -->

	<section class="home-saboaria">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><?php the_field( 'titulo_da_area_saboaria' ); ?></h2>
					<h3><?php the_field( 'subtitulo_da_area_saboaria' ); ?></h3>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<?php if(get_field('produtos_destaque_saboaria')): ?>





						<ul>

						<?php while(has_sub_field('produtos_destaque_saboaria')): ?>

							<li class="col-md-4">

								<a href="<?php the_sub_field( 'link_do_produto_saboaria' ); ?>"></a><img class="img-responsive" src="<?php the_sub_field( 'imagem_produto_saboaria' ); ?>"></a>
								<h4><a href="<?php the_sub_field( 'link_do_produto_saboaria' ); ?>"><?php the_sub_field( 'titulo_porduto_saboaria' ); ?></a></h4>
								<p><a href="<?php the_sub_field( 'link_do_produto_saboaria' ); ?>"><?php the_sub_field( 'subtitulo_produto_saboaria' ); ?></a></p>


							</li>

							

						<?php endwhile; ?>

						</ul>

















					<?php endif; ?>
				</div>

				<div class="col-md-12">
					<p class="vermais"><a href="">ver mais</a></p>
				</div>
			</div>
		</div>
	</section>

	<section class="linha_banner-1">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1 col-md-6">
					<a href="<?php the_field( 'link_do_banner_da_home_l1_1' ); ?>">
						<img  class="img-responsive"  src="<?php the_field('banner_grande_l1_1'); ?>" alt="" />
					</a>
					
				</div>
				<div class="col-md-4 banner-pq-l1">
					<a href="<?php the_field( 'link_do_banner_da_home_l1_2' ); ?>">
						<img  class="img-responsive"  src="<?php the_field('banner_pequeno_l1_2'); ?>" alt="" />
					</a>
				</div>

				<div class="col-md-4 banner-pq-l1 ">
					<a href="<?php the_field( 'link_do_banner_da_home_l1_3' ); ?>">
						<img  class="img-responsive"  src="<?php the_field('banner_pequeno_l1_3'); ?>" alt="" />
					</a>
				</div>
			</div>
		</div>
	</section>


	<section class="home-estamparia">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><?php the_field( 'titulo_area_2' ); ?></h2>
					<h3><?php the_field( 'subtitulo_area_2' ); ?></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<a href="<?php the_field( 'link_produto_estamparia_1' ); ?>"></a><img class="img-responsive" src="<?php the_field( 'imagem_produto_estamparia_1' ); ?>"></a>
					<h4><a href="<?php the_field( 'link_produto_estamparia_1' ); ?>"><?php the_field( 'titulo_produto_estamparia_1' ); ?></a></h4>
					<p><a href="<?php the_field( 'link_produto_estamparia_1' ); ?>"><?php the_field( 'subtitulo_produto_estamparia_1' ); ?></a></p>
				</div>

				<div class="col-md-4">
					<a href="<?php the_field( 'link_produto_estamparia_2' ); ?>"></a><img class="img-responsive" src="<?php the_field( 'imagem_produto_estamparia_2' ); ?>"></a>
					<h4><a href="<?php the_field( 'link_produto_estamparia_2' ); ?>"><?php the_field( 'titulo_produto_estamparia_2' ); ?></a></h4>
					<p><a href="<?php the_field( 'link_produto_estamparia_2' ); ?>"><?php the_field( 'subtitulo_produto_estamparia_2' ); ?></a></p>
				</div>
				<div class="col-md-4">
					<a href="<?php the_field( 'link_produto_estamparia_3' ); ?>"></a><img class="img-responsive" src="<?php the_field( 'imagem_produto_estamparia_3' ); ?>"></a>
					<h4><a href="<?php the_field( 'link_produto_estamparia_3' ); ?>"><?php the_field( 'titulo_produto_estamparia_3' ); ?></a></h4>
					<p><a href="<?php the_field( 'link_produto_estamparia_3' ); ?>"><?php the_field( 'subtitulo_produto_estamparia_3' ); ?></a></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="vermais"><a href="">ver mais</a></p>
				</div>
			</div>
		</div>
	</section>


	<section class="linha-banner-2">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1 col-md-4">
					<a href="<?php the_field( 'link_do_banner_grande_l2_1' ); ?>">
						<img  class="img-responsive"  src="<?php the_field('banner_grande_l2_1'); ?>" alt="" />
					</a>						
				</div>
				<div class="col-md-3">
					<a href="<?php the_field( 'link_do_banner_medio_l2_2' ); ?>">
						<img  class="img-responsive"  src="<?php the_field('banner_medio_l2_2'); ?>" alt="" />
					</a>
				</div>
				<div class="col-md-3" >
					<a href="<?php the_field( 'link_do_banner_medio_l2_3' ); ?>">
						<img  class="img-responsive"  src="<?php the_field('banner_medio_l2_3'); ?>" alt="" />
					</a>
				</div>
			</div>
		</div>
	</section>		

	<!-- </main>#content -->

<?php

get_footer();








