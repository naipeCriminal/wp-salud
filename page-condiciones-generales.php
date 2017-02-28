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
	
<div class="backgris">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php while ( have_posts() ) : the_post(); ?>

				<h1 class="tituloPaginas text-left"><?php the_title(); ?></h1>
				<ul>
					<?php if( have_rows('condiciones_generales') ): ?>
					<?php $i =1; ?>
					    <?php while( have_rows('condiciones_generales') ): the_row(); ?>
						    <li class="icon-pdf"><a target="_BLANK" href="<?php echo the_sub_field('pdf'); ?>"><?php echo the_sub_field('texto'); ?> </a></li>
						    <?php endwhile; ?>
					<?php endif; ?>				

					<?php
					// Start the loop.
					endwhile;
					?>
				</ul>				
			</div>
		</div>
	</div>	
</div>

		
<?php get_footer(); ?>