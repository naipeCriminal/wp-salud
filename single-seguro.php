<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

    // Ruta de la imagen destacada (tamaño completo)
    global $post;
    $thumbID = get_post_thumbnail_id( $post->ID );
    $imgDestacada = wp_get_attachment_url( $thumbID );    
?>
<div class="container" style="background: #f2f2f2; width: 100%; padding-top: 20px; padding-bottom: 15px;">
 <div class="container">
  <div class="row gmmCabecera">
    <div class="col-md-12">
      <p><a href="#">Seguro para personas </a>> <?php the_title(); ?></p>
    </div>
    <div class="col-md-12">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
   <div class="col-md-12">
    <div class="col-md-4 col-xs-12">
      <h2>Beneficios:</h2>
<?php if( get_field('beneficios') ): the_field('beneficios'); endif; ?>

    </div>
    <div class="col-md-8 col-xs-12">
      <img src="<?php echo $imgDestacada; ?>" class="img-responsive">
    </div>
  </div>
 </div>
 </div>

</div>


<div class="container">
  <div class="row">
  <div class="col-md-12">
    <h1 class="sumasAseguradas">Sumas Aseguradas</h1>
  </div>
  <div class="row planesGMM">
    <div class="col-md-10 col-md-offset-1">
<?php if( get_field('descripcion_resumida_de_ayuda') ): the_field('descripcion_resumida_de_ayuda'); endif; ?>


  </div>
  </div>

  <div class="col-md-12">
    <div class="col-md-12">
      <h1>Planes y Coberturas</h1>
    </div>
    <div class="col-md-12">
<?php if( get_field('planes_y_coberturas') ): the_field('planes_y_coberturas'); endif; ?>

    </div>      
  </div>
   <div class="col-md-6">
      <p>Requerimientos y modalidades para contratar</p>
<?php if( get_field('requerimientos_y_modalidades_para_contratar') ): the_field('requerimientos_y_modalidades_para_contratar'); endif; ?>
    </div>
    <div class="col-md-6">
    	<p>Contacto para cotizaciones:</p>
<?php if( get_field('contacto_para_cotizaciones') ): the_field('contacto_para_cotizaciones'); endif; ?>

    </div> 
 </div>
</div>

<?php get_footer(); ?>
