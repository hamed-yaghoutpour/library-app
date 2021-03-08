<?php
	$servername = "localhost";
	$username = "aneserin_root";
	$password = "hamed1382h";
	$db_name = "aneserin_library_app";
	
	//for test on xampp:
	
	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $db_name = "library_app";
	
	
	//create the database for first time by hand.
	//$conn = mysqli_connect($servername,$username,$password);
	//mysqli_set_charset($conn,"utf8");
	//$sql = "create database if not exists library_app character set utf8mb4 collate utf8mb4_unicode_ci";
	//mysqli_query($conn,$sql);
	$conn = mysqli_connect($servername,$username,$password,$db_name);
	mysqli_set_charset($conn,"utf8");