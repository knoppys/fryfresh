<?php
/*
Template Name: Landing
*/
//get the header
get_header('landing'); 
//start the page loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
$thumbnail =  get_the_post_thumbnail_url(); ?>
<section class="banner landing-banner" style="background: url(<?php echo $thumbnail; ?>) no-repeat center center fixed; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<?php the_field('landing_banner'); ?>
			</div>
			<div class="col-md-5 landing-form">
				<span class="big-text">Contact Us</span>
				<?php echo do_shortcode('[contact-form-7 id="202" title="Main Contact"]'); ?>
			</div>
		</div>
	</div>
</section>

<section class="content default-template landing-template">
	<div class="container">
		<div class="row">
			<article>
				<div class="col-md-8">
					<?php echo get_template_part('templateparts/content'); ?>					
				</div>
			</article>
			<aside>
				<div class="col-md-4 sidebar">
					<h3>Why Fry Fresh for <?php echo the_title(); ?></h3>
					<p>Whilst we meet the individual needs of our clients, we realise that we as a company have a duty of care to the industry itself. With this in mind we set standards that are above and beyond that of not only other suppliers on the market, but the governing bodies and regulatory authorities. In order to meet these standards we take on the entire process of supply, collection and waste management of our products.</p>					
				</div>
			</aside>
		</div>
	</div>
</section>
<section class="iso content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Quality Assurance</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<p>The Renewable Energy Directive (RED)</p>
				<img src="http://www.fry-fresh.co.uk/wp-content/uploads/2017/04/iscc.png">
			</div>
			<div class="col-sm-4">
				<p>ISO 9001 Quality Management</p>
				<img src="http://www.fry-fresh.co.uk/wp-content/uploads/2017/04/iso.png">
			</div>
			<div class="col-sm-4">
				<p>Food Standards Agency – Food hygiene rating.</p>
				<img src="http://www.fry-fresh.co.uk/wp-content/uploads/2017/04/fsa.png">
			</div>
		</div>
	</div>
</section>
<section class="content default-template landing-template">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Service Reviews</h3>
			</div>
		</div>
		<div class="row reviews">
			<div class="col-md-4">
				<div class="review-cont">
					<h4>Mark - Catering Manager</h4>
					<p>We have been using Fry Fresh for our <?php echo the_title(); ?> for nearly 2 years and they have helped us to engage in a more environmentally friendly approach to how we recycle our waste.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="review-cont">
					<h4>Hilton - Waste Management</h4>
					<p>It is imperitive that our company ensure that our <?php the_title(); ?> will be handled properly by an ethical supplier. We buy and return our oils from Fry Fresh and know its disposal is in good hands. </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="review-cont">
					<h4>Meredith - Technical Director</h4>
					<p>Our monthly audits ensure our own practices operate within our quality management systems. Fry Fresh play a significant part in safe waste management. They take care of each and every stage from delivery to collection.</p>
				</div>
			</div>
		</div>
		<div class="the-team">
		<div class="row">
			<h3>Fry Fresh provide a winning <?php echo the_title(); ?> service through a winning team. We invest in our people.</h3>
		</div>
			<div class="row">
			<?php
			$teams = get_field('team', 74);			
			$i = 0;
			foreach ($teams as $team){ if ($i==8) break;?>
				<div class="col-sm-3 profile">
					<img src="<?php echo $team['photo']; ?>" alt="<?php echo $team['name']; ?>:<?php echo $team['job_title']; ?>">
					<h3><?php echo $team['name']; ?><br><?php echo $team['job_title']; ?></h3>
					<a class="btn btn-primary">Read More</a>
						<div class="bio-cont">
							<div class="bio">
								<p><?php echo $team['bio'];?></p>
							</div>
						</div>
						
						<?php if ($i % 4 == 3) {echo '</div></div><div class="row">';}else{echo '</div>';} ?>
					<?php $i++; } ?>
		</div>
				

		<div class="row products-cta">
			<div class="col-md-12">
				<div class="orange">
					<?php the_field('cta_text',27); ?>								
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
