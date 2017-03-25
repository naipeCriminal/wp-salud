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
	$tituloInd = get_field('titulo-ind');
	$textoInd = get_field('texto-ind');
	$imgCirculos = get_field('img-circulos');
	$preguntasfrecuentes = get_field('preguntas_frecuentes');
	$i = 0;
?>
        
<?php if( have_rows('slider-ind') ): ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox" style="margin-bottom: -20px;">

    <?php while( have_rows('slider-ind') ): the_row(); ?>
        <div class="item <?php if ($i == 0){echo 'active';} ?>">
          <a href="<?php the_sub_field('link'); ?>"><img src="<?php the_sub_field('imagen'); ?>"></a>
        </div>
        <?php $i++; ?>
    <?php endwhile; ?>
      </div>

      <ol class="carousel-indicators">
      	<?php for ($j=0; $j <$i ; $j++) { ?>
    		<li data-target="#myCarousel" data-slide-to="<?php echo $j; ?>" class="<?php if($j==0){echo 'active';} ?>"></li>
		<?php } ?>
      </ol> 
 
<?php endif; ?>


	</div>

	<div class="backgris col-md-12 col-xs-12 text-center" style="background-color: #f2f2f2;background:url('https://www.segurodeautobancomer.com/wp-content/uploads/2016/10/img_bar_index_.png');background-repeat: no-repeat;background-position: center;margin-top:10px;">
		<div class="row">
		  
		    <h1 class="titlebottomslider">Seguro Salud Bancomer</h1>
		  
		</div>

		
	</div>	

<div class="backgris">
	<div class="container">
		<div class="row imageIndex">
	  		<div class="col-md-6">
	    		<div class="col-md-12">
	      			<img class="img-responsive" src="<?php echo $imgCirculos; ?>">
	    		</div>
	  		</div>
		  	<div class="col-md-6 indexPmedico">
			    <div class="col-md-12 text-left">
					<h1 class="tituloPaginas text-left"><?php echo $tituloInd; ?></h1>
			     	<p><?php echo $textoInd; ?></p>
			    </div>
		  	</div>
		</div>
  	</div>
</div>
<div class="backgris">
	<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<h1 class="tituloPaginas">Nuestros Productos</h1>
		</div>
	</div>
	<div class="row steps">
		
			<?php if( have_rows('nuestros_seguros') ): ?>
			<?php $i =1; ?>
			    <?php while( have_rows('nuestros_seguros') ): the_row(); ?>
			 		<div class="col-xs-12 col-md-4 text-center">
						<img class="iconcenter" src="<?php the_sub_field('img-seg-ind'); ?>"><p></p>
						<div class="sinBordeIndex">
							<div class="<?php if($i<=2){echo 'cont-rig';} ?> ">
								<h3><?php the_sub_field('titulo-seg-ind'); ?></h3>
								<p class="contenido"><?php the_sub_field('texto-seg-ind'); ?></p>
							</div>
							<a href="<?php the_sub_field('link-seg-ind'); ?>"><button class="boton-verde">Conóce más</button></a>
						</div>
					</div>
					<?php $i++; ?>
			    <?php endwhile; ?>
			<?php endif; ?>
		
	</div>
	<div class="row" style="padding: 25px;">


		<div class="col-md-12 text-center visible-xs">
			<a href="http://ec2-52-213-166-151.eu-west-1.compute.amazonaws.com/medicina-preventiva" ><button class="boton-azul">Medicina Preventiva: <br>Previene y Asesórate</button></a>
			</a>
		</div>
		<div class="col-md-12 text-center hidden-xs">
			<a href="http://ec2-52-213-166-151.eu-west-1.compute.amazonaws.com/medicina-preventiva" ><button class="boton-azul">Medicina Preventiva: Previene y Asesórate</button></a>
		</div>		
	</div>
	<div class="row">
		<hr>
	</div>
	<div class="row">
		  <div class="col-md-12">
    		<h1 class="tituloPaginas">Preguntas frecuentes</h1>
		</diV>
	</div>
</div>
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		the_content();
		endwhile;
		?>
</div>
<?php get_footer(); ?>