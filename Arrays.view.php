<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arrays</title>
	<style> 
		header{
			background: gray;
			text-align: center;
		}
	</style>
</head>
<body>
<ul>
	<?php foreach ($names as $name): ?>
	<li> <?= $name; ?></li>
	<?php endforeach; ?>
</ul>
<ul>
	<?php foreach ($LastNames as $ln): ?>
	<li> <?= $ln; ?></li>
	<?php endforeach; ?>
</ul>
</body>
</html>