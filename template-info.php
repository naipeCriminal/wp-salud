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
		    	<?php 
					while ( have_posts() ) : the_post();
		    	 ?>

		    	<h1 class="text-left"><?php the_title(); ?></h1>
		      <h2 class="text-left"><?php echo $subtituloInfo; ?></h2>
		      <?php
				// Start the loop.

				endwhile;
				?>
		    </div>
		  </div>
		</div>

<div class="backgris infografia">
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
			        		<span class="circle"><?php echo $i; ?></span>
				        	<img class="img-responsive" style="margin: 25px auto;" src="<?php the_sub_field('imagen_info'); ?>" alt="">
				            <div class="col-md-12 text-justify">
				            	<p class="infop"> <?php  the_sub_field('descripcion_img'); ?></p>
				            	<p class="pSinPer"></p>
				            </div>
				        </div>
						<?php if ($j == 3) {
							echo '<div class="col-md-12" style="padding-bottom: 20px;"><hr class="lineaGlosa"></div>';
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
					<div class="col-md-4 col-xs-12 text-center">
						<a target="_BLANK" style="border: 1px solid #094FA4;" class="btn btn-default" href="<?php  the_sub_field('filepdf'); ?>"><img class="icon" src="http://ec2-52-213-166-151.eu-west-1.compute.amazonaws.com/wp-content/uploads/2017/02/icn_pdf_blue.png"><?php  the_sub_field('nombre'); ?></a>
					</div>
					<?php
		    		endwhile;
					endif;
					?>
				</div>
			</div>
		</div>	
</div>
<?php get_footer(); ?>