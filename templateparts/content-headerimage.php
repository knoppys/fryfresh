<?php $thumbnail =  get_the_post_thumbnail_url(); ?>
<section class="banner" style="background: url(<?php echo $thumbnail; ?>) no-repeat center center fixed; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php echo the_title('<h1>','</h1>'); ?>
			</div>
		</div>
	</div>
</section>