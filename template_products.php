<?php
/*
Template Name: Cooking Oils
*/
//get the header
get_header(); 
//start the page loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
$args = array('post_type'=>'products', 'order'=>'ASC'); 
$knoposts = get_posts( $args ); 
echo get_template_part('templateparts/content-headerimage');
?>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<section class="products-container content">
	<div class="container">	
		<div class="row">			
			<div class="col-md-12">
				<ul class="nav nav-tabs product-tabs" role="tablist">
					<?php $i = 1; 					
					foreach ( $knoposts as $knopost ) { ?>
						<li role="presentation" class="<?php echo 'product'.$knopost->ID; ?> <?php if($i == 1){echo 'active';} ?>"><a href="#<?php echo $knopost->ID; ?>" aria-controls="<?php echo $knopost->ID; ?>" role="tab" data-toggle="tab"><h2><?php echo $knopost->post_title;?></h2></a></li>							
					<?php $i++; } ?>
				</ul>	
			</div>			
		</div>
		<div class="row">			
			<div class="tab-content">
				<?php $i = 1; 
				foreach ( $knoposts as $knopost ) { ?>
					<div role="tabpanel" class="<?php echo 'product'.$knopost->ID; ?> tab-pane fade <?php if($i == 1){echo 'active in';} ?>" id="<?php echo $knopost->ID; ?>">
						<div class="col-md-8">
							<div class="panel-content">
								<?php echo $knopost->post_content; ?>	
								<a class="btn btn-primary" rel="next" href="<?php echo get_permalink($knopost->ID); ?>" alt="">Read More</a>						
							</div>
						</div>
						<div class="col-md-4 panel-img">
							<?php $url = get_the_post_thumbnail_url($knopost->ID, 'medium'); ?>
							<img src="<?php echo $url; ?>">
						</div>
					</div>							
				<?php $i++; } ?>
			</div>			
		</div>
		<div class="row products-cta">
			<div class="col-md-12">
				<div class="orange">
					<?php the_field('cta_text'); ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/lorry.png">
				</div>
			</div>			
		</div>
	</div>
</section>

<?php endwhile; else : 
//if there isnt any content, show this.	
echo '<p> Sorry, no posts matched your criteria. </p>';
//end the loop
endif;
//get the footer
get_footer('inner');



?>
