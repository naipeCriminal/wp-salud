<?php
/*
Template Name: filtro seguro
*/
?>
<?php
get_header(); ?>
		<div class="backgris">
			<div class="container">		
				<div class="row">		
					<div class="col-md-12 filtro">
						<h2><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><?php the_title(); ?><span> ¡Cónoce los beneficios, uno a uno!</span></h2>		
					</div>		
				</div>		
			</div>
		</div>
		<div class="row separador separadortop" style="margin-bottom:0px;"></div>
		<?php the_sub_field('imagen_info'); ?>
		<?php
			$i=1;
			if( have_rows('banners') ):
				while ( have_rows('banners') ) : the_row(); 
		?>
					
					<div class="slider-filtro" style="background:url('<?php the_sub_field('imagen'); ?>');background-position:center top;background-size:cover;">
						<div class="container">
							<div class="row">
								<div class="<?php if (($i%2)==0) { echo "col-md-offset-6 "; }?>col-md-6">
									<div class="descripcionFiltro">
										<h1><?php the_sub_field('titulo'); ?></h1>
										<h2>Beneficios</h2>
										<!-- <p><?php #the_sub_field('subtitulo'); ?></p> -->
										<?php the_sub_field('beneficios'); ?>
										<a href="<?php the_sub_field('link'); ?>"><button class="boton-verde">Conóce Beneficios</button></a>									
									</div>									
								</div>
							</div>							
						</div>
					</div>
					<?php 
					$i++;
				endwhile;
		endif;
		?>

<?php get_footer(); ?>