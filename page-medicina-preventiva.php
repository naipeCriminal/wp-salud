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
		// Start the loop.
		while ( have_posts() ) : the_post();

    // Ruta de la imagen destacada (tamaño completo)
    global $post;
    $thumbID = get_post_thumbnail_id( $post->ID );
    $imgDestacada = wp_get_attachment_url( $thumbID );
    $tituloArticulo1 = "";
    $tituloArticulo = "";
    $imagenArticulo1 = "";
    $imagenArticulo = "";
    $descripcionArticulo1 = "";
    $descripcionArticulo = "";
    $botonArticulo1 = "";
    $botonArticulo = "";
    $collaDescripcion1 = "";
    $collaDescripcion = "";
    $collaPdf1 = "";
    $collaPdf = "";
	?>

	<div class="backSiniEmpresa" style="background-image: url('<?php echo $imgDestacada; ?>');background-size: cover;">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-8">
	      <h1><?php the_title(); ?></h1>
	      <p><?php the_content(); ?></p>
	    </div>
	    </div>
	  </div>
	 </div>
   <div class="row separador separadortop"></div>
<?php endwhile; ?>
<div class="container">
      <div class="row mp">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        	<?php
				if( have_rows('articulos') ):
				$i = 1;
				while ( have_rows('articulos') ) : the_row();
          if (($i%2) !=0){
            $tituloArticulo = get_sub_field('titulo-articulo');
            $imagenArticulo = get_sub_field('imagen-articulo');
            $descripcionArticulo = get_sub_field('descripcion-articulo');
            $botonArticulo = get_sub_field('boton-articulo');
            $collaDescripcion = get_sub_field('colla-descripcion');
            $collaPdf = get_sub_field('colla-pdf');            
          }
            
			?>
      <?php if (($i%2) !=0){ ?>
          <div class="panel panel-default">
            <div class="row">
      <?php } ?>


              <div class="col-md-6 text-center">
                <h1><?php echo the_sub_field('titulo-articulo'); ?></h1>
                  <img src="<?php echo the_sub_field('imagen-articulo'); ?>">
                  <p><?php echo the_sub_field('descripcion-articulo'); ?></p>
                <div class="panel-heading" role="tab" id="heading<?php echo $i?>">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i?>" aria-expanded="true" aria-controls="collapse<?php echo $i?>">
                      <button class="boton-azul"><?php echo the_sub_field('boton-articulo'); ?></button>
                    </a>
                  </h4>
                </div>
              </div>

      <?php if (($i%2) ==0){ ?>  
            </div> 

            <div id="collapse<?php echo $i?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $i?>">
              <div class="panel-body">
                   <h1><?php echo the_sub_field('titulo-articulo'); ?></h1>
                   <?php echo the_sub_field('colla-descripcion'); ?>
                <div class="col-md-12 text-center">
                  <a target="_BLANK" href="<?php echo the_sub_field('colla-pdf') ?>"><button class="boton-verde"><img class="icon" src="#">Descargar PDF para más información</button></a>
                </div>
              </div>
            </div>
            <div id="collapse<?php echo $i-1;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $i-1;?>">
              <div class="panel-body">
              <?php ?>
                <h1><?php echo $tituloArticulo; ?></h1>
                <?php echo $collaDescripcion; ?>
                <div class="col-md-12 text-center">
                  <a target="_BLANK" href="<?php echo $collaPdf; ?>"><button class="boton-verde"><img class="icon" src="#">Descargar PDF para más información</button></a>
                </div>
              </div>
            </div>

            </div>


      <?php } ?>
          
           <?php
           $i++;
		    endwhile;
			endif;
			?>
      </div>
        
        </div>
        </div>

    

<?php get_footer(); ?>