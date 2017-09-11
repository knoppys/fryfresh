<?php
/*
Template Name: The Process
*/
//get the header
get_header(); 
//start the page loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
echo get_template_part('templateparts/content-headerimage');
?>

<article>
	<section class="process process-delivery content">
		<div class="container">
			<div class="row">				
				<div class="col-md-12">
					<div class="recy-cont">
						<div class="recy-img">
							<img src="<?php the_field('delivery_image'); ?>">
						</div>
						<div class="recy-text">
								<?php the_field('delivery_text'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="process process-collection content">
		<div class="container">
			<div class="row">			
				<div class="col-md-12">
					<div class="recy-cont">
						<div class="recy-img">
							<img src="<?php the_field('collection_image'); ?>">
						</div>
						<div class="recy-text">
							<?php the_field('collection_text'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="process process-management content">
		<div class="container">
			<div class="row">				
				<div class="col-md-12">
					<div class="recy-cont">
						<div class="recy-img">
							<img src="<?php the_field('waste_management_image'); ?>">
						</div>
						<div class="recy-text white-text">
							<?php the_field('waste_management_text'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</article>


<?php endwhile; else : 
//if there isnt any content, show this.	
echo '<p> Sorry, no posts matched your criteria. </p>';
//end the loop
endif;
//get the footer
get_footer('inner');
