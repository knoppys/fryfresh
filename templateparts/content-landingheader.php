<?php $thumbnail =  get_the_post_thumbnail_url(); ?>
<section class="banner" style="background: url(<?php echo $thumbnail; ?>) no-repeat center center fixed; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<?php the_field('landing-banner'); ?>
			</div>
			<div class="col-md-5 landing-form">
				<?php echo do_shortcode('[contact-form-7 id="202" title="Main Contact"]'); ?>
			</div>
		</div>
	</div>
</section>