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
	$h1_titulo = get_field('h1_titulo');
	$h2_titulo = get_field('h2_titulo');
	$seccion1_btn = get_field('seccion1_btn');
	$seccion1_texto = get_field('seccion1_texto');
	$seccion1_contenido = get_field('seccion1_contenido');
	$seccion1_link = get_field('seccion1_link');
	$seccion2_btn = get_field('seccion2_btn');
	$seccion2_texto = get_field('seccion2_texto');
	$seccion2_contenido = get_field('seccion2_contenido');
	$seccion2_link = get_field('seccion2_link');
	$textoExtra = get_field('texto-adicional');

?>
<div class="backmision">
<div class="container">
<div class="row">
<div class="col-md-6">
<h1 class="tituloPaginas text-left"><?php echo $h1_titulo; ?></h1>
<h3 class="text-left subtituliPaginas"><?php echo $h2_titulo; ?></h3>
<p><?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		the_content();
		endwhile;
		?>
	</p>
</div></div></div></div>
<div class="row separador separadortop"></div>
<div class="container">
<div class="row">
<div class="col-md-6">
<h1><a href="<?php echo $seccion1_link; ?>"><button class="boton-verde"><?php echo $seccion1_btn; ?></button></a></h1>
<?php echo $seccion1_contenido; ?>
<p class="text-center"><a href="<?php echo $seccion2_pdf; ?>" class="snstr"><img src="http://ec2-52-213-166-151.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/02/imgres.png"></a></p>
<p></p></div>
<div class="col-md-6">
<h1> <a href="<?php echo $seccion2_link; ?>"><button class="boton-verde"><?php echo $seccion2_btn; ?></button></a></h1>
<?php echo $seccion2_contenido; ?>
<p class="text-center"><a href="<?php echo $seccion2_pdf; ?>" class="snstr"><img src="http://ec2-52-213-166-151.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/02/imgres.png"></a></p>
</div>
</div>
<div class="row">
<div class="col-md-12">
	<?php echo $textoExtra; ?>
</div>
</div>
</div>		
<?php get_footer(); ?>