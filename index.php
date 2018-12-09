<?php
	include("inc/view.inc.php");
	include("inc/header.inc.php");
?>
<div id='container' class='main_page'>
	<div class='background'></div>
	<div class='center_div text_center_div'>
		<div class='app_logo'></div>
		<div class='app_info'>
			<div class='app_title'><?php echo $app_title; ?></div>
			<div style='font-size: 12px;'>North Pakistan Tourist Guide</div>
			<div class='buttons'>
				<button style='background: #2ecc71; color: white;' onclick='goto("signup.php")'>Sign Up</button>
				<button style='background: #e74c3c; color: white;' onclick='goto("login.php")'>Login</button>
			</div>
		</div>
	</div>
</div>