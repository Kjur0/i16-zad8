<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8">
	<link href="styles.css" rel="stylesheet">
	<link href="./assets/img2.png" rel="icon">
	<title>Kino pod gwiazdami</title>
	<meta name="author" content="Krzysztof Jurkowski">
	<meta name="description" content="Utworzono 18.05.2023">
</head>

<body>
	<?php include "head.php"; ?>
	<form id="order" method="post" action="oblicz.php">
		<h2>Kasa biletowa ONLINE</h2>
		<label for="n">Liczba biletów normalnych (27zł/szt.):</label><br>
		<input type="number" name="n" id="n" min="0" value="0" required><br>
		<label for="u">Liczba biletów ulgowych (18zł/szt.):</label><br>
		<input type="number" name="u" id="u" min="0" value="0" required><br>
		<input type="submit" value="Zamów">
	</form>
	<?php include "foot.php";?>
</body>

</html>