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
    $tituloArticulo = "";
    $imagenArticulo = "";
    $descripcionArticulo = "";
    $botonArticulo = "";
    $collaDescripcion = "";
    $collaPdf = "";
	?>

	<div class="backSiniEmpresa" style="background-image: url('<?php echo $imgDestacada; ?>');background-size: cover;">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-6">
	      <h1 class="text-left"><?php the_title(); ?></h1>
	      <p><?php the_content(); ?></p>
	    </div>
	    </div>
	  </div>
	 </div>
   <div class="row separador separadortop"></div>
<?php endwhile; ?>
<div class="container-fluid backgris">
  <div class="container hidden-xs hidden-sm">
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
            <div class="row backgris">
      <?php } ?>


              <div class="col-md-6 text-center">
                <h1><?php echo the_sub_field('titulo-articulo'); ?></h1>
                  <img src="<?php echo the_sub_field('imagen-articulo'); ?>">
                  <p><?php echo the_sub_field('descripcion-articulo'); ?></p>
                <div class="panel-heading rowMargin" role="tab" id="heading<?php echo $i?>">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i?>" aria-expanded="true" aria-controls="collapse<?php echo $i?>">
                      <button class="boton-azul">Leer más</button>
                    </a>
                  </h4>
                </div>
              </div>

      <?php if (($i%2) ==0){ ?>  
            </div> 

            <div id="collapse<?php echo $i?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $i?>">
              <div class="panel-body">
                   <h1 class="text-center"><?php echo the_sub_field('titulo-articulo'); ?></h1>
                   <?php echo the_sub_field('colla-descripcion'); ?>
                <div class="col-md-12 rowMargin text-center">
                  <a target="_BLANK" href="<?php echo the_sub_field('colla-pdf') ?>"><button class="boton-verde"><img class="icon" src="http://ec2-52-213-166-151.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/02/icn_pdf.png">Descargar PDF</button></a>
                </div>
              </div>
            </div>
            <div id="collapse<?php echo $i-1;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $i-1;?>">
              <div class="panel-body">
              <?php ?>
                <h1 class="text-center"><?php echo $tituloArticulo; ?></h1>
                <?php echo $collaDescripcion; ?>
                <div class="col-md-12 rowMargin text-center">
                  <a target="_BLANK" href="<?php echo $collaPdf; ?>"><button class="boton-verde"><img class="icon" src="http://ec2-52-213-166-151.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/02/icn_pdf.png">Descargar PDF</button></a>
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



      <div class="container visible-xs visible-sm">
      <div class="row mp">
        <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
          <?php
        if( have_rows('articulos') ):
        $i = 1;
        while ( have_rows('articulos') ) : the_row();
          
            
      ?>
          <div class="panel panel-default">
            <div class="row backgris">
             <div class="col-xs-12 col-sm-12 text-center">
                <h1><?php echo the_sub_field('titulo-articulo'); ?></h1>
                  <img src="<?php echo the_sub_field('imagen-articulo'); ?>">
                  <p><?php echo the_sub_field('descripcion-articulo'); ?></p>
                <div class="panel-heading rowMargin" role="tab" id="heading<?php echo "a$i"?>">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo "a$i"?>" aria-expanded="true" aria-controls="collapse<?php echo "a$i"?>">
                      <button class="boton-azul">Leer más</button>
                    </a>
                  </h4>
                </div>
              </div>  
            </div> 

            <div id="collapse<?php echo "a$i"?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo "a$i"?>">
              <div class="panel-body">
                   <h1><?php echo the_sub_field('titulo-articulo'); ?></h1>
                   <?php echo the_sub_field('colla-descripcion'); ?>
                <div class="col-md-12 rowMargin text-center">
                  <a target="_BLANK" href="<?php echo the_sub_field('colla-pdf') ?>"><button class="boton-verde"><img class="icon" src="http://ec2-52-213-166-151.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/02/icn_pdf.png">Descargar PDF</button></a>
                </div>
              </div>
            </div>
            </div>
           <?php
           $i++;
        endwhile;
      endif;
      ?>
      </div>
        
        </div>
        </div>
</div>

<?php get_footer(); ?>