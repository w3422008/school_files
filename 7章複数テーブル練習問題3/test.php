<?php
$class_id = $_POST['class_id'] ?? '';
$score = htmlspecialchars($_POST['score'] ?? '', ENT_QUOTES, 'UTF-8');

try{
	$pdo = new PDO('mysql:host=localhost;dbname=7-7_exercise;charset=utf8mb4', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT c.class_name,s.std_id,s.std_name,t.score FROM test AS t LEFT JOIN student AS s ON t.std_id = s.std_id LEFT JOIN class AS c ON t.class_id = c.class_id WHERE c.class_id = :class_id ORDER BY s.std_id ASC";
	$stmt = $pdo->prepare($sql);
	$stmt -> bindValue(':class_id', $class_id, PDO::PARAM_STR);
	$stmt->execute();
	$data = array();
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
	}
	$count = $stmt -> rowCount();
} catch (PDOException $e) {
	echo "接続失敗: " . $e->getMessage();
}

// var_dump($data);
?>
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
		<h2>成績一覧</h2>
<?php
if ($score === '' || $count === 0) {
?>
	<p>最低合格点が入力されていないか、40点未満です</p>
<?php
}else{
?>
		<p>「<?php echo htmlspecialchars($data[0]['class_name'],ENT_QUOTES,'UTF-8'); ?>」の成績は、<?php echo $count ?>件見つかりました。</p>
			<table>
				<tr>
					<th>科目</th>
					<th>学生ID</th>
					<th>氏名</th>
					<th>得点</th>
					<th>判定<br><?php echo $score; ?>点以上</th>
				</tr>
<?php 
				foreach ($data as $row): 
?>
					<tr>
						<td><?php echo htmlspecialchars($row['class_name'],ENT_QUOTES,'UTF-8'); ?></td>
						<td><?php echo htmlspecialchars($row['std_id'],ENT_QUOTES,'UTF-8'); ?></td>
						<td><?php echo htmlspecialchars($row['std_name'],ENT_QUOTES,'UTF-8'); ?></td>
						<td><?php echo htmlspecialchars($row['score'],ENT_QUOTES,'UTF-8'); ?></td>
						<td><?php echo ($row['score'] >= $score) ? '〇' : '×'; ?></td>
					</tr>
<?php
				endforeach;
?>
		</table>
<?php
}
?>		
		<p><a href="index.php">戻る</a></p>
	</body>
</html>
