<?php
	//変数名は分かりやすく、意味のある名前をつけること
	$fizz = $_POST['fizz']; // fizzの値を取得
	$buzz = $_POST['buzz']; // buzzの値を取得
	$maximum = $_POST['maximum']; // 上限値を取得
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="IE=edge">
		<title>5章 練習問題2</title>
		<link rel="stylesheet" href="../style.css">
		<style>
			.color-fizz { background-color:rgb(237, 106, 106); } /*Fizzのときの色*/
			.color-buzz { background-color:rgb(128, 240, 128); } /*Buzzのときの色*/
			.color-fizzbuzz { background-color:rgb(131, 227, 227); } /*FizzBuzzのときの色*/
			.color-fizz, .color-buzz, .color-fizzbuzz {	width: 100px; }
		</style>
	</head>

	<body>
		<h1>5章 練習問題2</h1>
		<h2>1から<?php echo $maximum; ?>までのFizzBuzz判定結果を表示（1ずつ増加）</h2>

		<div>
			<span class="color-fizz">Fizz：<?php echo $fizz; ?>の倍数</span>
			<span class="color-buzz">Buzz：<?php echo $buzz; ?>の倍数</span>
			<span class="color-fizzbuzz">FizzBuzz：<?php echo $fizz; ?>と<?php echo $buzz; ?>両方の倍数</span>
		</div>
		<hr>

<?php
		if($maximum <= $fizz || $maximum <= $buzz){
?>
	
			<p class="err">上限はFizzとBuzzより大きい値を選択してください。</p>
<?php
	
		}elseif($fizz == $buzz){
?>
			<p class="err">FizzとBuzzは異なる値を選択してください。</p>
<?php
		}else{

?>
			<ul>
<?php
				for($i = 1; $i <= $maximum ;$i++){
					// fizzとbuzzの両方の倍数のとき
					if($i % $fizz == 0 && $i % $buzz == 0){
?>
						<li class="color-fizzbuzz"><?php echo $i; ?></li>
<?php
					// fizzの倍数のとき
					}elseif($i % $fizz == 0){
?>
						<li class="color-fizz"><?php echo $i; ?></li>
<?php
					// buzzの倍数のとき
					}elseif($i % $buzz == 0){
?>
						<li class="color-buzz"><?php echo $i; ?></li>
<?php
					// それ以外のとき
					}else{
?>
						<li><?php echo $i; ?></li>
<?php
					}
				}
			}
?>
		</ul>

		<p><a href="index.php">戻る</a></p>
	</body>
</html>
