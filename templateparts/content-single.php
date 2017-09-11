<?php /*This is the content part*/ ?>

<?php the_title('<h1 class="page-title">','</h1>'); ?>

<?php the_content(); ?>
<footer>
	<?php /*comments would go in here*/ 
	$fname = get_the_author_meta('first_name');
	$lname = get_the_author_meta('last_name');
	?>
	<strong>
		<p>Posted by : <?php echo $fname.' '.$lname ?> | On : <?php the_date(); ?></p>
	</strong>
</footer>

