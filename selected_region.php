<?php
	include("inc/view.inc.php");
	include("inc/header.inc.php");
	$selected_region = $_GET['region'];
?>
<div id='container' class='selected_region'>
	<div id='map'></div>
	<div class='wrapper'>
		<br>
		<div>
			<div class='heading large_heading text_center_div'><?php echo $selected_region; ?></div>

			<div class='vertical_buttons'>
				<button>Hotels</button>
				<button>Restaurants</button>
				<button>Tour Guides</button>
			</div>
			<br>
			<br>
			<div class='heading text_center_div'>Recommendations</div>
			<div class='recommendations_holder'>
				<div class='hotel' onclick='goto("selected_location.php?location="+$(this).find(".hotel_name").html())'>
					<div class='square'></div>
					<div class='hotel_information'>
						<div class='left_side'>
							<div class='hotel_name'>Gilgit Zoo</div>
						</div>
						<div class='right_side'>
							<div class='hotel_rating'>4.5 Stars</div>
						</div>
						<div class='hotel_distance_from_location'>43 Miles Away</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>