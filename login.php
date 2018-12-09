<?php
	include("inc/view.inc.php");
	include("inc/header.inc.php");
?>
<div id='container'>
	<div class='background'></div>
	<div class='text_center_div wrapper' style='padding-top: 20px !important;'>
		<div class='app_info'>
			<div class='app_title'><?php echo $app_title; ?></div>
			<div style='font-size: 12px;'>North Pakistan Tourist Guide</div>
			<form>
				<div class='large_heading'>Login</div>
				<label>Username: </label>
				<input type='text' placeholder='Username goes here'>
				<label>Password: </label>
				<input type='text' placeholder='Password..'>
			</form>
			<div class='buttons'>
				<button style='background: #e74c3c; color: white;' onclick='goto("select_region.php")'>Login</button>
				<button style='background: #2ecc71; color: white;' onclick='goto("signup.php")'>Don't have an account</button>
			</div>
		</div>
	</div>
</div>