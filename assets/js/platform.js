(function($){

	$('.show-mobile-menu').on( 'click', function(e){
		
		if ( $('.mobile-nav .menu').is(':visible') == false ) $('.mobile-nav .menu').show();
		else $('.mobile-nav .menu').hide();

	});

	$('.mobile-nav .menu a').on( 'click', function(e){
		$('.mobile-nav .menu').hide();
	});

	// Countdown Timer
	var target_date = new Date("October 29, 2013").getTime();
	var days, hours, minutes, seconds;
	var countdown = $('.countdown');

	setInterval(function () {

		// find the amount of "seconds" between now and target
	    var current_date = new Date().getTime();
	    var seconds_left = (target_date - current_date) / 1000;
	 
	    // do some time calculations
	    $('.time.days').text( parseInt(seconds_left / 86400) );
	    seconds_left = seconds_left % 86400;
	     
	    $('.time.hours').text( parseInt(seconds_left / 3600) );
	    seconds_left = seconds_left % 3600;
	     
	    $('.time.minutes').text( parseInt(seconds_left / 60) );
	    $('.time.seconds').text( parseInt(seconds_left % 60) );

	}, 1000);

})(jQuery);