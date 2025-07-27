<<<<<<< HEAD
<?php

	// 変数の初期化
	// 繰り返しの下限：min　繰り返しの上限値：max
	// fizz/buzzの下限：fb_min　fizz/buzzの上限：fb_max

?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="IE=edge">
		<title>5章 練習問題2</title>
		<link rel="stylesheet" href="../style.css">
	</head>

	<body>
		<h1>5章 練習問題2</h1>
		<h2>1から上限値までのFizzBuzz判定結果を表示（1ずつ増加）</h2>
		<form action="calculation.php" method="POST">
			<p>上限
				<!-- for文を使ってドロップダウンリストを作成 name属性はmaximum-->
				<select name="maximum">
<?php

				for($i = 1; $i <= 100; $i++){
?>
					<option value="<?php echo $i ?>"><?php echo $i ?></option>
<?php
				}
?>
				</select>
			</p>
			<p>Fizz
				<!-- for文を使ってドロップダウンリストを作成 name属性はfizz-->
				<select name="fizz">
<?php

				for($i = 1; $i <= 100; $i++){
?>
					<option value="<?php echo $i ?>"><?php echo $i ?></option>
<?php
				}
?>
				</select>
			</p>
			<p>Buzz
				<!-- for文を使ってドロップダウンリストを作成 name属性はbuzz-->
				<select name="buzz">
<?php

				for($i = 1; $i <= 100; $i++){
?>
					<option value="<?php echo $i ?>"><?php echo $i ?></option>
<?php
				}
?>
				</select>
			</p>
			<input type="submit" value="表示">
		</form>
	</body>
</html>
=======
<?php

	// 変数の初期化
	// 繰り返しの下限：min　繰り返しの上限値：max
	// fizz/buzzの下限：fb_min　fizz/buzzの上限：fb_max

?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="IE=edge">
		<title>5章 練習問題2</title>
		<link rel="stylesheet" href="../style.css">
	</head>

	<body>
		<h1>5章 練習問題2</h1>
		<h2>1から上限値までのFizzBuzz判定結果を表示（1ずつ増加）</h2>
		<form action="calculation.php" method="POST">
			<p>上限
				<!-- for文を使ってドロップダウンリストを作成 name属性はmaximum-->
				<select name="maximum">
<?php

				for($i = 1; $i <= 100; $i++){
?>
					<option value="<?php echo $i ?>"><?php echo $i ?></option>
<?php
				}
?>
				</select>
			</p>
			<p>Fizz
				<!-- for文を使ってドロップダウンリストを作成 name属性はfizz-->
				<select name="fizz">
<?php

				for($i = 1; $i <= 100; $i++){
?>
					<option value="<?php echo $i ?>"><?php echo $i ?></option>
<?php
				}
?>
				</select>
			</p>
			<p>Buzz
				<!-- for文を使ってドロップダウンリストを作成 name属性はbuzz-->
				<select name="buzz">
<?php

				for($i = 1; $i <= 100; $i++){
?>
					<option value="<?php echo $i ?>"><?php echo $i ?></option>
<?php
				}
?>
				</select>
			</p>
			<input type="submit" value="表示">
		</form>
	</body>
</html>
>>>>>>> 4e0fd2ac5f00e69c7789777034b1b06af4a1498a
