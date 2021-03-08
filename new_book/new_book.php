<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>library app</title>
<link rel="stylesheet" href="new_book.css">
<script src="../common/jquery-3.5.1.js"></script>
<script src="new_book.js"></script>
</head>
<body>
<?php include "../common/header.php"; ?>


<form method="POST" action="new_book.php">
	<h1 class="main_title">کتاب جدیدی ثبت کنید: </h1>
	<div class="input">
		<h1 class="input_title">نام:</h1>
		<input name="name">
	</div>
	<div class="input">
		<h1 class="input_title">نویسنده:</h1>
		<input name="writer">
	</div>
	<div class="input">
		<h1 class="input_title">مترجم:</h1>
		<input name="translator">
	</div>
	<div class="input">
		<h1 class="input_title">انتشارات:</h1>
		<input name="publication">
	</div>
	<div class="input">
		<h1 class="input_title">کلید واژه ها:</h1>
		<input name="key_words">
	</div>
	<div class="input">
		<h1 class="input_title">توضیحات بیشتر:</h1>
		<input name="ex_info">
	</div>

	<button type="submit">ثبت اطلاعات و خروج</button>
</form>




<?php
if(isset($_POST["name"])){
	$name = $_POST["name"];
	$translator = $_POST["translator"];
	$publication = $_POST["publication"];
	$key_words = $_POST["key_words"];
	$ex_info = $_POST["ex_info"];
	$writer = $_POST["writer"];
	include_once("../common/database_config.php");
	$sql = "
		create table if not exists books(
			id int(5) PRIMARY KEY AUTO_INCREMENT,
			name varchar(200),
			translator varchar(200),
			publication varchar(200),
			key_words varchar(200),
			ex_info varchar(200),
			writer varchar(50)
		);
	";
	mysqli_query($conn,$sql);
	$sql = "
		insert into books (name,translator,publication,key_words,ex_info,writer)
		values ('$name','$translator','$publication','$key_words','$ex_info','$writer');
	";
	
	if(mysqli_query($conn,$sql)){
		echo "
		<script>
		alert('با موفقیت ثبت شد.');
		</script>
		";
	}else{
		echo "
		<script>
		alert('عملیات با مشکلی مواجه شد ،دوباره امتحان کنید.');
		</script>
		";
	};
};


?>
</body>
</html>