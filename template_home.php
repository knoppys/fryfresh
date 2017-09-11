<?php
/*
Template Name: Home
*/
//get the header
get_header(); 

//start the page loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $thumbnail =  get_the_post_thumbnail_url(); ?>
<section style="background: url(<?php echo $thumbnail; ?>) no-repeat center center fixed; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;" >
	<div class="container">
		<div class="home-banner">
			<div class="row">
				<div class="col-md-12">
					<h1 class="white-text"><?php the_field('heading'); ?></h1>
					<h2 class="white-text"><?php the_field('description'); ?></h2>
					<a class="btn btn-primary" href="<?php echo get_permalink('27'); ?>">Read More</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="intro-row content" id="orm">
	<div class="container">	
		<div class="row">
			<div class="col-md-12">
				<h1><?php the_field('intro-title'); ?></h1>
				<p><?php the_field('intro-description'); ?></p>
			</div>
		</div>	
	</div>
</section>

<section class="key-serv content">
	<div class="container">	
		<div class="row">
			<div class="col-md-4">
				<div class="key-serv-cont count-0">
				<img src="<?php echo get_template_directory_uri(); ?>/images/delivery.png">
					<h2><strong><?php the_field('column_left_title'); ?></strong></h2>
					<p><?php the_field('column_left_text'); ?></p>
					<a class="btn btn-primary" href="<?php the_field('column_left_link'); ?>">Read More</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="key-serv-cont count-1">
				<img src="<?php echo get_template_directory_uri(); ?>/images/collection.png">
					<h2><strong><?php the_field('column_middle_title'); ?></strong></h2>
					<p><?php the_field('column_middle_text'); ?></p>
					<a class="btn btn-primary" href="<?php the_field('column_middle_link'); ?>">Read More</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="key-serv-cont count-2">
				<img src="<?php echo get_template_directory_uri(); ?>/images/waste-management.png">
					<h2><strong><?php the_field('column_right_title'); ?></strong></h2>
					<p><?php the_field('column_right_text'); ?></p>
					<a class="btn btn-primary" href="<?php the_field('column_right_link'); ?>">Read More</a>
				</div>
			</div>
		</div>	
	</div>
</section>

<!--
<section class="slogan ">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="white-text"><?php the_field('slogan_title'); ?></h1>
				<p class="white-text"><?php the_field('slogan_description'); ?></p>
			</div>
		</div>		
	</div>
</section>
-->
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


<section class="products content">
	<div class="container">
		<div class="row">
			<div class="title-text col-md-12">
				<h1>Premium quality cooking oils</h1>
				<p>We endevour to supply our clients with the highest quality cooking oils available from the british market palce. We are committed to not only the development of our products, but the sustainability of their source and control over waste handling. </p>
			</div>
		</div>
		<div class="row product-row">
			<?php
			$args = array(
				'post_type'=>'products',
				'posts_per_page'=>2,
				'order'=>'ASC'
			);
			$productposts = get_pages( $args );
			foreach ( $productposts as $product ) { ?>

				<div class="col-sm-6">					
				    <table cellspacing="0" cellpadding="0" class="" width="100%" style="width: 100%" border-collapse="collapse">
				        <tbody>
				            <tr>    
				                <td>
				                	<?php $thumbnail =  get_the_post_thumbnail_url($product->ID, 'medium'); ?>
				                    <img src="<?php echo $thumbnail ?>">
				                </td>
				                <td>
				                	<h1><?php echo $product->post_title;?></h1>
				                	<p><?php echo $product->post_excerpt;?></p>
				                	<a class="btn btn-primary" href="<?php echo get_post_permalink($product->ID); ?>">Read More</a>
				                </td>
				            </tr>
				        </tbody>
				    </table> 					
				</div>

			<?php } ?>
		</div>
	</div>
</section>



<section class="media content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Fry Fresh Media</h1>
			</div>
		</div>
		<div class="row">
			<?php $args = array('post_type'=>'post','posts_per_page'=>4);
			$knoposts = get_posts( $args ); ?>
			<div class="col-md-6">
				<div class="home-news news-left white-text" style="background: url(<?php echo get_the_post_thumbnail_url($knoposts[0]->ID, 'medium'); ?>) no-repeat center center scroll; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
					<div class="news-container">
						<p class="white-text"><?php echo $knoposts[0]->post_title;?></p>
						<a class="btn btn-primary" href="<?php echo get_post_permalink($knoposts[0]->ID); ?>">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="home-news news-right-one" style="background: url(<?php echo get_the_post_thumbnail_url($knoposts[1]->ID, 'medium'); ?>) no-repeat center center scroll; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
					<div class="news-container">
						<p class="white-text"><?php echo $knoposts[1]->post_title;?></p>
						<a class="btn btn-primary" href="<?php echo get_post_permalink($knoposts[1]->ID); ?>">Read More</a>
					</div>
				</div>
				<div style="position: relative;"></div>
				<div class="home-news news-right-two" style="background: url(<?php echo get_the_post_thumbnail_url($knoposts[2]->ID, 'medium'); ?>) no-repeat center center scroll; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
					<div class="news-container">
						<p class="white-text"><?php echo $knoposts[2]->post_title;?></p>
						<a class="btn btn-primary" href="<?php echo get_post_permalink($knoposts[2]->ID); ?>">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="home-news news-right-three" style="background: url(<?php echo get_the_post_thumbnail_url($knoposts[3]->ID, 'medium'); ?>) no-repeat center center scroll; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
					<div class="news-container">
						<p class="white-text"><?php echo $knoposts[3]->post_title;?></p>
						<a class="btn btn-primary" href="<?php echo get_post_permalink($knoposts[3]->ID); ?>">Read More</a>
					</div>
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
get_footer('home');
