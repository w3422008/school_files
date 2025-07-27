<?php
$dsn = "mysql:dbname=7-5_exercise;host=localhost;charset=utf8mb4";
$user = "root";
$pass = "";

try {
	$dbh = new PDO($dsn,$user,$pass);
	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql = "SELECT
  CASE
    WHEN `height` BETWEEN 130 AND 139 THEN 130
    WHEN `height` BETWEEN 140 AND 149 THEN 140
    WHEN `height` BETWEEN 150 AND 159 THEN 150
    WHEN `height` BETWEEN 160 AND 169 THEN 160
    WHEN `height` BETWEEN 170 AND 179 THEN 170
    WHEN `height` BETWEEN 180 AND 189 THEN 180
  END AS height_group,
  COUNT(*) AS count,
  AVG(`height`) AS avg_height,
  MAX(`height`) AS max_height,
  MIN(`height`) AS min_height,
  MAX(`height`) - MIN(`height`) AS diff
FROM `patient`
WHERE `height` BETWEEN 130 AND 189
GROUP BY height_group
ORDER BY height_group;
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
		<h2>身長別の人数、平均身長、最高身長、最低身長、差</h2>
		<table>
			<tr>
				<th>身長（cm台）</th>
				<th>人数</th>
				<th>平均身長</th>
				<th>最高身長</th>
				<th>最低身長</th>
				<th>差</th>
			</tr>
<?php
			foreach($data as $value):
?>
				<tr>
					<td><?php echo $value["height_group"] ?>cm</td>
					<td><?php echo $value["count"] ?>人</td>
					<td><?php echo $value["avg_height"] ?>cm</td>
					<td><?php echo $value["max_height"] ?>cm</td>
					<td><?php echo $value["min_height"] ?>cm</td>
					<td><?php echo $value["diff"] ?>cm</td>
				</tr>
<?php
			endforeach;
?>
		</table>
		<a href="search.php">戻る</a>
	</body>
</html>
