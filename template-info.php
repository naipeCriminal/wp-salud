<?php
/*
Template Name: template infografia
*/
?>
<?php
get_header(); ?>
<?php 
	$subtituloInfo = get_field('h2_subtitulo');
?>
       <div class="container">
		  <div class="row">
		    <div class="col-md-12">
		      <h2><?php echo $subtituloInfo; ?></h2>
		      <?php
				// Start the loop.
				while ( have_posts() ) : the_post();
				the_content();
				endwhile;
				?>
		    </div>
		  </div>
		</div>

		<div class="container">
			<div class="row">
			    <div class="list-group gallery" style="width: 100%;">
			    	<?php $i = 1; $j = 1; ?>
			        <div class="col-md-12 topSinPer">
			        <?php
						if( have_rows('imagenes') ):
							while ( have_rows('imagenes') ) : the_row(); 
							?>

			        	<div class="col-xs-12 col-md-4 text-left">
			        		<p style="height:230px; text-align: justify;line-height: 30px;"><span class="circle"><?php echo $i; ?></span> <?php  the_sub_field('descripcion_img'); ?></p>
			        		
				        	<a title="<?php  the_sub_field('descripcion_img'); ?>" class="fancybox" rel="ligthbox" href="<?php the_sub_field('imagen_info'); ?>"><img class="img-responsive" style="margin: 0 auto;" src="<?php the_sub_field('imagen_info'); ?>" alt=""></a>
				            <div class="col-md-12 text-justify">
				            	<p class="pSinPer"></p>
				            </div>
				        </div>
						<?php if ($j == 3) {
							echo '<div class="col-md-12"><hr class="lineaGlosa"></div>';
						$j = 0;
						} ?>
			        <?php
			        $i++;
			        $j++;
		    		endwhile;
					endif;
					?>
					</div>
			    </div>
			</div>
			<div class="row">
				<div class="col-md-12" style="width: 100%;margin-bottom: 20px;">
					<?php
						if( have_rows('pdf') ):
							while ( have_rows('pdf') ) : the_row(); 
							?>
					<div class="col-md-4 col-xs-12">
						<a style="border: 1px solid #094FA4;" class="btn btn-default" target="_BLANK" href="<?php  the_sub_field('filepdf'); ?>" role="button"><?php  the_sub_field('nombre'); ?></a>
					</div>
					<?php
		    		endwhile;
					endif;
					?>
				</div>
			</div>
		</div>
<?php get_footer(); ?>