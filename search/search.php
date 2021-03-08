<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>library app</title>
<link rel="stylesheet" href="search.css">
<script src="../common/jquery-3.5.1.js"></script>
<script src="search.js"></script>
</head>
<body>
	<div class="my_background"></div>
	<?php include "../common/header.php"; ?>
	<div class="buttons_container">
		
		<button class="search_button">جستجو در کتابخانه</button>
		<input class="search_input" placeholder="کلید واژه مورد نظر">
		<div class="sep_line"></div>
		
		<button class="show_all_books_button">نمایش تمام کتاب ها</button>
	</div>
	
	<div class="container">
		<h1 class="for_empty_container">نتایج اینجا نمایش داده خواهند شد.</h1>
	</div>
</body>
</html>