<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8">
	<link href="styles.css" rel="stylesheet">
	<link href="./assets/img2.png" rel="icon">
	<title>Kino pod gwiazdami</title>
	<meta name="author" content="Krzysztof Jurkowski">
	<meta name="description" content="Utworzono 18.05.2023">
	<?php
	$n = $_POST['n'];
	$u = $_POST['u'];
	$suma = $n * 27 + $u * 18;
	?>
</head>

<body>
	<header>
		<h1>Kino pod gwiazdami</h1>
	</header>
	<br id="enter1">
	<img id="ticket" src="./assets/img1.png" alt="Bilet">
	<div id="details">
		<h2>Kino Pod Gwiazdami</h2>
		<p>Dokonano następującego zamówienia:
		<ul>
			<li>Bilety normalne: <span class="quantity"><?php echo $n; ?> sztuk</span></li>
			<li>Bilety ulgowe: <span class="quantity"><?php echo $u; ?> sztuk</span></li>
		</ul>
		</p>
		<h3>Koszt twojego zamówienia wynosi: <span id="cost"><?php echo $suma; ?> zł.</span></h3>
	</div>
	<br id="enter2">
	<footer>
		<h3>Wykonanie Krzysztof Jurkowski</h3>
		<div>18.05.2023</div>
	</footer>
</body>

</html>