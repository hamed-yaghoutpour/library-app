<meta charset="utf-8">
<?php
	include_once("../common/database_config.php");
	$sql = "
		create table if not exists books(
			id int(5) PRIMARY KEY AUTO_INCREMENT,
			name varchar(200),
			translator varchar(200),
			publication varchar(200),
			key_words varchar(200),
			ex_info varchar(200)
		);
	";
	mysqli_query($conn,$sql);
	$sql = "select * from books";
	$results = mysqli_query($conn,$sql);
	$counter = 1;
	while($row = mysqli_fetch_assoc($results)){
		$name = $row["name"];
		$translator = $row["translator"];
		$publication = $row["publication"];
		$key_words = $row["key_words"];
		$ex_info = $row["ex_info"];
		$writer = $row["writer"];
		echo "
			<div class='result'>
				<div class='counter'>$counter</div>
				<div class='name'>نام کتاب: $name</div>
				<div class='writer'>نام نویسنده: $writer</div>
				<div class='translator'>نام مترجم: $translator</div>
				<div class='publication'>نام انتشارات: $publication</div>
				<div class='key_words'>کلید واژه ها: $key_words</div>
				<div class='ex_info'>توضیحات بیشتر: $ex_info</div>
			</div>
		
		
		
		";
		$counter++;
	};
?>