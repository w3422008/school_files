<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="IE=edge">
		<title>7章 練習問題9</title>
		<link rel="stylesheet" href="../style.css">
	</head>
	<body>
		<h1>7章 練習問題2</h1>
		<h2>テーブルへデータ挿入</h2>
		<p>入力したデータをプログラムからテーブルに挿入する</p>
		<form action="insert.php" method="POST">
			<p>氏名 <input type="text" name="ip_name"></p>
			<p>ヨミガナ <input type="text" name="ip_kana"></p>
			<p>
				性別 <input type="radio" name="ip_gender" id="male" value="男" checked><label for="male">男性</label>
					<input type="radio" name="ip_gender" id="female" value="女"><label for="female">女性</label>
			</p>
			<p>生年月日 <input type="date" name="ip_birthday"></p>
			<p>身長 <input type="number" step="0.1" name="ip_height" min="0">cm</p>
			<p>体重 <input type="number" step="0.1" name="ip_weight" min="0">kg</p>
			<input type="submit" value="登録">
		</form>
	</body>
</html>
