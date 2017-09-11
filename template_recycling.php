<?php
/*
Template Name: Recycling
*/
//get the header
get_header(); 
//start the page loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
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

<article>

	<section class="blue content table-row">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="recy-cont">
						<div class="recy-img">
							<img src="<?php the_field('oil_recycling_image'); ?>">
						</div>
						<div class="recy-text">
							<?php the_field('oile_recycling_content'); ?>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>

	<section class="content table-row">
		<div class="container">			
			<div class="row">
				<div class="col-md-12">
					<div class="recy-cont">
						<div class="recy-img">
							<img src="<?php the_field('plastic_recycling_image'); ?>">
						</div>
						<div class="recy-text">
							<?php the_field('plastic_recycling_content'); ?>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>

	<section class="blue content table-row">
		<div class="container">			
			<div class="row">
				<div class="col-md-12">
					<div class="recy-cont">
						<div class="recy-img">
							<img src="<?php the_field('wood_recycling_image'); ?>">
						</div>
						<div class="recy-text">
							<?php the_field('wood_recycling_content'); ?>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>

	<section class="content table-row">
		<div class="container">			
			<div class="row">
				<div class="col-md-12">
					<div class="recy-cont">
						<div class="recy-img">
							<img src="<?php the_field('cardboard_recycling_image'); ?>">
						</div>
						<div class="recy-text">
							<?php the_field('cardboard_recycling_content'); ?>
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



?>
