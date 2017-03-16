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
<?php     // Ruta de la imagen destacada (tamaño completo)
$titulo_central = get_field('titulo_central');
$descripcion_central = get_field('descripcion_central');
$contenido_central = get_field('contenido_central');
$seccion_link_infografia = get_field('seccion_link_infografia');
$seccion_link_pdf = get_field('seccion_link_pdf');

while ( have_posts() ) : the_post();
    global $post;
    $thumbID = get_post_thumbnail_id( $post->ID );
    $imgDestacada = wp_get_attachment_url( $thumbID );
?>
<div class="backSiniEmpresa" style="background:url('<?php echo $imgDestacada; ?>'); background-size: cover;">
  <div class="container">
    <div class="row">
    <div class="col-md-12">
      <p class="mpan"><span class="primertexto">Seguro para personas</span>  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <?php the_title(); ?></p>
    </div>      
      <div class="col-md-6 text-left">
        <h1 class="h1izq"><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
      </div>
    </div>
  </div>
</div>
<div class="row separador separadortop"></div>

  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-left"><?php echo $titulo_central; ?></h2>
    </div>
    <div class="col-md-12 sinGaSa">
      <p><?php echo $descripcion_central; ?></p>
        <?php echo $contenido_central; ?>
    </div>
    <div class="col-md-6 col-md-offset-3 sinGaSa">
      <div class="col-md-5">
        <a href="<?php echo $seccion_link_infografia; ?>"><button class="boton-azul">Ver infografía</button></a>
      </div>
      <?php if ($seccion_link_pdf != '') { ?>
        <div class="col-md-6">
          <a href="<?php echo $seccion_link_pdf; ?>"><button class="boton-verde"><img class="icon" src="http://ec2-52-213-166-151.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/02/icn_pdf.png"> Mayor Información</button></a>
        </div>
     <?php } ?>
    </div>
  </div>
</div>


<div class="backgris">
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h2>Formatos para recibir servicios básicos</h2>
    </div>
  </div>
  <div class="row secSinGa">
    <div class="col-md-12">
<?php

// check if the repeater field has rows of data
if( have_rows('formatos') ):
    $i=1;
  // loop through the rows of data
    while ( have_rows('formatos') ) : the_row();
 ?>

      <div class="col-md-4 alSinSalud">
        <div class="col-md-12 text-center">
          <img src="<?php the_sub_field('img_formato'); ?>">
        </div>
        <div class="col-md-12">
          <div class="col-md-12 text-center">
            <h2><?php the_sub_field('titulo_formato'); ?></h2>
          </div>
          <div class="col-md-12 text-justify <?php if ($i != 3): echo "bor"; ?>
          
        <?php endif ?>">
            <p><?php the_sub_field('contenido_formato'); ?></p>
          </div>
        </div>
      </div>

<?php 
  $i++;
    endwhile;

else :

    // no rows found

endif;

?>

    </div>
  </div>
</div> 
</div>
<?php endwhile ?>
<?php get_footer(); ?>