<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<?php 
	$subtituloInfo = get_field('h2_subtitulo');
?>
       <div class="container">
		  <div class="row">
		    <div class="col-md-12">
		      <h2><?php echo $subtituloInfo; ?></h2>
		      <?php
				// Start the loop.
				while ( have_posts() ) : the_post();
				the_content();
				endwhile;
				?>
		    </div>
		  </div>
		</div>

		<div class="container">
			<div class="row">
		    <div class="list-group gallery" style="width: 100%;">
		        <div class="col-md-12 topSinPer">
		        <?php
					if( have_rows('imagenes') ):
						while ( have_rows('imagenes') ) : the_row(); 
						?>
		        	<div class="col-xs-12 col-md-6 text-center">
			        	<a title="<?php  the_sub_field('descripcion_img'); ?>" class="fancybox" rel="ligthbox" href="<?php the_sub_field('imagen_info'); ?>"><img class="img-responsive" src="<?php the_sub_field('imagen_info'); ?>" alt=""></a>
			            <div class="col-md-12 text-justify">
			            	<p class="pSinPer"><?php  the_sub_field('descripcion_img'); ?></p>
			            </div>
			        </div>
		        <?php
	    		endwhile;
				endif;
				?>
				</div>
		    </div>
		</div>

		</div>
<?php get_footer(); ?>