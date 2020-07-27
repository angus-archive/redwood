<!-- Jquery CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Bootstrap CDN -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!-- JQuery Local fallback -->
<script>window.jQuery || document.write('<script src=\"/resources/vendor/jquery/jquery.min.js\"><\/script>')</script>
<!--Bootstrap Local Fallback -->
<script>
	//Bootstrap JS Fallback
    if(typeof($.fn.modal) === 'undefined'){
        console.log("Error Loading Bootstrap CDN (JS): Loaded Local")
        document.write('<script src=\"/resources/vendor/bootstrap/js/bootstrap.bundle.min.js\"><\/script>');
	}
    //Bootstrap CSS Fallback
    $(document).ready(function() {
        var footerText = $('#footerText').css('text-align');
        //If the footer is not centered then load the local bootstrap
        if (footerText === "start"){
			console.log("Error loading Bootstrap CDN (CSS): Loaded Local");
            $("head").prepend('<link rel="stylesheet" href="/resources/vendor/bootstrap/css/bootstrap.min.css">');
		}
    })

</script>



