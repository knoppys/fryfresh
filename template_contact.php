<?php
/*
Template Name: Contact
*/
//get the header
get_header(); 
//start the page loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
?>

<section class="contact">
	
				<div id="map"></div>
			    <script>
			      function initMap() {
			        var uluru = {lat: 53.00233705256955, lng: -3.0373281240463257};
			        var map = new google.maps.Map(document.getElementById('map'), {
			        zoom: 9,
			        center: uluru,
			        scrollwheel: false,
          			navigationControl: false,
          			mapTypeControl: false,
			        });
			        var marker = new google.maps.Marker({
			          position: uluru,
			          map: map,
			          content: 'hello world'
			        });
			      }
			    </script>
			    <script async defer
			    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8Y1rGlR_jeqwCkWzdZF8PQwmIhUnv2mM&callback=initMap">
			    </script>
		
</section>
<section class="contact content">
	<div class="container">
		<div class="row">
			<div class="col-md-4 reach-us">
				<h2>Reach Us</h2>
				<?php the_field('reach_us'); ?>
			</div>
			
			<div class="col-md-4 main-contact">
				<h2>Mail Us</h2>
				<?php echo do_shortcode('[contact-form-7 id="202" title="Main Contact"]'); ?>
			</div>
			<div class="col-md-4">
				<h2>General Contact</h2>
				<?php the_field('address'); ?>
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



?>
