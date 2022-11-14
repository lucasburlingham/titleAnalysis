<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Title Analysis Install</title>
	<meta http-equiv="refresh" content="5; url=install.php">

	<script>
		var startingInt = 5;

		const countdownTimeout = setTimeout({
			const countdownElement = document.getElementById("countdown");

			countdownTimeout.innerText = startingInt;
			startingInt--;
		}, 1000);
	</script>
</head>
<body>
	Please allow extension to be installed in the window that will open in less than <span id="countdown">5</span> seconds...
</body>
</html>
