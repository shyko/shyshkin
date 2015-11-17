<!DOCTYPE html>
<html>
<head>
	<title>Real-Time Clock</title>
	<meta http-equiv="refresh" content="1">
	<style type="text/css">
	@font-face {
		font-family: Digital;
		src: url(digital.ttf);
	}
.time {
	font-size: 670%;
    font-family: Digital;
}



	</style>
</head>
<body>
<div class="time">
<?php
date_default_timezone_set('Europe/Helsinki');
print date("h : i :s A");
?>
</div>

</body>
</html>
