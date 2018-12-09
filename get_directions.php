<?php
	include("inc/view.inc.php");
	include("inc/header.inc.php");
	$selected_location = $_GET['location'];
?>
<div id='container' class='selected_region'>
	<div class='wrapper'>
		<hr>
		<div class='heading'>Directions for '<?php echo $selected_location; ?>'</div>
		<div id='map' class='almost_full_screen'></div>
		<script>
			get_route('<?php echo $selected_location; ?>');
		</script>
		<br>
	</div>
</div>