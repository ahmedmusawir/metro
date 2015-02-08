  // alert('ready');
jQuery(document).ready(function($) {

	$('.dropdown').on('show.bs.dropdown', function (event) {

		$(this).children('li').addClass('fuck');
		$(this).children('li').css('color', 'hotpink');
	  	alert('ready' + this);

			  // $(this).slideDown('400', function() {
			  // 	alert('ready');
			  	
	  });
	  			// $(this).fadeIn("slow");
	  			// event.preventDefault();
	  			// alert('ready');



	// });	

	  //ACCORDION SHIT


		$('.in').parent().children('.panel-heading').addClass('bg_blue');
	
   		$('.collapse').on('show.bs.collapse', function () {
		$(this).parent().children('.panel-heading').addClass('bg_blue');
	   			alert('ready');

		});
	
		$('.collapse').on('hide.bs.collapse', function () {
			$(this).parent().children('.panel-heading').removeClass('bg_blue');
	   			alert('ready');
			
		}); 
});
 
