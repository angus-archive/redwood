
<?php
	switch ($CURRENT_PAGE){
		case "Economy-P":
			$class_col = "econBackground";
			break;
		case "Redwood-P":
			$class_col = "redwoodBackground";
			break;
		case "Deluxe-P":
			$class_col = "deluxeBackground";
			break;
		case "Relaunch-P":
			$class_col = "relaunchBackground";
			break;
		default:
			$class_col = "bg-info";
			break;
	}
?>

<!--How it works -->
<div class="container-fluid">
	<h3 class="mb-2 text-center py-sm-3 text-dark">How it works</h3>
	<div class="container">
		<div class="row how_it_works">
			<div class="col-md-4 col-sm-6 mb-5">
				<div class="card text-center packageShadow <?php echo $class_col?> text-white" style="border-radius: 10%">
					<div class="card-body">
						<h1 class="mb-2 display-1">1</h1>
						<h4 class="mt-sm-2">Select a package</h4>
						<h6>Choose one of our packages or services</h6>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 mb-5">
				<div class="card text-center packageShadow <?php echo $class_col?> text-white" style="border-radius: 10%">
					<div class="card-body">
						<h1 class="mb-2 display-1">2</h1>
						<h4 class="mt-sm-2">Send us an email</h4>
						<h6>Send us an email outlining which package or services you require</h6>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 mb-5">
				<div class="card text-center packageShadow <?php echo $class_col?> text-white" style="border-radius: 10%">
					<div class="card-body">
						<h1 class="mb-2 display-1">3</h1>
						<h4 class="mt-sm-2">We'll get in touch</h4>
						<h6>Our support team will get in touch with you asap</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
