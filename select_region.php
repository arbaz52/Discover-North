<?php
	include("inc/view.inc.php");
	include("inc/header.inc.php");
?>
<div id='container' class='select_location'>
	<div id='map'></div>
	<div class='wrapper'>
		<div class='heading text_center_div'>North Pakistan Tourist Guide</div>
		<div class='heading text_center_div'>Select Location</div>
		<div class='buttons'>
			<button  onclick='goto("selected_region.php?region="+this.innerHTML)'>Gilgit</button>
			<button  onclick='goto("selected_region.php?region="+this.innerHTML)'>Hunza Valley</button>
			<button  onclick='goto("selected_region.php?region="+this.innerHTML)'>Naran Kaghan</button>
		</div>
	</div>
</div>