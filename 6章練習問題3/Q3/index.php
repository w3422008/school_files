<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="IE=edge">
		<title>6章 練習問題3</title>
		<link rel="stylesheet" href="../style.css">
	</head>

	<body>
		<h1>6章 練習問題3</h1>
		<h2>データ表示・BMI判定</h2>
		<form action="person.php" method="POST">
			<input type="checkbox" name="status[]" value="低体重" id="r" checked><label for="r">低体重</label>
			<input type="checkbox" name="status[]" value="標準体重" id="s" checked><label for="s">標準体重</label>
			<input type="checkbox" name="status[]" value="過体重" id="o"checked><label for="o">過体重</label>
			<input type="submit" value="表示・判定">
		</form>
	</body>
</html>
