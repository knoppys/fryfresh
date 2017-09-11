<?php /*This is the content part*/ 
if (has_post_thumbnail()){}else{the_title('<h1 class="page-title">','</h1>');}?>
<?php the_content(); ?>
<footer><?php /*comments would go in here*/ ?></footer>

