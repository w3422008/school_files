<?php
$persons = array(
    0 => array( 'name' => '田中さくら', 'sei' => '女', 'height' => 158.3, 'weight' => 38.7 ),
    1 => array( 'name' => '吉木あずさ', 'sei' => '女', 'height' => 152.4, 'weight' => 68.1 ),
    2 => array( 'name' => '船橋浩之', 'sei' => '男', 'height' => 174.6, 'weight' => 94.3 ),
    3 => array( 'name' => '木村美咲', 'sei' => '女', 'height' => 157.6, 'weight' => 52.5 ),
    4 => array( 'name' => '宮内留美子', 'sei' => '女', 'height' => 160.1, 'weight' => 60.4 ),
    5 => array( 'name' => '山川勝一', 'sei' => '男', 'height' => 184.9, 'weight' => 90.0 ),
    6 => array( 'name' => '中村由美', 'sei' => '女', 'height' => 155.0, 'weight' => 40.8 ),
    7 => array( 'name' => '大井花子', 'sei' => '女', 'height' => 156.2, 'weight' => 58.8 ),
    8 => array( 'name' => '井上拓也', 'sei' => '男', 'height' => 180.3, 'weight' => 73.5 ),
    9 => array( 'name' => '斎藤恵', 'sei' => '女', 'height' => 159.4, 'weight' => 51.7 ),
    10 => array( 'name' => '渡辺大輔', 'sei' => '男', 'height' => 182.1, 'weight' => 95.6 ),
    11 => array( 'name' => '山本菜々子', 'sei' => '女', 'height' => 161.7, 'weight' => 42.9 ),
    12 => array( 'name' => '竹中美希', 'sei' => '女', 'height' => 148.5, 'weight' => 64.5 ),
    13 => array( 'name' => '佐藤健太', 'sei' => '男', 'height' => 176.8, 'weight' => 68.5 ),
    14 => array( 'name' => '松本瑞希', 'sei' => '女', 'height' => 154.9, 'weight' => 48.3 ),
    15 => array( 'name' => '島田正巳', 'sei' => '男', 'height' => 171.7, 'weight' => 62.9 ),
    16 => array( 'name' => '加藤明美', 'sei' => '女', 'height' => 153.6, 'weight' => 70.2 ),
    17 => array( 'name' => '林祐介', 'sei' => '男', 'height' => 175.1, 'weight' => 59.8 ),
    18 => array( 'name' => '清水理恵', 'sei' => '女', 'height' => 162.3, 'weight' => 41.9 ),
    19 => array( 'name' => '高橋一郎', 'sei' => '男', 'height' => 169.4, 'weight' => 82.3 ),
    20 => array( 'name' => '小林千代', 'sei' => '女', 'height' => 150.8, 'weight' => 56.3 ),
    21 => array( 'name' => '野口幸子', 'sei' => '女', 'height' => 156.7, 'weight' => 37.8 ),
    22 => array( 'name' => '伊藤裕太', 'sei' => '男', 'height' => 179.5, 'weight' => 86.1 )
	//,23 => array( 'name' => '飯塚芳樹', 'sei' => '男', 'height' => 167.5, 'weight' => 86.1 )
);
$judge=$_POST['status'];
$select_persons = array();
$class = array();

foreach($persons as $key => $person){
	$bmi = $person['weight'] / (($person['height']/100)*($person['height']/100));
	switch (true) {
		case $bmi < 18.5:
			$status = '低体重';
			break;
		case $bmi < 25:
			$status = '標準体重';
			break;
		case $bmi >= 25:
			$status = '過体重';
			break;
	}

	$persons[$key]['bmi'] = $bmi;
	$persons[$key]['status'] = $status;	

	foreach($judge as $value){
		if($value == $status){
			$select_persons[] = $persons[$key];
			$class[] = ($status == '過体重') ? 'bmi-overweight' : (($status == '低体重') ? 'bmi-underweight' : '');
			break;
		}
	}

}


?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="IE=edge">
		<title>6章 練習問題3</title>
		<link rel="stylesheet" href="../style.css">
		<style>
			.bmi-overweight {
				color:rgb(228, 68, 53);
			}
			.bmi-underweight {
				color: #3498db;
			}
		</style>
	</head>

	<body>
		<h1>6章 練習問題3</h1>
		<h2>データ表示・BMI判定</h2>
		<p>判定：<?php echo implode(" , ",$_POST['status']) ?></p>
		<table>
			<tr>
				<th>No</th>
				<th>氏名</th>
				<th>性別</th>
				<th>身長cm</th>
				<th>体重kg</th>
				<th>BMI</th>
				<th>BMI判定</th>
			</tr>
<?php
			$i = 0;
			foreach($select_persons as $key =>$person){
?>
			<tr>
				<td><?php echo $key + 1; ?></td>
				<td><?php echo htmlspecialchars($person['name'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?php echo htmlspecialchars($person['sei'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?php echo htmlspecialchars($person['height'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?php echo htmlspecialchars($person['weight'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?php echo htmlspecialchars($person['bmi'], ENT_QUOTES, 'UTF-8'); ?></td>
				<td class="<?php echo $class[$i]; ?>">
					<?php echo htmlspecialchars($person['status'], ENT_QUOTES, 'UTF-8'); ?>
				</td>
			</tr>
<?php
				$i++;
			}
?>			
		</table>
		<p><a href="index.php">戻る</a></p>
	</body>
</html>
