<?php
//get the header
get_header(); 
//start the page loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
if (has_post_thumbnail()){echo get_template_part('templateparts/content-headerimage');}else{}
?>

<section class="content default-template">
	<div class="container">
		<div class="row">
			<article>
				<div class="col-md-8">
					<?php echo get_template_part('templateparts/content'); ?>
					<div class="row products-cta">
						<div class="col-md-12">
							<div class="orange">
								<?php the_field('cta_text',27); ?>								
							</div>
						</div>			
					</div>
				</div>
			</article>
			<aside>
				<div class="col-md-4 sidebar">
					<?php dynamic_sidebar('sidebar-page'); ?>
				</div>
			</aside>
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
