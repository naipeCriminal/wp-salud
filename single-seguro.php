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
<?php if( get_field('descripcion_resumida_de_ayuda') ) { ?>
  <div class="row planesGMM">
    <div class="col-md-12">
      <div class="col-md-12">
        <h1 class="sumasAseguradas">Sumas Aseguradas</h1>
      </div> 
      <?php the_field('descripcion_resumida_de_ayuda'); ?>


    </div>
  </div>
  <?php } ?>

<?php if( get_field('planes_y_coberturas') ){ ?>
  <div class="col-md-12">
    <div class="col-md-12">
      <h1>Planes y Coberturas</h1>
    </div>
    <div class="col-md-12">
      <?php the_field('planes_y_coberturas'); ?>
    </div>      
  </div>
<?php } ?>  


<?php if( get_field('requerimientos_y_modalidades_para_contratar') ) { ?>
   <div class="col-md-6">
      <p>Requerimientos y modalidades para contratar:</p>
      <?php the_field('requerimientos_y_modalidades_para_contratar'); ?>
  </div>
<?php } ?>

<?php if( get_field('contacto_para_cotizaciones') ){ ?>
    <div class="col-md-6">
    	<p>Contacto para cotizaciones:</p>
      <?php the_field('contacto_para_cotizaciones'); ?>
    </div>
<?php } ?>

 </div>
</div>
<?php endwhile ?>

<?php get_footer(); ?>