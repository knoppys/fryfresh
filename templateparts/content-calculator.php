<div class="row">
	<div class="col-md-3">
		<img src="<?php echo get_template_directory_uri();?>/images/hope-house-logo.png">
	</div>
	<div class="col-md-9">			
		<?php 
		//Get the fields and work out some values
		$ppl = get_field('ppl', 5) * 100;
		$sold = get_field('sold', 5);
		?>
		<h2>For each unit of cooking oil we sell, we make a donation to Hope House. </h2>
		<p>Over 12 months we have donated £7674.40 to those who need it most.</p>
	</div>
</div>