<?php
		if(isset($_GET['length'])) {
			$length = $_GET['length'];

			$password = generatePassword($length);
		}

		function generatePassword($length) {
			$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
			$password = '';
			
            for($i=0; $i<$length; $i++) {
				$password .= $chars[rand(0, strlen($chars)-1)];
			}
			return $password;
		}
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