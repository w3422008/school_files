<?php

//科目テーブルから科目IDと科目名を取得
try{
	$pdo = new PDO('mysql:host=localhost;dbname=7-7_exercise;charset=utf8mb4', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT class_id, class_name FROM class";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$data = array();
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
	}
} catch (PDOException $e) {
	echo "接続失敗: " . $e->getMessage();
}

?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="IE=edge">
		<title>7章複数テーブル練習問題3</title>
		<link rel="stylesheet" href="./style.css">
	</head>

	<body>
		<h1>7章複数テーブル練習問題3</h1>
		<h2>成績抽出</h2>
		<form action="test.php" method="POST">
			<p>
				<label>科目</label>
				<select name="class_id">
				<!-- 取得した科目IDをvalue属性に、科目名を表示にして、ドロップダウンリストを表示 -->
				<?php foreach ($data as $row): ?>
					<option value="<?php echo htmlspecialchars($row['class_id']); ?>">
						<?php echo htmlspecialchars($row['class_name']); ?>
					</option>
				<?php endforeach; ?>
				</select>
			</p>
			<p>
				<label>最低合格点</label>
				<input type="text" name="score">以上
			</p>
			<input type="submit" value="抽出">
		</form>
	</body>
</html>
