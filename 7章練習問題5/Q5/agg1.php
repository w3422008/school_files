<?php
$dsn = "mysql:dbname=7-5_exercise;host=localhost;charset=utf8mb4";
$user = "root";
$pass = "";

try {
	$dbh = new PDO($dsn,$user,$pass);
	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql = "SELECT COUNT(*) AS count ,AVG(height) AS avg_height ,AVG(weight) AS avg_weight FROM `patient`";
	$stmt = $dbh -> prepare($sql);
	$stmt -> execute();

	$result = $stmt->fetch(PDO::FETCH_ASSOC);

}catch (PDOException $e){
	print($e->getMessage());
	exit();
}
// var_dump($result);
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
		<h2>全体の人数、平均身長、平均体重</h2>

		<p>人数：<?php echo $result["count"] ?>人</p>
		<p>平均身長：<?php echo $result["avg_height"] ?>cm</p>
		<p>平均体重：<?php echo $result["avg_weight"] ?>kg</p>

		<a href="search.php">戻る</a>
	</body>
</html>
