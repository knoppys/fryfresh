<?php
/*
Template Name: Why Fry Fresh
*/
//get the header
get_header(); 
//start the page loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
echo get_template_part('templateparts/content-headerimage');
?>


<section class="about content">
	<div class="container">
		<div class="row">
			<article>
				<div class="col-md-7">
					<?php the_content(); ?>
				</div>			
				<div class="col-md-5 team-content-image">	
					<img src="<?php the_field('image'); ?>">
				</div>
			</article>
		</div>
	</div>
</section>

<section class="quality">
	<div class="container">
		<div class="row title-text">
			<div class="col-md-12">
				<h1>Fry Fresh is Committed to the Essential Process of a Greener Future</h1>
				<p>Our skilled staff are the heart of fry fresh. Together we are dedicated in seeing the value of waste and converting it into productive solutions for your business and the environment</p>
			</div>
		</div>
		<div class="row quality">
			<div class="col-sm-6">
				<img src="<?php echo get_template_directory_uri(); ?>/images/quality-logos.png">
			</div>
			<div class="col-sm-6">			
				<strong><p>Whilst we meet the individual needs of our clients, we realise that we as a company have a duty of care to the industry itself. </p></strong>
				<p>With this in mind we set standards that are above and beyond that of not only other suppliers on the market, but the governing bodies and regulatory authorities. In order to meet these standards we take on the entire process of supply, collection and waste management of our products.</p>
				<a class="btn-primary" href="<?php echo get_site_url(); ?>/achievements/">Qualtiy Management</a>
			</div>
		</div>
	</div>
</section>

<section class="the-team content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 style="text-align: center;padding-bottom: 30px;">Superior Management</h1>
			</div>
		</div>
		<div class="row">
			<?php
			$teams = get_field('team');			
			$i = 0;
			foreach ($teams as $team){ ?>
				<div class="col-sm-3 profile">
					<img src="<?php echo $team['photo']; ?>">
					<h3><?php echo $team['name']; ?><br><?php echo $team['job_title']; ?></h3>
					<a class="btn btn-primary">Read More</a>
					<div class="bio-cont">
						<div class="bio">
							<p><?php echo $team['bio'];?></p>
						</div>
					</div>
				</div>
				<?php } ?>
		</div>
		<div class="row"> 
			<p class="title-text">Thanks to our united and passion driven team, we can make sure that all our processes, services and products are delivered to the highest of standards with care for the industry and the client in mind. </p>
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
