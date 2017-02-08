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
<div class="backSiniEmpresa" style="background:url('<?php echo $imgDestacada; ?>'); background-size: cover;">
  <div class="container">
    <div class="row">
    <div class="col-md-12">
      <p class="mpan"><span class="primertexto">Seguro para personas</span>  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <?php the_title(); ?></p>
    </div>      
      <div class="col-md-6 text-left">
        <h1 class="h1izq"><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <h2 class="h1izq">Beneficios:</h2>
        <?php if( get_field('beneficios') ): the_field('beneficios'); endif; ?>
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
    <div class="col-md-12 table-responsive">
      <?php the_field('planes_y_coberturas'); ?>
    </div>      
  </div>
<?php } ?>  
<div class="requeriments">
  <h1 class="tituloPaginas">Requerimientos y modalidades para contratar:</h1>
<?php if(get_field('Requerimientos descripcion')){?>
<p class="text-center"><?php the_field('Requerimientos descripcion'); ?></p>
<?php  }?>
<?php if(get_field('edad_contratacion')){?>
<h3 class="text-center" style="font-size: 14px;color:#0f6bda;"><?php the_field('edad_contratacion'); ?></h3>
<?php  }?> 
<?php if(get_field('edad_descripcion')){?>
<p class="text-center"><?php the_field('edad_descripcion'); ?></p>
<?php  }?> 
  
</div>
<div class="col-md-6 col-md-offset-3 col-xs-12">
  <table class="tablaContacto table-responsive">
<thead></thead>
<tbody>
<?php if(get_field('telefono-zona-metropolitana') or get_field('telefono-interior-republica')){ ?>
<tr>
<td><span class="glyphicon glyphicon-earphone" aria-hidden="true" data-original-title="" title=""></span></td>
<td><?php if(get_field('telefono-zona-metropolitana')) {?>  D.F. y zona metropolitana: <br><span style="font-weight:600;font-size: 16px;"> <?php the_field('telefono-zona-metropolitana'); ?>  </span> <?php } ?><br> <?php if(get_field('telefono-interior-republica')){?>Desde el interior de la república:<br> <span style="font-weight:600;font-size: 16px;"><?php the_field('telefono-interior-republica'); ?> </span><?php } ?></td>
</tr>
<?php } ?>
<?php if(get_field('desde_celular')){?>
<tr>
<td><span class="glyphicon glyphicon-phone" aria-hidden="true" data-original-title="" title=""></span></td>
<td>Desde celular:<br><span style="font-weight:600;font-size: 16px;"><?php the_field('desde_celular'); ?></span> </td>
</tr>
<?php } ?>
<?php if(get_field('correo')){?>
<tr>
<td><span class="glyphicon glyphicon-envelope" aria-hidden="true" data-original-title="" title=""></span></td>
<td>Por correo electrónico: <br> <span class="resaltar-correo"><?php the_field('correo'); ?> </span> </td>
</tr>
<?php  }?> 
<?php if(get_field('contacto-para-cotizacion')){?>
<tr>
<td><span class="glyphicon glyphicon-envelope" aria-hidden="true" data-original-title="" title=""></span></td>
<td>Contacto para cotizaciones.<br />
Karla Suarez Bustamante<br> <span class="resaltar-correo"><?php the_field('contacto-para-cotizacion'); ?> </span> </td>
</tr>
<?php  }?> 
</tbody>
</table>  
</div>
</div>
</div>
</div>

<?php endwhile ?>

<?php get_footer(); ?>