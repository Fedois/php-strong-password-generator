<?php
	include_once './funcions.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PSW</title>
</head>
<body>
<h1>Generatore di password casuale</h1>
	<form method="GET">
		<label for="length">Lunghezza password:</label>
		<input type="number" id="length" name="length" min="1" max="10" required>
		<button type="submit">Genera</button>
	</form>

    <h2>la tua password casuale è: <?php echo $password ?></h2>
</body>
</html>