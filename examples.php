<?php
	require_once('connection.php');
	$conn = Database::connectionPDO();

	$code = $conn->prepare("SELECT * FROM table");
	$code->execute();
	$data = $code->fetchAll(PDO::FETCH_ASSOC);

	$bind = 123;
	$code = $conn->prepare("SELECT code FROM table WHERE code = :bind");
	$code->bindParam(':bind',$bind);
	$code->execute();
	$data = $code->fetchColumn();

	/*
	More:
	https://bit.ly/3oA6OEe
	*/
