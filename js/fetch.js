$(document).ready(function($) {

$(function() {

			var base_url = 'http://www.ragam.org.in/2015/cms/api/';
			// var base_url = 'http://localhost/www/elegant-ragam/public/api/'
				
			$('#load').on('click', function(event) {
				event.preventDefault();

				jQuery.ajax({
				  url: base_url+'events',
				  type: 'GET',
				  dataType: 'jsonp',
				  success: function(data, textStatus, xhr) {
				  	if(data.length>0){
				  		$('.categories').html('<br>');
				  		data.forEach(function(category){
				  			$('.categories').append(category.name+'<br>');

				  			if(category.hasOwnProperty('sub_categories')){
				  				category.sub_categories.forEach(function(sub){
				  					$('.categories').append('--- '+sub.name+'<br>');

				  					if(sub.hasOwnProperty('events')){
				  						sub.events.forEach(function(this_event){
				  							$('.categories').append('--- <a href="#" class="event-name" data-event_code="'+this_event.event_code+'">@'+this_event.name+'</a><br>');
				  						});
				  					}
				  				});
				  			}			  			

				  		});

				  	}				  	
				  },
				  error: function(xhr, textStatus, errorThrown) {
				  	$('.categories').html('Error!');
				  }
				});
				
			});

			$('.categories').on('click', '.event-name', function(event) {
				event.preventDefault();

				jQuery.ajax({
				  url: base_url+'event/' + $(this).data('event_code'),
				  type: 'GET',
				  dataType: 'jsonp',
				  success: function(data, textStatus, xhr) {
				  	if(data.response == 'success'){
				  		$('.event').html(
				  			data.name+'<br>'+
				  			data.event_email+'@ragam.org.in<br>'+
				  			data.short_description+'<br>'
				  			);

						//etc.			  		

				  	}else{
				  		$('.event').html('Error - No event!');
				  	}		  	

				  		  	
				  },
				  error: function(xhr, textStatus, errorThrown) {
				  	$('.event').html('Error!');
				  }
				});
			});


		});
});