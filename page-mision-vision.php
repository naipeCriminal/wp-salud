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
	$tituloMi = get_field('titulo_h1');
	$subtituloMi = get_field('h2-titulo');
	$mision = get_field('mision');
	$vision = get_field('vision');
?>

	
	<div class="backmision">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1 class="tituloPaginas text-left"><?php echo $tituloMi; ?></h1>
					<h3 class="text-left subtituliPaginas"><?php echo $subtituloMi; ?></h3>
					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();
					the_content();
					endwhile;
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="row separador separadortop"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="mision">
					<span class="glyphicon lc glyphicon-globe" aria-hidden="true"><span class="tituloMision">Misión</span></span><hr>
					<p><?php echo $mision; ?></p>
				</div>

				<div class="mision">
					<span class="glyphicon lc glyphicon-eye-open" aria-hidden="true"><span class="tituloMision">Visión</span></span><hr>
					<p><?php echo $vision; ?></p>
				</div>
			</div>
		</div>
	</div>


		
<?php get_footer(); ?>