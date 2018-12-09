<?php
	include("inc/view.inc.php");
	include("inc/header.inc.php");
	$selected_location = $_GET['location'];
?>
<div id='container' class='selected_location'>
	<div id='map'></div>
	<div class='wrapper'>
		<div class='heading location_name'>Gilgit</div>
		<div class='heading selected_location_name'><?php echo $selected_location; ?></div>
		<div class='some_information'>
			<div class='left_side'>
				<button class='get_directions_button' onclick='goto("get_directions.php?location=<?php echo $selected_location; ?>")'>Get Directions</button>
			</div>
			<div class='right_side'>
				<div class='stars'>
					<button class='star ion-ios-star'></button>
					<button class='star ion-ios-star'></button>
					<button class='star ion-ios-star'></button>
					<button class='star ion-ios-star'></button>
					<button class='star ion-ios-star'></button>
				</div>
				<div class='textual_rating'>4.5 Stars Rating</div>
				<div class='ion-ios-location with_icon' style='font-weight: bold; letter-spacing: 2px; margin-top: 20px;'>12 Miles Away</div>
			</div>
		</div>
		<div class='reviews_holder'>
			<div class='heading' style='font-size: 24px; font-weight: bolder;'>Reviews</div>
			<div class='review'>
				<div class='circle'></div>
				<div class='review_content'>
					<div class='reviewer_name'>Tufeel Shahid</div>
					<div class='review_text'>It was a wonderful place, real nice people, friendly enviornment.</div>
				</div>
			</div>
			<div class='review'>
				<div class='circle'></div>
				<div class='review_content'>
					<div class='reviewer_name'>Shafiq Mehmood</div>
					<div class='review_text'>Some places around this hotel are worth going, we've been to couple of places and were not disappointed, would recommend you guys to visit them too..</div>
				</div>
			</div>
		</div>
	</div>
</div>