<?php
//get the header
get_header(); 
//start the page loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="single content">
	<div class="container">
		<div class="row">
			<article>
				<div class="col-md-9">
					<?php echo get_template_part('templateparts/content-single'); ?>
				</div>
			</article>
			<aside>
				<div class="col-md-3">
					<?php dynamic_sidebar('sidebar-blog'); ?>
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
