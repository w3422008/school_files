<<<<<<< HEAD
<?php
$error = "";

// var_dump($_POST);
if(!$_POST['ip_name'] || !$_POST["ip_kana"] || !$_POST["ip_gender"] || !$_POST["ip_birthday"] || !$_POST["ip_height"] || !$_POST["ip_weight"]){
	//バリデーション
	//メッセージ「未入力の項目があります。」
	$error="未入力の項目があります。";
}else{
	
	$dsn = "mysql:dbname=7-4_exercise;host=localhost;charset=utf8mb4";
	$user = "root";
	$pass = "";

	try {
		$dbh = new PDO($dsn,$user,$pass);
		$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


		//SQL文内のプレースホルダ名
		//氏名ph_name よみがなph_kana 性別ph_gender 生年月日ph_birthday 身長ph_height 体重ph_weight
		$sql = "INSERT INTO `persons` (`name`,`kana`,`gender`,`birthday`,`height`,`weight`) VALUES (:ph_name,:ph_kana,:ph_gender,:ph_birthday,:ph_height,:ph_weight)";
		$stmt = $dbh -> prepare($sql);
		$stmt -> bindValue(':ph_name', $_POST['ip_name'],PDO::PARAM_STR);
		$stmt -> bindValue(':ph_kana', $_POST['ip_kana'],PDO::PARAM_STR);
		$stmt -> bindValue(':ph_gender', $_POST['ip_gender'],PDO::PARAM_STR);
		$stmt -> bindValue(':ph_birthday', $_POST['ip_birthday'],PDO::PARAM_STR);
		$stmt -> bindValue(':ph_height', $_POST['ip_height'],PDO::PARAM_STR);
		$stmt -> bindValue(':ph_weight', $_POST['ip_weight'],PDO::PARAM_STR);
		$stmt -> execute();

	}catch (PDOException $e){
		print($e->getMessage());
		exit();
	}

}
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="IE=edge">
		<title>7章 練習問題2</title>
		<link rel="stylesheet" href="../style.css">
	</head>
	<body>
		<h1>7章 練習問題2</h1>
		<h2>テーブルへデータ挿入</h2>
<?php
		if($error){
?>
			<p><?php echo $error; ?></p>
<?php
		}else{
?>
			<p>データを登録しました。</p>
<?php
		}
?>
		<a href="input.php">戻る</a>
	</body>
</html>
=======
<?php
$error = "";

// var_dump($_POST);
if(!$_POST['ip_name'] || !$_POST["ip_kana"] || !$_POST["ip_gender"] || !$_POST["ip_birthday"] || !$_POST["ip_height"] || !$_POST["ip_weight"]){
	//バリデーション
	//メッセージ「未入力の項目があります。」
	$error="未入力の項目があります。";
}else{
	
	$dsn = "mysql:dbname=7-4_exercise;host=localhost;charset=utf8mb4";
	$user = "root";
	$pass = "";

	try {
		$dbh = new PDO($dsn,$user,$pass);
		$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


		//SQL文内のプレースホルダ名
		//氏名ph_name よみがなph_kana 性別ph_gender 生年月日ph_birthday 身長ph_height 体重ph_weight
		$sql = "INSERT INTO `persons` (`name`,`kana`,`gender`,`birthday`,`height`,`weight`) VALUES (:ph_name,:ph_kana,:ph_gender,:ph_birthday,:ph_height,:ph_weight)";
		$stmt = $dbh -> prepare($sql);
		$stmt -> bindValue(':ph_name', $_POST['ip_name'],PDO::PARAM_STR);
		$stmt -> bindValue(':ph_kana', $_POST['ip_kana'],PDO::PARAM_STR);
		$stmt -> bindValue(':ph_gender', $_POST['ip_gender'],PDO::PARAM_STR);
		$stmt -> bindValue(':ph_birthday', $_POST['ip_birthday'],PDO::PARAM_STR);
		$stmt -> bindValue(':ph_height', $_POST['ip_height'],PDO::PARAM_STR);
		$stmt -> bindValue(':ph_weight', $_POST['ip_weight'],PDO::PARAM_STR);
		$stmt -> execute();

	}catch (PDOException $e){
		print($e->getMessage());
		exit();
	}

}
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="IE=edge">
		<title>7章 練習問題2</title>
		<link rel="stylesheet" href="../style.css">
	</head>
	<body>
		<h1>7章 練習問題2</h1>
		<h2>テーブルへデータ挿入</h2>
<?php
		if($error){
?>
			<p><?php echo $error; ?></p>
<?php
		}else{
?>
			<p>データを登録しました。</p>
<?php
		}
?>
		<a href="input.php">戻る</a>
	</body>
</html>
>>>>>>> 4e0fd2ac5f00e69c7789777034b1b06af4a1498a
