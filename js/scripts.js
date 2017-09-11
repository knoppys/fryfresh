jQuery(document).ready(function(){
  	jQuery(window).scroll(function(){
	    if (jQuery(this).scrollTop() > 10) {
	       jQuery('header').addClass('newClass');
	    } else {
	       jQuery('header').removeClass('newClass');
	    }
	});

	jQuery('.product-tabs').click(function (e) {
		e.preventDefault();
		jQuery(this).tab('show')
	});

	jQuery('.profile a').on('click', function(e){
		e.preventDefault();
		var bio = jQuery(this).closest('.profile').find('.bio-cont');
		jQuery(bio).toggle();
		jQuery('.bio-cont').not(bio).hide();			
	});
});


