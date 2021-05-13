<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Главная страница</title>
</head>
<body>
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-4 text-center">
				<h1>Калькулятор на PHP</h1>
				<?php
					if (isset($_POST['submit'])) {
						$a = $_POST['a'];
						$b = $_POST['b'];
						$p = $_POST['p'];

						if ($p == '+') {
							$result = $a + $b;
						}

						elseif ($p == '-') {
							$result = $a - $b;
						}

						elseif ($p == '*') {
							$result = $a * $b;
						}

						elseif ($p == '/') {
							if ($b == 0) {
								$result = 'На ноль делить нельзя!';
							} else {
								$result = $a / $b;
							}
						}

						elseif ($p == '^') {
							$result = $a ** $b;
						}

						if (is_int($result) || is_float($result)) {
							echo '<div class="alert alert-success" role="alert">'.$result.'</div>';
						} else {
							echo '<div class="alert alert-danger" role="alert">'.$result.'</div>';
						}
					}
				?>
				<form action="" method="post">
					<input class="form-control" type="text" name="a" placeholder="Введите a" value="<?=$a;?>" required=""><br>
					<select class="form-control" name="p">
						<option value="+">+</option>
						<option value="-">-</option>
						<option value="*">*</option>
						<option value="/">/</option>
						<option value="^">^</option>
					</select><br>
					<input class="form-control" type="text" name="b" placeholder="Введите b" value="<?=$b;?>" required=""><br>
					<button class="btn btn-success" name="submit" type="submit">Вычислить</button>
				</form>
			</div>
		</div>
	</div>
</section>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>