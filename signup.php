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
				<div class='large_heading'>Sign Up/Register</div>
				<label>Name: </label>
				<input type='text' placeholder='Name goes here'>
				<label>Email: </label>
				<input type='text' placeholder='Email goes here'>
				<label>Password: </label>
				<input type='password' placeholder='Password..'>
				<label>Contact Number: </label>
				<input type='text' placeholder='+92 308..'>
			</form>
			<div class='buttons'>
				<button style='background: #e74c3c; color: white;' onclick='goto("login.php")'>Register</button>
			</div>
		</div>
	</div>
</div>