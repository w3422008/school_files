<?php
$dsn = "mysql:dbname=7-5_exercise;host=localhost;charset=utf8mb4";
$user = "root";
$pass = "";

try {
	$dbh = new PDO($dsn,$user,$pass);
	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql = "SELECT gender,prefecture, COUNT(*) AS count, AVG(`age`) AS avg_age,AVG(`height`) AS avg_height,AVG(`weight`) AS avg_weight
		FROM `patient`
		WHERE `age`>= 50
		GROUP BY gender,prefecture
		ORDER BY gender DESC,avg_age ASC;
	";
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();

	$data=array();
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$data[]=$row;
	}

}catch (PDOException $e){
	print($e->getMessage());
	exit();
}
// var_dump($data);
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="IE=edge">
		<title>7章 練習問題5</title>
		<link rel="stylesheet" href="../style.css">
	</head>
	<body>
		<h1>7章 練習問題5</h1>
		<h2>性別別都道府県別の人数、平均年齢、平均身長、平均体重</h2>
		<table>
			<tr>
				<th>性別</th>
				<th>都道府県</th>
				<th>人数</th>
				<th>平均年齢</th>
				<th>平均身長</th>
				<th>平均身長</th>
			</tr>
<?php
			foreach($data as $value):
?>
				<tr>
					<td><?php echo $value['gender'] ?></td>
					<td><?php echo $value['prefecture'] ?></td>
					<td><?php echo $value['count'] ?>人</td>
					<td><?php echo $value['avg_age'] ?>歳</td>
					<td><?php echo $value['avg_height'] ?>cm</td>
					<td><?php echo $value['avg_weight'] ?>kg</td>
				</tr>
<?php
			endforeach;
?>
		</table>
		<a href="search.php">戻る</a>
	</body>
</html>
