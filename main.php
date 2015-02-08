<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=500" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/tweenmax.js"></script>
		<script type="text/javascript" src="js/scrollmagic.js"></script>
		<script type="text/javascript" src="js/scrollmagic.debug.js"></script>
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		<link rel="stylesheet" type="text/css" href="css/ticker.css"/>
	</head>
	<body>
		<div id="backgrounds">
			<div id="grad1" class="background"></div>
			<div id="grad2" class="background"></div>
			<div id="grad3" class="background"></div>
			<div id="grad4" class="background"></div>
			<div id="grad5" class="background"></div>
		</div>
		<div id="rest">
			<div id="Events" class="sec">Events</div>
			<div id="Workshops" class="sec">Workshops</div>
			<div id="Proshows" class="sec">Proshows</div>
			<div id="Info" class="sec">General Info</div>
			<div id="Sponsors" class="sec">Sponsors</div>
		</div>
		<?php include ('ticker.html'); ?>

	</body>
	<script>
	$(document).ready(function($) {
		// init controller
		var controller = new ScrollMagic();

		// build scenes
		new ScrollScene({triggerElement: "#Events"})
						.setClassToggle("#grad1", "active") // add class toggle
						.addTo(controller)
						.addIndicators();
		new ScrollScene({triggerElement: "#Workshops"})
						.setClassToggle("#grad2", "active") // add class toggle
						.addTo(controller)
						.addIndicators();
		new ScrollScene({triggerElement: "#Proshows"})
						.setClassToggle("#grad3", "active") // add class toggle
						.addTo(controller)
						.addIndicators();
		new ScrollScene({triggerElement: "#Info"})
						.setClassToggle("#grad4", "active") // add class toggle
						.addTo(controller)
						.addIndicators();
		new ScrollScene({triggerElement: "#Sponsors"})
						.setClassToggle("#grad5", "active") // add class toggle
						.addTo(controller)
						.addIndicators();

	});
</script>
</html>