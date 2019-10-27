jQuery(document).ready(function($){
// Add your custom jQuery here

	var $header = $('.navfixed'),
	    scrollClass = 'fixed',
	    activateAtY = 186;
	var $sitecontent = $('.site-content'),
		scrollSpace = 'scrollSpace';

	function deactivateHeader() {
	    if (!$header.hasClass(scrollClass)) {
	        $header.addClass(scrollClass);
	        $sitecontent.addClass(scrollSpace);
	    }
	}

	function activateHeader() {
	    if ($header.hasClass(scrollClass)) {
	        $header.removeClass(scrollClass);
   	        $sitecontent.removeClass(scrollSpace);

	    }
	}

	$(window).scroll(function() {
	    if($(window).scrollTop() > activateAtY) {
	        deactivateHeader();
	    } else {
	        activateHeader();
	    }
	});



});