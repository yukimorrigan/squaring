<!DOCTYPE html>
<html>
<head>
	<title>Get-запрос</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="#" method="get">
		<input type="number" name="number" placeholder="Введите число" class="form-control">
		<input type="submit" name="submit" class="btn btn-primary" value="Отправить"></input>
		<?php if (isset($_GET['submit'])): ?>
		<p>Число <?php echo $_GET['number'] ?> в квадрате = <?php echo pow($_GET['number'], 2); ?></p>
		<?php endif; ?>
	</form>
</body>
</html>