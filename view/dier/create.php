<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include "../public/css/bootstrap.html";
	?>
	<meta charset="UTF-8">
	<title>Create</title>
</head>
<body>
	<form action="<?= URL ?>dier/createSave" method="POST">
	Naam:
	<input type="text" id="naam" name="naam">
	Ras: 
	<input type="text" id="ras" name="ras">
	Geboren:
	<input type="date" id="geboren" name="geboren">
	<input type="submit">
	</form>
</body>
</html>